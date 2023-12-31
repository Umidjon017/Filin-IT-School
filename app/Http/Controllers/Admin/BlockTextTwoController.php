<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlockTextTwoRequest;
use App\Http\Requests\Admin\UpdateBlockTextTwoRequest;
use App\Models\Admin\BlockTextTwo;
use Illuminate\View\View;

class BlockTextTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blockTextTwo = BlockTextTwo::paginate(10);

        return view('admin.block-text-two.index', compact('blockTextTwo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.block-text-two.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlockTextTwoRequest $request)
    {
        $data = $request->all();

        $blockTextTwo = BlockTextTwo::create($data);

        return redirect()->route('admin.block-text-two.index')->withSuccess('Успешно создано !');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlockTextTwo $blockTextTwo): View
    {
        return view('admin.block-text-two.show', compact('blockTextTwo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlockTextTwo $blockTextTwo): View
    {
        return view('admin.block-text-two.edit', compact('blockTextTwo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlockTextTwoRequest $request, BlockTextTwo $blockTextTwo)
    {
        $data = $request->all();

        $blockTextTwo->update($data);

        return redirect()->route('admin.block-text-two.index')->withSuccess('Успешно обновлено !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlockTextTwo $blockTextTwo)
    {
        $blockTextTwo->delete();

        return redirect()->route('admin.block-text-two.index')->withSuccess('Успешно удалено !');
    }
}
