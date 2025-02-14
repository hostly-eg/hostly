<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
class TeamMemberController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::all();
        return view('admin.team_members.index', compact('team_members'));
    }
    public function create()
    {
        return view('admin.team_members.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $team_member = new TeamMember();
        $team_member->name = $request->name;
        $team_member->job = $request->job;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/team_members'), $image_name);
            $team_member->image = $image_name;
        }
        $team_member->save();
        return redirect()->route('list_team_members')->with('success', 'Team member created successfully');
    }
    public function edit($id)
    {
        $team_member = TeamMember::find($id);
        return view('admin.team_members.edit', compact('team_member'));
    }
    public function update(Request $request, $id)
    {
        $team_member = TeamMember::find($id);
        $team_member->name = $request->name;
        $team_member->job = $request->job;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/team_members'), $image_name);
            $team_member->image = $image_name;
        }
        $team_member->save();
        return redirect()->route('list_team_members');
    }
    public function destroy($id)
    {
        $team_member = TeamMember::find($id);
        $team_member->delete();
        return redirect()->route('list_team_members');
    }
    public function image($image)
    {
        $image = public_path('images/team_members/'.$image);
        return response()->file($image);
    }
}
