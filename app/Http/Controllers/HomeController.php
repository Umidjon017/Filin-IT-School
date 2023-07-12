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
        $trainingPrograms = TrainingProgram::active()->order()->get();
        $telephoneAddress = TelephoneAddress::all();
        $blockTextOne = BlockTextOne::all();
        $blockTextTwo = BlockTextTwo::all();
        $schoolResults = SchoolResult::all();
        $banner = Banner::order()->latest()->first();

        return view('layouts.front', compact(
            'headerButtons', 'footerButtons', 'trainingPrograms', 'telephoneAddress',
            'blockTextOne', 'blockTextTwo', 'schoolResults','banner'
        ));
    }

    public function page(string $page): View
    {
        $route = Page::where('status', true)->where('url', $page)->first();
        if (! $route) {
            return view('test', compact('route'))->with('error', 'Item not found.');
//            abort(404);
        }

        return view('test', compact('route'));
    }
}
