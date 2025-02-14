<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HostingPlan;
use App\Models\VpsPlan;
use Illuminate\Http\Request;
use Exception;

class VpsPlans extends Controller
{
    public function index()
    {
        $vps = VpsPlan::all();

        return view('admin.vps-plans', compact('vps'));
    }

    public function create()
    {
        return view('admin.new-vps-plan');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validatePlan($request);

        try {
            VpsPlan::create($this->mapPlanData($validatedData));

            return back()->with('notify', [
                'type' => 'success',
                'content' => 'VpsPlan has been successfully created!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to create VpsPlan: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $vps = VpsPlan::findOrFail($id);

        return view('admin.edit-vps-plan', compact('vps'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $this->validatePlan($request);

        try {
            $vps = VpsPlan::findOrFail($id);

            $vps->update($this->mapPlanData($validatedData));

            return back()->with('notify', [
                'type' => 'success',
                'content' => 'VpsPlan has been successfully updated!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to update VpsPlan: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $vps = VpsPlan::findOrFail($id);

            $vps->delete();

            return back()->with('success', 'VpsPlan deleted successfully!');
        } catch (Exception $e) {
            return back()->with('error', 'Failed to delete VpsPlan: ' . $e->getMessage());
        }
    }

    private function validatePlan(Request $request)
    {
        return $request->validate([
            'plan_name' => 'required|string|max:255',
            'plan_description' => 'required|string|max:255',
            'price_month' => 'required|numeric',
            'price_12month' => 'required|numeric',
            'price_24month' => 'required|numeric',
            'price_48month' => 'required|numeric',
            'plan_Renew' => 'required|numeric',
            'include_features' => 'nullable|string',
            'not_include_features' => 'nullable|string',
        ]);
    }

    private function mapPlanData($validatedData)
    {
        return [
            'name' => $validatedData['plan_name'],
            'description' => $validatedData['plan_description'],
            'price_1_month' => $validatedData['price_month'],
            'price_1_year' => $validatedData['price_12month'],
            'price_2_years' => $validatedData['price_24month'],
            'price_3_years' => $validatedData['price_48month'],
            'price_reNew' => $validatedData['plan_Renew'],
            'features_included' => $validatedData['include_features'],
            'features_not_included' => $validatedData['not_include_features'],
        ];
    }
}
