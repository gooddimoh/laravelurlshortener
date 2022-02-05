<?php

namespace App\Http\Controllers;

use App\Models\Urlshorten;
use Illuminate\Http\Request;

class LinksController extends Controller
{

    public function index()
    {
        $urlshorten = new urlshorten();

        return view('viewshorturl', compact($urlshorten));
    }

    public function urlshorten(Request $request)
    {

        $url = $request->post('url');
        $shorten = $request->post('shorten');

        $url = $request->post('url');

        return $url;

    }

    public function result()
    {
        $urlshorten = new urlshorten();

        return view('viewshorturl', compact($urlshorten));
    }
}
