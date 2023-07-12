<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePageRequest;
use App\Http\Requests\Admin\UpdatePageRequest;
use App\Models\Admin\Page;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pages = Page::paginate(10);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $data = $request->all();
        isset($data['status']) ? $data['status'] = true : $data['status'] = false;

        $page = Page::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $pageImages = $this->fileUpload($image);
                $page->images()->create([
                    'image' => $pageImages
                ]);
            }
        }

        return redirect()->route('admin.pages.index')->withSuccess('Успешно создано !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page): View
    {
        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page): View
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->all();
        isset($data['status']) ? $data['status'] = true : $data['status'] = false;

        $page->update($data);

        if ($request->hasFile('images')) {
            $page->deleteImages();
            foreach ($request->file('images') as $image) {
                $pageImage = $this->fileUpload($image);
                $page->images()->updateOrCreate([
                    'page_id' => $page->id,
                    'image' => $pageImage
                ]);
            }
        }

        return redirect()->route('admin.pages.index')->withSuccess('Успешно обновлено !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->withSuccess('Успешно удалено!');
    }

    public function fileUpload($file): string
    {
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path(Page::FILE_PATH), $filename);
        return $filename;
    }
}
