<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OffersHeader;
class OffersHeaderController extends Controller
{
    public function index()
    {
        $offers = OffersHeader::all();
        return view('admin.offers_header.offers-list', compact('offers'));
    }

    public function create()
    {
        return view('admin.offers_header.new-offer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'offer_text' => 'required',
        ]);
        OffersHeader::create([
            'offer_header' => $request->offer_text,
            'status' => $request->active ? true : false,
        ]);
        return redirect()->route('offers_header')->with('success', 'Offer created successfully');
    }
    public function edit($id)
    {
        $offer = OffersHeader::find($id);
        return view('admin.offers_header.edit-offer', compact('offer'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'offer_text' => 'required',
        ]);
        $offer = OffersHeader::find($id);
        $offer->update([
            'offer_header' => $request->offer_text,
            'status' => $request->active ? true : false,
        ]);
        return redirect()->route('offers_header')->with('success', 'Offer updated successfully');
    }
    public function destroy($id)
    {
        $offer = OffersHeader::find($id);
        $offer->delete();
        return redirect()->route('offers_header')->with('success', 'Offer deleted successfully');
    }
}
