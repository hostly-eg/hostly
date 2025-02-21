<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientTestmonial;
use App\Models\TeamMember;
use App\Models\Faq;
use App\Models\HostingPlan; 
class HostingPageController extends Controller
{
    public function cloud_hosting()
    {
        $testmonials = ClientTestmonial::all();
        $faqs = Faq::all();
        return view('user.cloud-hosting', compact('testmonials', 'faqs'));
    }
    public function share_hosting()
    {
        $testmonials = ClientTestmonial::all();
        $faqs = Faq::all();
        $plans = HostingPlan::all();
        // dd($plans);
        return view('user.share-hosting', compact('testmonials', 'faqs', 'plans'));
    }
    public function vps_hosting()
    {
        $testmonials = ClientTestmonial::all();
        $faqs = Faq::all();
        return view('user.vps-hosting', compact('testmonials', 'faqs'));
    }
    public function dedicated_hosting()
    {
        $testmonials = ClientTestmonial::all();
        $faqs = Faq::all();
        return view('user.dedicated-hosting', compact('testmonials', 'faqs'));
    }
    public function wordpress_hosting()
    {
        $testmonials = ClientTestmonial::all();
        $faqs = Faq::all();
        return view('user.wordpress-hosting', compact('testmonials', 'faqs'));
    }
    public function reseller_hosting()
    {
        $testmonials = ClientTestmonial::all();
        $affilates = \App\Models\Affilate::all();
        $affilateFields = \App\Models\AffilateField::all();    
        $faqs = Faq::all();
        return view('user.reseller-hosting', compact('testmonials', 'faqs', 'affilates', 'affilateFields'));
    }
    public function doming()
    {
        $testmonials = ClientTestmonial::all();
        $faqs = Faq::all();
        return view('user.doming', compact('testmonials', 'faqs'));
    }
    public function team()
    {
        $team_members = TeamMember::all();
        return view('user.team', compact('team_members'));
    }
    public function support()
    {
        $testmonials = ClientTestmonial::all();
        $faqs = Faq::all();
        return view('user.support', compact('testmonials', 'faqs'));
    }
}
