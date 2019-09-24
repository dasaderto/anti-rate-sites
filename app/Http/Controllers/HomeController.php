<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $top_bad_sites = Site::leftJoin('sites_comments','sites_comments.site_id','=','sites.id')
            ->orderBy('rate')
            ->select(DB::raw('COUNT(sites_comments.body) AS site_comment, sites.*'))
            ->limit(10)
            ->groupBy('sites.id')
            ->get();
        $top_bad_best = Site::leftJoin('sites_comments','sites_comments.site_id','=','sites.id')
            ->orderBy('rate','desc')
            ->select(DB::raw('COUNT(sites_comments.body) AS site_comment, sites.*'))
            ->limit(10)
            ->groupBy('sites.id')
            ->get();

        return view('index',[
            'topBadSites' => $top_bad_sites,
            'topBadBest' => $top_bad_best,
        ]);
    }
}
