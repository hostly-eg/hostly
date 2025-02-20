<?php

use App\Http\Controllers\Admin\Coupons;
use App\Http\Controllers\Admin\Customers;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\DomainPlans;
use App\Http\Controllers\Admin\Orders;
use App\Http\Controllers\Admin\Plans;
use App\Http\Controllers\Admin\VpsPlans;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\user\Cart;
use App\Http\Controllers\user\DomainController;
use App\Http\Controllers\user\Home;
use App\Http\Controllers\user\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffersHeaderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ClientTestmonialController;
use App\Http\Controllers\HostingPageController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Admin\AffilateFieldController;
use App\Http\Controllers\Admin\AffilateController;
Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('dashboard');
    Route::get('/contact_requests', [ContactRequestController::class, 'index'])->name('contact_requests');
    Route::get('/read_contact_request/{id}', [ContactRequestController::class, 'read'])->name('read_contact_request');
    Route::get('/delete_contact_request/{id}', [ContactRequestController::class, 'destroy'])->name('delete_contact_request');
    //manage-offers-header
    Route::get('/offers-header', [OffersHeaderController::class, 'index'])->name('offers_header');
    Route::get('/new-offers-header', [OffersHeaderController::class, 'create'])->name('new_offers_header');
    Route::post('/store_offers_header', [OffersHeaderController::class, 'store'])->name('store_offers_header');
    Route::get('/edit-offers_header/{id}', [OffersHeaderController::class, 'edit'])->name('edit_offers_header');
    Route::put('/update_offers_header/{id}', [OffersHeaderController::class, 'update'])->name('update_offers_header');
    Route::get('/delete_offers_header{id}', [OffersHeaderController::class, 'destroy'])->name('delete_offers_header');
    //manage-faqs
    Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
    Route::get('/new-faq', [FaqController::class, 'create'])->name('new_faq');
    Route::post('/store_faq', [FaqController::class, 'store'])->name('store_faq');
    Route::get('/edit-faq/{id}', [FaqController::class, 'edit'])->name('edit_faq');
    Route::put('/update_faq/{id}', [FaqController::class, 'update'])->name('update_faq');
    Route::get('/delete_faq/{id}', [FaqController::class, 'destroy'])->name('delete_faq');
    //manage-partners
    Route::get('/partners', [PartnerController::class, 'index'])->name('list_partners');
    Route::get('/new-partners', [PartnerController::class, 'create'])->name('new_partners');
    Route::post('/store_partners', [PartnerController::class, 'store'])->name('store_partners');
    Route::get('/edit-partners/{id}', [PartnerController::class, 'edit'])->name('edit_partners');
    Route::put('/update_partners/{id}', [PartnerController::class, 'update'])->name('update_partners');
    Route::get('/delete_partners/{id}', [PartnerController::class, 'destroy'])->name('delete_partners');
    //manage-client-testmonial
    Route::get('/client-testmonial', [ClientTestmonialController::class, 'index'])->name('list_client_testmonials');
    Route::get('/new-client-testmonial', [ClientTestmonialController::class, 'create'])->name('new_client_testmonial');
    Route::post('/store_client_testmonial', [ClientTestmonialController::class, 'store'])->name('store_client_testmonial');
    Route::get('/edit-client_testmonial/{id}', [ClientTestmonialController::class, 'edit'])->name('edit_client_testmonial');
    Route::put('/update_client_testmonial/{id}', [ClientTestmonialController::class, 'update'])->name('update_client_testmonial');
    Route::get('/delete_client_testmonial/{id}', [ClientTestmonialController::class, 'destroy'])->name('delete_client_testmonial');
    //manage-team-members
    Route::get('/team-members', [TeamMemberController::class, 'index'])->name('list_team_members');
    Route::get('/new-team-member', [TeamMemberController::class, 'create'])->name('new_team_member');
    Route::post('/store_team_member', [TeamMemberController::class, 'store'])->name('store_team_member');
    Route::get('/edit-team_member/{id}', [TeamMemberController::class, 'edit'])->name('edit_team_member');
    Route::put('/update_team_member/{id}', [TeamMemberController::class, 'update'])->name('update_team_member');
    Route::get('/delete_team_member/{id}', [TeamMemberController::class, 'destroy'])->name('delete_team_member');
    Route::get('/team_member_image/{image}', [TeamMemberController::class, 'image'])->name('team_member_image');
    //manage-affilate-fields
    Route::get('/affilate-fields', [AffilateFieldController::class, 'index'])->name('affilate_fields');
    Route::get('/new-affilate-field', [AffilateFieldController::class, 'create'])->name('new_affilate_field');
    Route::post('/store_affilate_field', [AffilateFieldController::class, 'store'])->name('store_affilate_field');
    Route::get('/edit-affilate_field/{id}', [AffilateFieldController::class, 'edit'])->name('edit_affilate_field');
    Route::put('/update_affilate_field/{id}', [AffilateFieldController::class, 'update'])->name('update_affilate_field');
    Route::get('/delete_affilate_field/{id}', [AffilateFieldController::class, 'destroy'])->name('delete_affilate_field');
    //manage-affilate
    Route::get('/affilates', [AffilateController::class, 'index'])->name('affilates');
    Route::get('/new-affilate', [AffilateController::class, 'create'])->name('new_affilate');
    Route::post('/store_affilate', [AffilateController::class, 'store'])->name('store_affilate');
    Route::get('/edit-affilate/{id}', [AffilateController::class, 'edit'])->name('edit_affilate');
    Route::put('/update_affilate/{id}', [AffilateController::class, 'update'])->name('update_affilate');
    Route::get('/delete_affilate/{id}', [AffilateController::class, 'destroy'])->name('delete_affilate');
    //manage-code
    Route::get('/code-list', [Coupons::class, 'index'])->name('code_list');
    Route::get('/new-code', [Coupons::class, 'create'])->name('new_code');
    Route::post('/store_code', [Coupons::class, 'store'])->name('store_code');
    Route::put('/update_code{id}', [Coupons::class, 'update'])->name('update_code');
    Route::get('/delete_code{id}', [Coupons::class, 'destroy'])->name('delete_code');
    //manage-plan
    Route::get('/plan-list', [plans::class, 'index'])->name('plans');
    Route::get('/new-plan', [plans::class, 'create'])->name('new_plan');
    Route::post('/store_plan', [plans::class, 'store'])->name('store_plan');
    Route::get('/edit-plan{id}', [plans::class, 'edit'])->name('edit_plan');
    Route::put('/update_plan{id}', [plans::class, 'update'])->name('update_plan');
    Route::get('/delete_plan{id}', [plans::class, 'destroy'])->name('delete_plan');
    //manage-domain
    Route::get('/domains-list', [DomainPlans::class, 'index'])->name('domains');
    Route::get('/new-domains', [DomainPlans::class, 'create'])->name('new_domain');
    Route::post('/store_domains', [DomainPlans::class, 'store'])->name('store_domain');
    Route::get('/edit-domains{id}', [DomainPlans::class, 'edit'])->name('edit_domain');
    Route::put('/update_domain{id}', [DomainPlans::class, 'update'])->name('update_domain');
    Route::get('/delete_domain{id}', [DomainPlans::class, 'destroy'])->name('delete_domain');
    //manage-vps
    Route::get('/vps-list', [VpsPlans::class, 'index'])->name('vps');
    Route::get('/new-vps', [VpsPlans::class, 'create'])->name('new_vps');
    Route::post('/store_vps', [VpsPlans::class, 'store'])->name('store_vps');
    Route::get('/edit-vps{id}', [VpsPlans::class, 'edit'])->name('edit_vps');
    Route::put('/update_vps{id}', [VpsPlans::class, 'update'])->name('update_vps');
    Route::get('/delete_vps{id}', [VpsPlans::class, 'destroy'])->name('delete_vps');
    //manage-order
    Route::get('/orders', [orders::class, 'index'])->name('orders');
    Route::get('/cancel-order{subs_id}{type}', [orders::class, 'cancel_order'])->name('cancel_order');
    Route::put('/update_order{subs_id}', [orders::class, 'active'])->name('active_order');
    Route::put('/update_dns{subs_id}', [orders::class, 'active_domain'])->name('active_domain_order');
    Route::put('/active_vps{subs_id}', [orders::class, 'active_vps'])->name('active_vps_order');
    Route::get('/order-list', [orders::class, 'list'])->name('order_list');
    Route::get('/customers', [Customers::class, 'index'])->name('customers');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [SessionsController::class, 'destroy'])->name('logout');
    Route::get('/profile\{token}', [Profile::class, 'index'])->name('profile');
    Route::get('/cart{plan_id}-{subs_id}', [Cart::class, 'index'])->name('cart');
    Route::post('/check-domain', [DomainController::class, 'checkDomain'])->name('check_domain');
    Route::get('/domain_cart{plan_id}{subs_id}-{dom}', [DomainController::class, 'index'])->name('domain_cart');
    Route::get('/cart_vps{plan_id}{subs_id}', [Cart::class, 'vps'])->name('cart_vps');
    Route::put('/customer-update_dns{subs_id}', [Profile::class, 'update_dns'])->name('update_dns');
});
Route::post('/session', [SessionsController::class, 'store'])->name('sign_in');
Route::post('/register', [RegisterController::class, 'store'])->name('sign_up');
Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/test-token', function (Request $request) {
    return response()->json(['token' => $request->bearerToken()]);
});

