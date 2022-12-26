<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Services\Pagination\Pagination;

use App\Models\Listing;

class ListingsController extends Controller
{

    public function code(Request $request, $code)
    {
        $listing = Listing::byCode($code);
        dd($listing);
        return $this->show($listing)
                ->with('title', $listing->title);
    }

    public function show(Listing $listing)
    {
        dd($listing);
       return view('models/listings/show', compact('listing'))
                ->with('title', $listing->title);
    }

}
