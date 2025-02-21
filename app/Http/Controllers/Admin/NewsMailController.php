<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\PushMailNews;
use Illuminate\Http\Request;
use App\Models\NewsMail;
class NewsMailController extends Controller
{
    public function create()
    {
        return view('admin.news-mail.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);
        NewsMail::create($request->all());
        PushMailNews::dispatch($request->message)->onQueue('default');
        return redirect()->route('admin.news-mail.create')->with('success', 'News Mail created successfully');
    }

    public function index()
    {
        $newsMails = NewsMail::orderBy('created_at', 'desc')->get();
        return view('admin.news-mail.index', compact('newsMails'));
    }
}
