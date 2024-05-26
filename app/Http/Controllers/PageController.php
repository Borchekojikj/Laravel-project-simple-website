<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bannerTitle = "Home test";
        $bannerMessage = "Message for the banner section in the Home page";
        $img = asset('images/home-bg.jpg');
        return view('/index', ['img' => $img, 'bannerTitle' => $bannerTitle, 'bannerMessage' =>  $bannerMessage]);
    }

    public function about()
    {
        $bannerTitle = "About Page test";
        $bannerMessage = "Message fot the about section in the About page";
        $img = asset('images/about-bg.jpg');
        return view('/about', ['img' => $img, 'bannerTitle' => $bannerTitle, 'bannerMessage' =>  $bannerMessage]);
    }

    public function sample()
    {
        $bannerTitle = "Sample Post test";
        $bannerMessage = "Message for the banner section in the Sample Post page";
        $img = asset('images/blog-image.jpg');
        return view('/sample', ['img' => $img, 'bannerTitle' => $bannerTitle, 'bannerMessage' =>  $bannerMessage]);
    }
    public function contact()
    {
        $bannerTitle = "Contact Post test";
        $bannerMessage = "Message for the banner section in the Contact  page";
        $img = asset('images/contact-bg.jpg');
        return view('/contact', ['img' => $img, 'bannerTitle' => $bannerTitle, 'bannerMessage' =>  $bannerMessage]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
