<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\DomainPlan;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index($plan_id,$subs_id,$dom)
    {
        $domain = DomainPlan::findOrFail($plan_id);

        return view('user.domain-cart', compact('domain','dom','subs_id'));
    }
    public function checkDomain(Request $request)
    {
        // Validate domain input
        $request->validate([
            'domain' => 'required|string',
        ]);

        $extensions = DomainPlan::all();
//        $extensions = ['-eg.com','.com', '.org', '.net', '.shop', '.store', '.online' ];

        $domain = $request->input('domain');

        $hasExtension = false;
        $inputExtension = ''; $inputExtension_id = 0; $inputExtension_price = 0;

        foreach ($extensions as $extension) {
            if (str_ends_with($domain, $extension->extension)) {
                $hasExtension = true;
                $inputExtension = $extension->extension;
                $inputExtension_id = $extension->id;
                $inputExtension_price = $extension->price_1_year;
                $domain = substr($domain, 0, -strlen($extension->extension));
                break;
            }
        }

        $results = [];

        if ($hasExtension) {
            $fullDomain = $domain . $inputExtension;
            $isAvailable = !checkdnsrr($fullDomain, 'A') && !checkdnsrr($fullDomain, 'AAAA')
                && !checkdnsrr($fullDomain, 'MX') && !checkdnsrr($fullDomain, 'CNAME')
                && !checkdnsrr($fullDomain, 'NS') && !checkdnsrr($fullDomain, 'TXT');

            $results[] = [
                'domain' => $fullDomain,
                'status' => $isAvailable ? 'متاح' : 'مستخدم',
                'show' => 1,
                'id' => $inputExtension_id,
                'price' => $inputExtension_price,
            ];

            foreach ($extensions as $extension) {
                if ($extension->extension !== $inputExtension) {
                    $fullDomain = $domain . $extension->extension;
                    $isAvailable = !checkdnsrr($fullDomain, 'A') && !checkdnsrr($fullDomain, 'AAAA')
                        && !checkdnsrr($fullDomain, 'MX') && !checkdnsrr($fullDomain, 'CNAME')
                        && !checkdnsrr($fullDomain, 'NS') && !checkdnsrr($fullDomain, 'TXT');

                    if ($isAvailable) {
                        $results[] = [
                            'domain' => $fullDomain,
                            'status' => 'متاح',
                            'show' => 2,
                            'id' => $extension->id,
                            'price' => $extension->price_1_year,
                        ];
                    }
                }
            }
        } else {
            $com_extension = DomainPlan::where('extension','.com')->first();

            $fullDomain = $domain . '.com';
            $isAvailable = !checkdnsrr($fullDomain, 'A') && !checkdnsrr($fullDomain, 'AAAA')
                && !checkdnsrr($fullDomain, 'MX') && !checkdnsrr($fullDomain, 'CNAME')
                && !checkdnsrr($fullDomain, 'NS') && !checkdnsrr($fullDomain, 'TXT');

            $results[] = [
                'domain' => $fullDomain,
                'status' => $isAvailable ? 'متاح' : 'مستخدم',
                'show' => 1,
                'id' => $com_extension->id,
                'price' => $com_extension->price_1_year,
            ];

            foreach ($extensions as $extension) {
                if ($extension->extension !== '.com') {
                    $fullDomain = $domain . $extension->extension;
                    $isAvailable = !checkdnsrr($fullDomain, 'A') && !checkdnsrr($fullDomain, 'AAAA')
                        && !checkdnsrr($fullDomain, 'MX') && !checkdnsrr($fullDomain, 'CNAME')
                        && !checkdnsrr($fullDomain, 'NS') && !checkdnsrr($fullDomain, 'TXT');

                    if ($isAvailable) {
                        $results[] = [
                            'domain' => $fullDomain,
                            'status' => 'متاح',
                            'show' => 2,
                            'id' => $extension->id,
                            'price' => $extension->price_1_year,
                        ];
                    }
                }
            }
        }

        return view('user.domain', compact('results', 'domain'));
    }
}