Route::get('/Error404', function () {
    return view('user.404');
})->name('Error404');
Route::get('/about', function () {
    $members = \App\Models\TeamMember::all();
    $testmonials = \App\Models\ClientTestmonial::all();
    return view('user.about',compact('members','testmonials'));
})->name('about');
Route::get('/affiliate', function () {
    $affilates = \App\Models\Affilate::all();
    $affilateFields = \App\Models\AffilateField::all();
    return view('user.affiliate',compact('affilates','affilateFields'));
})->name('affiliate');
Route::get('/black-friday', function () {
    return view('user.black-friday');
})->name('black_friday');
Route::controller(HostingPageController::class)->group(function () {
    Route::get('/cloud-hosting', 'cloud_hosting')->name('cloud_hosting');
    Route::get('/share-hosting', 'share_hosting')->name('share_hosting');
    Route::get('/reseller-hosting', 'reseller_hosting')->name('reseller_hosting');
    Route::get('/vps-hosting', 'vps_hosting')->name('vps_hosting');
    Route::get('/wordpress-hosting', 'wordpress_hosting')->name('wordpress_hosting');
    Route::get('/dedicated-hosting', 'dedicated_hosting')->name('dedicated_hosting');
    Route::get('/doming', 'doming')->name('doming');
    Route::get('/team', 'team')->name('team');
    Route::get('/support', 'support')->name('support');
});
Route::post('/store_contact', [ContactRequestController::class, 'store'])->name('store_contact');

