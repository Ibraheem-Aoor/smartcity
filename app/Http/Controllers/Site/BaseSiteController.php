<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class BaseSiteController extends Controller
{
    protected $page_title;
    protected $base_view_path;

    protected $base_route_path;

    protected $title;


    public function getPageModel($slug)
    {
        return Page::query()->select(['intro_image', 'title', 'theme' , 'parent_id' , 'content'])->whereSlug($slug)->firstOrFail();
    }
}
