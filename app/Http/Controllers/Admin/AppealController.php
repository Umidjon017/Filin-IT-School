<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAppealRequest;
use App\Http\Requests\Admin\UpdateAppealRequest;
use App\Models\Admin\Appeal;
use Illuminate\View\View;

class AppealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $appeals = Appeal::paginate(10);

        return view('admin.appeals.index', compact('appeals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppealRequest $request)
    {
        $data = $request->all();

        $appeal = Appeal::create($data);

        return redirect()->back()->withSuccess('Успешно создано !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appeal $appeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appeal $appeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppealRequest $request, Appeal $appeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appeal $appeal)
    {
        $appeal->delete();
        return redirect()->route('admin.appeals.index')->withSuccess('Успешно удалено !');
    }
}
