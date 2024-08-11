<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseSiteController extends Controller
{
    protected $page_title;
    protected $base_view_path;

    protected $base_route_path;

    protected $title;
}
