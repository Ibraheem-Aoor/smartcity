<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Models\Contact;
use App\Models\Page;
use App\Services\TrainingProgramCategoryService;
use App\Services\TrainingProgramService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Throwable;

class SmartTrainingController extends Controller
{

    public function __construct(
        protected TrainingProgramService $training_program_service,
        protected TrainingProgramCategoryService $training_program_category_service
    ) {

    }
    public function index(Request $request, $theme): View
    {
        $data['programs_categories'] = $this->training_program_category_service->get(paginate:0 , relations:['programs']);
        $data['page'] = Page::query()->select(['intro_image' , 'title' , 'theme'])->whereSlug($theme)->first();
        return view('site.smart_training.index' , $data);
    }
}
