<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs'));
    }
    public function create()
    {
        return view('admin.faqs.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->route('faqs')->with('success', 'Faq created successfully');
    }
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('admin.faqs.edit', compact('faq'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->route('faqs')->with('success', 'Faq updated successfully');
    }
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('faqs')->with('success', 'Faq deleted successfully');
    }
}
