<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\TeamMember;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public $about_page , $team;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected SettingService $setting_service)
    {
        $this->about_page = Page::query()->whereSlug('about')->first();
        $this->team =  TeamMember::query()->status(1)->get();
        $settings  = $this->setting_service->get(params:['key' , 'value'] , paginate:0)->pluck('value'  , 'key')->toArray();

        view()->share([
            'settings' => cacheAndGet('settings' ,now()->addDay() ,$settings ),
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['about_page'] = $this->about_page;
        $data['team'] = $this->team;
        return view('home' , $data);
    }

    public function about() : View
    {
        $data['about_section'] = $this->about_page;
        $data['team'] = $this->team;
        return view('site.about' , $data);
    }

    public function services() : View
    {
        return view('site.services');
    }
    public function apply() : View
    {
        return view('site.apply');
    }
    public function contact() : View
    {
        return view('site.contact');
    }

    public function page(Request $request, $slug)
    {
        $data['page'] = Page::query()->whereSlug($slug)->first();
        return view('site.page' , $data);
    }

}
