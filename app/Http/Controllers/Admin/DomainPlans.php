<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DomainPlan;
use Illuminate\Http\Request;
use Exception;

class DomainPlans extends Controller
{
    public function index()
    {
        $domains = DomainPlan::all();

        return view('admin.domain-plans', compact('domains'));
    }

    public function create()
    {
        return view('admin.new-domain-plan');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validatePlan($request);

        try {
            DomainPlan::create($this->mapPlanData($validatedData));

            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Domain Plan has been successfully created!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to create Domain Plan: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $domain = DomainPlan::findOrFail($id);

        return view('admin.edit-domain-plan', compact('domain'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $this->validatePlan($request);

        try {
            $domain = DomainPlan::findOrFail($id);

            $domain->update($this->mapPlanData($validatedData));

            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Domain Plan has been successfully updated!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to update Domain Plan: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $domain = DomainPlan::findOrFail($id);

            $domain->delete();

            return back()->with('success', 'Domain plan deleted successfully!');
        } catch (Exception $e) {
            return back()->with('error', 'Failed to delete plan: ' . $e->getMessage());
        }
    }

    private function validatePlan(Request $request)
    {
        return $request->validate([
            'extension' => 'required|string|max:20',
            'price_12month' => 'required|numeric',
            'price_24month' => 'required|numeric',
            'price_48month' => 'required|numeric',
            'plan_Renew' => 'required|numeric',
        ]);
    }

    private function mapPlanData($validatedData)
    {
        return [
            'extension' => $validatedData['extension'],
            'price_1_year' => $validatedData['price_12month'],
            'price_2_years' => $validatedData['price_24month'],
            'price_3_years' => $validatedData['price_48month'],
            'price_reNew' => $validatedData['plan_Renew'],
        ];
    }
}
