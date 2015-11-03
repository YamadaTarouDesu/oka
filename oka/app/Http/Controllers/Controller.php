<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ContentsCategoryRelationships;
use DB;
use View;

class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $category  = ContentsCategoryRelationships::select(DB::raw('count(contents_id) as count, category_id, category.name'))
                        ->leftJoin('category', 'category.id', '=', 'contents_category_relationships.category_id')
                        ->groupBy('category_id')
                        ->orderBy('count', 'desc')
                        ->take(10)
                        ->get()
                        ->toArray();
        View::share("category", $category);
    }
}
