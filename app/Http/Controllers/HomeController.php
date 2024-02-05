<?php

namespace App\Http\Controllers;

use BinshopsBlog\Models\BinshopsPostTranslation;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = BinshopsPostTranslation::join('binshops_posts', 'binshops_post_translations.post_id', '=', 'binshops_posts.id')
            ->where("is_published", '=', true)
            ->where('posted_at', '<', Carbon::now()->format('Y-m-d H:i:s'))
            ->orderBy("posted_at", "desc")->limit(5)->get();

        return view('welcome', [
            'posts' => $posts
        ]);
    }
}
