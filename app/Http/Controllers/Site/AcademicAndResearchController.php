<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Models\Contact;
use App\Models\Page;
use App\Services\Academic\BranchService;
use App\Services\TrainingProgramCategoryService;
use App\Services\TrainingProgramService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Throwable;

class AcademicAndResearchController extends BaseSiteController
{

    public function __construct(
        protected BranchService $branch_service,
    ) {
        $this->base_view_path = 'site.academic_and_research';
    }
    public function branch(Request $request, $theme): View
    {
        $data['branches'] = $this->branch_service->get(
            paginate: 0,
            conditions: [['status', '=', '1']],
            relations:['country'],
        );
        $data['page'] = Page::query()->select(['intro_image', 'title', 'theme'])->whereSlug($theme)->first();
        return view($this->base_view_path.'.branch.index', $data);
    }
}