Route::get('/data_center', function () {
    return view('user.data-center');
})->name('data-center');
Route::get('/faq', function () {
    $faqs = App\Models\Faq::all();
    return view('user.faq', compact('faqs'));
})->name('faq');
Route::get('/news', function () {
    return view('user.news');
})->name('news');
Route::get('/news-details', function () {
    return view('user.news-details');
})->name('news_details');
Route::get('/news-grid', function () {
    return view('user.news-grid');
})->name('news_grid');
Route::get('/pricing', function () {
    return view('user.pricing');
})->name('pricing');
Route::get('/pricing-2', function () {
    return view('user.pricing-2');
})->name('pricing_2');
Route::get('/service', function () {
    return view('user.service');
})->name('service');
Route::get('/team-details', function () {
    return view('user.team-details');
})->name('team_details');

Route::get('/set-language/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'ar'])) {
        session(['lang' => $lang]);
    }
    return redirect()->back();
})->name('set-language');
Route::get('/partner-image/{image}', function ($image) {
    return response()->file(storage_path('app/public/partners/' . $image));
})->name('partner_image');
Route::get('/client-testmonial-image/{image}', function ($image) {
    return response()->file(storage_path('app/public/client-testmonial/' . $image));
})->name('client_testmonial_image');
Route::get('coming-soon',function(){
    return view('user.soon');
})->name('coming_soon');
Route::get('/terms-of-use', function () {
    return view('user.terms-of-use');
})->name('terms');
Route::get('/privacy-policy', function () {
    return view('user.privacy-policy');
})->name('privacy');
