<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Artisan;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }
    public function create()
    {
        return view('admin.partners.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);
        $partner = new Partner();
        $partner->name = $request->name;
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partners', 'public');
        }
        $partner->save();
        return redirect()->route('list_partners')->with('success', 'Partner created successfully');
    }
    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.partners.edit', compact('partner'));
    }
    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);
        $partner->name = $request->name;
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partners', 'public');
        }
        $partner->save();
        return redirect()->route('list_partners')->with('success', 'Partner updated successfully');
    }
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect()->route('list_partners')->with('success', 'Partner deleted successfully');
    }
}
