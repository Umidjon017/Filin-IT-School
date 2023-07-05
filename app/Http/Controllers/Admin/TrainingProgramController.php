<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTrainingProgramRequest;
use App\Http\Requests\Admin\UpdateTrainingProgramRequest;
use App\Models\Admin\TrainingProgram;
use Illuminate\View\View;

class TrainingProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $trainingPrograms = TrainingProgram::paginate(10, ['*'], 'training_programs');

        return view('admin.training-program.index', compact('trainingPrograms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.training-program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrainingProgramRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('icon')) {
            $data['icon'] = $this->fileUpload($request->file('icon'));
        }
        isset($data['status']) ? $data['status'] = 1 : $data['status'] = 0;

        $trainingProgram = TrainingProgram::create($data);

        return redirect()->route('admin.training-program.index')->withSuccess($trainingProgram['name'] . ' - training program has successfully stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TrainingProgram $trainingProgram): View
    {
        return view('admin.training-program.show', compact('trainingProgram'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrainingProgram $trainingProgram): View
    {
        return view('admin.training-program.edit', compact('trainingProgram'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrainingProgramRequest $request, TrainingProgram $trainingProgram)
    {
        $data = $request->all();

        if ($request->hasFile('icon')) {
            $trainingProgram->deleteFile();
            $data['icon'] = $this->fileUpload($request->file('icon'));
        }
        isset($data['status']) ? $data['status'] = 1 : $data['status'] = 0;

        $trainingProgram->update($data);

        return redirect()->route('admin.training-program.index')->withSuccess($trainingProgram['name'] . ' - training program has successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrainingProgram $trainingProgram)
    {
        $trainingProgram->delete();
        return redirect()->route('admin.training-program.index')->withSuccess($trainingProgram['name'] . ' - training program has successfully deleted!');
    }

    public function fileUpload($file): string
    {
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path(TrainingProgram::FILE_PATH), $filename);
        return $filename;
    }
}
