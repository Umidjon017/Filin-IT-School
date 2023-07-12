<?php

namespace App\Http\Controllers;

use App\Models\Admin\BlockTextOne;
use App\Models\Admin\BlockTextTwo;
use App\Models\Admin\FooterButton;
use App\Models\Admin\HeaderButton;
use App\Models\Admin\Page;
use App\Models\Admin\SchoolResult;
use App\Models\Admin\TelephoneAddress;
use App\Models\Admin\TrainingProgram;
use App\Models\Admin\Banner;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $headerButtons = HeaderButton::active()->order()->get();
        $footerButtons = FooterButton::active()->order()->get();
        $pages = Page::where('status', true)->get();
        $telephoneAddress = TelephoneAddress::all();
        $trainingPrograms = TrainingProgram::active()->order()->get();
        $blockTextOne = BlockTextOne::all();
        $blockTextTwo = BlockTextTwo::all();
        $schoolResults = SchoolResult::all();
        $banner = Banner::order()->latest()->first();

        return view('front.index', compact(
            'headerButtons', 'footerButtons', 'pages', 'trainingPrograms', 'telephoneAddress',
            'blockTextOne', 'blockTextTwo', 'schoolResults', 'banner'
        ));
    }

    public function page(string $page): View
    {
        $headerButtons = HeaderButton::active()->order()->get();
        $footerButtons = FooterButton::active()->order()->get();
        $pages = Page::where('status', true)->get();
        $telephoneAddress = TelephoneAddress::all();
        $route = Page::where('status', true)->where('url', $page)->with('images')->first();

        if (! $route) {
            abort(404);
        }

        return view('front.page', compact(
            'headerButtons', 'footerButtons', 'pages', 'telephoneAddress', 'route'
        ));
    }
}
