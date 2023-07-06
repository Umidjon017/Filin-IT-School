<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBannerRequest;
use App\Http\Requests\Admin\UpdateBannerRequest;
use App\Models\Admin\Banner;
use Illuminate\View\View;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $banners = Banner::paginate(5);

        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $this->fileUpload($request->file('image'));
        }

        $banner = Banner::create($data);

        return redirect()->route('admin.banners.index')->withSuccess($banner['title'] . ' - banner has successfully stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner): View
    {
        return view('admin.banner.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner): View
    {
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $banner->deleteFile();
            $data['image'] = $this->fileUpload($request->file('image'));
        }

        $banner->update($data);

        return redirect()->route('admin.banners.index')->withSuccess($banner['title'] . ' - banner has successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banners.index')->withSuccess($banner['title'] . ' - banner has successfully deleted!');
    }

    public function fileUpload($file): string
    {
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path(Banner::FILE_PATH), $filename);
        return $filename;
    }
}
