<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientTestmonial;

class ClientTestmonialController extends Controller
{
    public function index()
    {
        $testmonials = ClientTestmonial::all();
        return view('admin.clientTestmonial.index', compact('testmonials'));
    }
    public function create()
    {
        return view('admin.clientTestmonial.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'job_title' => 'required',
            'testmonial' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|boolean',
        ]);
        $testmonial = new ClientTestmonial();
        $testmonial->name = $request->name;
        $testmonial->image = $request->file('image')->store('client-testmonial', 'public');
        $testmonial->job_title = $request->job_title;
        $testmonial->testmonial = $request->testmonial;
        $testmonial->rating = $request->rating;
        $testmonial->status = $request->status;
        $testmonial->save();
        return redirect()->route('list_client_testmonials')->with('success', 'Client Testmonial created successfully');
    }
    public function edit($id)
    {
        $testmonial = ClientTestmonial::find($id);
        return view('admin.clientTestmonial.edit', compact('testmonial'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'job_title' => 'required',
            'testmonial' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'status' => 'required|boolean',
        ]);
        $testmonial = ClientTestmonial::find($id);
        $testmonial->name = $request->name;
        $testmonial->job_title = $request->job_title;
        $testmonial->testmonial = $request->testmonial;
        $testmonial->rating = $request->rating;
        $testmonial->status = $request->status;
        if ($request->hasFile('image')) {
            $testmonial->image = $request->file('image')->store('client-testmonial', 'public');
        }
        $testmonial->save();
        return redirect()->route('list_client_testmonials')->with('success', 'Client Testmonial updated successfully');
    }
    public function destroy($id)
    {
        $testmonial = ClientTestmonial::find($id);
        $testmonial->delete();
        return redirect()->route('list_client_testmonials')->with('success', 'Client Testmonial deleted successfully');
    }
}
