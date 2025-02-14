<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HostingPlan;
use Illuminate\Http\Request;
use Exception;

class Plans extends Controller
{
    public function index()
    {
        $plans = HostingPlan::all();
        return view('admin.plans', compact('plans'));
    }

    public function create()
    {
        return view('admin.new-plan');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validatePlan($request);

        try {
            HostingPlan::create($this->mapPlanData($validatedData));
            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Plan has been successfully created!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to create plan: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $plan = HostingPlan::findOrFail($id);
        return view('admin.edit-plan', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $this->validatePlan($request);

        try {
            $plan = HostingPlan::findOrFail($id);
            $plan->update($this->mapPlanData($validatedData));
            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Plan has been successfully updated!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to update plan: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $plan = HostingPlan::findOrFail($id);
            $plan->delete();
            return back()->with('success', 'Hosting plan deleted successfully!');
        } catch (Exception $e) {
            return back()->with('error', 'Failed to delete plan: ' . $e->getMessage());
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
