<?php

namespace App\Http\Controllers;

use App\Models\Admin\BlockTextOne;
use App\Models\Admin\BlockTextTwo;
use App\Models\Admin\FooterButton;
use App\Models\Admin\HeaderButton;
use App\Models\Admin\SchoolResult;
use App\Models\Admin\TelephoneAddress;
use App\Models\Admin\TrainingProgram;
use App\Models\Admin\Banner;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $headerButtons = HeaderButton::all();
        $footerButtons = FooterButton::all();
        $trainingPrograms = TrainingProgram::all();
        $telephoneAddress = TelephoneAddress::all();
        $blockTextOne = BlockTextOne::all();
        $blockTextTwo = BlockTextTwo::all();
        $schoolResults = SchoolResult::all();
        $banner=Banner::latest()->first();

        return view('layouts.front', compact(
            'headerButtons', 'footerButtons', 'trainingPrograms', 'telephoneAddress',
            'blockTextOne', 'blockTextTwo', 'schoolResults','banner'
        ));
    }
}
