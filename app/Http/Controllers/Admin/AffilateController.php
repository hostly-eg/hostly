<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AffilateField;
use App\Models\Affilate;
use Illuminate\Support\Facades\Validator;

class AffilateController extends Controller
{
    public function index()
    {
        $affilates = Affilate::all();
        return view('admin.affilate.index', compact('affilates'));
    }

    public function create()
    {
        $affilateFields = AffilateField::all();
        return view('admin.affilate.create', compact('affilateFields'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'fields' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $affilate = new Affilate();
        $affilate->name = $request->name;
        $affilate->price = $request->price;
        $affilate->description = $request->description;
        $affilate->fields = json_encode($request->fields);
        $affilate->save();
        return redirect()->route('affilate')->with('success', 'Affilate created successfully');
    }
    
    public function edit($id)
    {
        $affilate = Affilate::find($id);
        $affilateFields = AffilateField::all();
        return view('admin.affilate.edit', compact('affilate', 'affilateFields'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'fields' => 'required',
        ]);
        if ($validator->fails()) {  
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $affilate = Affilate::find($id);
        $affilate->name = $request->name;
        $affilate->price = $request->price;
        $affilate->description = $request->description;
        $affilate->fields = json_encode($request->fields);
        $affilate->save();
        return redirect()->route('affilate')->with('success', 'Affilate updated successfully');
    }
}