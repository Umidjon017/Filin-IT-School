<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSchoolResultRequest;
use App\Http\Requests\Admin\UpdateSchoolResultRequest;
use App\Models\Admin\SchoolResult;
use Illuminate\View\View;

class SchoolResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $schoolResults = SchoolResult::paginate(10);

        return view('admin.school-results.index', compact('schoolResults'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.school-results.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolResultRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('icon')) {
            $data['icon'] = $this->fileUpload($request->file('icon'));
        }

        $schoolResult = SchoolResult::create($data);

        return redirect()->route('admin.school-results.index')->withSuccess('Успешно создано !');
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolResult $schoolResult): View
    {
        return view('admin.school-results.show', compact('schoolResult'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolResult $schoolResult): View
    {
        return view('admin.school-results.edit', compact('schoolResult'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolResultRequest $request, SchoolResult $schoolResult)
    {
        $data = $request->all();

        if ($request->hasFile('icon')) {
            $schoolResult->deleteFile();
            $data['icon'] = $this->fileUpload($request->file('icon'));
        }

        $schoolResult->update($data);

        return redirect()->route('admin.school-results.index')->withSuccess('Успешно обновлено !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolResult $schoolResult)
    {
        $schoolResult->delete();

        return redirect()->route('admin.school-results.index')->withSuccess('Успешно удалено !');
    }

    public function fileUpload($file): string
    {
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path(SchoolResult::FILE_PATH), $filename);
        return $filename;
    }
}
