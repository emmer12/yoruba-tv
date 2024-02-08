<?php

namespace App\Http\Controllers;

use BinshopsBlog\Models\BinshopsUploadedPhoto;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function mission()
    {
        return view('pages.mission');
    }

    public function donate()
    {
        return view('pages.donate');
    }

    public function forum()
    {
        return view('pages.forum');
    }

    public function gallery()
    {
        $images = BinshopsUploadedPhoto::where('source', 'ImageUpload')->orderBy('created_at', 'desc')->get();

        return view('pages.gallery', [
            'images' => $images
        ]);
    }
}
