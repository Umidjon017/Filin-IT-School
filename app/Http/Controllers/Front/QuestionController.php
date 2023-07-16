<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuestionRequest;
use App\Models\Admin\FooterButton;
use App\Models\Admin\HeaderButton;
use App\Models\Admin\Question;
use App\Models\Admin\TelephoneAddress;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class QuestionController extends Controller
{
    public function index(): View
    {
        $searchTerm = request()->input('search');
        $results = DB::table('questions')
                ->where('status',true)
                ->where('question', 'LIKE', "%$searchTerm%")
                ->get();

        $selectedOption = request()->input('filter');
        if ($selectedOption === 'latest') {
            $questions = Question::where('status', true)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $questions = Question::where('status', true)->orderBy('created_at', 'asc')->paginate(10);
        }

        $headerButtons = HeaderButton::active()->order()->get();
        $footerButtons = FooterButton::active()->order()->get();
        $telephoneAddress = TelephoneAddress::all();

        return view('front.questions', compact(
            'headerButtons', 'footerButtons', 'telephoneAddress', 'questions', 'results'
        ));
    }

    public function store(StoreQuestionRequest $request)
    {
        $data = $request->all();

        Question::create($data);

        return redirect()->back()->with('success', 'Запись добавлена');
    }
}
