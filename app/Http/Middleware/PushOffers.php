<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\OffersHeader;
class PushOffers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $offer = OffersHeader::where('status', true)->first();
        if ($offer) {
            $request->attributes->set('offers_header', $offer->offer_header);
        }
        return $next($request);
    }
}
