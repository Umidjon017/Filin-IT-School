<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlockTextOneRequest;
use App\Http\Requests\Admin\UpdateBlockTextOneRequest;
use App\Models\Admin\BlockTextOne;
use Illuminate\View\View;

class BlockTextOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blockTextOne = BlockTextOne::paginate(10);

        return view('admin.block-text-one.index', compact('blockTextOne'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.block-text-one.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlockTextOneRequest $request)
    {
        $data = $request->all();

        $blockTextOne = BlockTextOne::create($data);

        return redirect()->route('admin.block-text-one.index')->withSuccess('Успешно создано !');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlockTextOne $blockTextOne): View
    {
        return view('admin.block-text-one.show', compact('blockTextOne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlockTextOne $blockTextOne): View
    {
        return view('admin.block-text-one.edit', compact('blockTextOne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlockTextOneRequest $request, BlockTextOne $blockTextOne)
    {
        $data = $request->all();

        $blockTextOne->update($data);

        return redirect()->route('admin.block-text-one.index')->withSuccess('Успешно обновлено !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlockTextOne $blockTextOne)
    {
        $blockTextOne->delete();
        return redirect()->route('admin.block-text-one.index')->withSuccess('Успешно удалено !');
    }
}
