<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AffilateField;
use Illuminate\Support\Facades\Validator;
class AffilateFieldController extends Controller
{
    public function index()
    {
        $affilateFields = AffilateField::all();
        return view('admin.affilate-fields.index', compact('affilateFields'));
    }

    public function create()
    {
        return view('admin.affilate-fields.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'end_prefix' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        AffilateField::create($request->all());
        return redirect()->route('affilate_fields')->with('success', 'Affilate field created successfully');
    }

    public function edit($id)
    {
        $affilateField = AffilateField::find($id);
        return view('admin.affilate-fields.edit', compact('affilateField'));
    }

    public function update(Request $request, AffilateField $affilateField)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'end_prefix' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $affilateField->update($request->all());
        return redirect()->route('admin.affilate-fields.index')->with('success', 'Affilate field updated successfully');
    }

    public function destroy($id)
    {
        $affilateField = AffilateField::find($id);
        if (!$affilateField) {
            return redirect()->route('admin.affilate-fields.index')->with('error', 'Affilate field not found');
        }
        $affilateField->delete();
        return redirect()->route('admin.affilate-fields.index')->with('success', 'Affilate field deleted successfully');
    }

}
