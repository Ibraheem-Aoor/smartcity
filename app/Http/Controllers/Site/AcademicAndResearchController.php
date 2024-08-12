<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Models\Contact;
use App\Models\FamProject;
use App\Models\Page;
use App\Services\Academic\BranchService;
use App\Services\Academic\UniversityService;
use App\Services\FAM\FamProjectService;
use App\Services\TrainingProgramCategoryService;
use App\Services\TrainingProgramService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Throwable;

class AcademicAndResearchController extends BaseSiteController
{

    public function __construct(
        protected BranchService $branch_service,
        protected UniversityService $university_service,
        protected FamProjectService $fam_project_service,
        protected TrainingProgramCategoryService $program_category_service,

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
    public function univisities(Request $request, $theme): View
    {
        $data['universities'] = $this->university_service->get(
            paginate: 0,
            conditions: [['status', '=', '1'] , ['type' , '=', $theme]],
        );
        $data['page'] = Page::query()->select(['intro_image', 'title', 'theme'])->whereSlug($theme)->first();
        return view($this->base_view_path.'.university.index', $data);
    }
     /**
     * British Fam Center Exellence Center
     */
    public function exellenceCenter(Request $request, $slug = 'exellence-center')
    {
        $data['projects'] = $this->fam_project_service->get(
            paginate: 0,
            conditions: [['status', '=', '1']],
        );
        $data['page'] = $this->getPageModel($slug);
        return view($this->base_view_path . '.fam.exellence_center.index', $data);
    }
     /**
     * British Fam Center Academic Programs
     */
    public function academicPrograms(Request $request, $slug = 'academic-programs')
    {
        $data['programs_categories'] = $this->program_category_service->get(
            paginate: 0,
            conditions: [['status', '=', '1']],
        );
        $data['page'] = $this->getPageModel($slug);
        return view($this->base_view_path . '.fam.academic_programs.index', $data);
    }
}
