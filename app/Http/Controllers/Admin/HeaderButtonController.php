<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreHeaderButtonRequest;
use App\Http\Requests\Admin\UpdateHeaderButtonRequest;
use App\Models\Admin\HeaderButton;
use Illuminate\View\View;

class HeaderButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $headerButtons = HeaderButton::paginate(10, ['*'], 'header_buttons');

        return view('admin.header-button.index', compact('headerButtons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.header-button.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeaderButtonRequest $request)
    {
        $data = $request->all();

        isset($data['status']) ? $data['status'] = 1 : $data['status'] = 0;

        $headerButtons = HeaderButton::create($data);

        return redirect()->route('admin.header-button.index')->withSuccess($headerButtons['name'] . ' - header button has successfully stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(HeaderButton $headerButton): View
    {
        return view('admin.header-button.show', compact('headerButton'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeaderButton $headerButton): View
    {
        return view('admin.header-button.edit', compact('headerButton'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeaderButtonRequest $request, HeaderButton $headerButton)
    {
        $data = $request->all();

        isset($data['status']) ? $data['status'] = 1 : $data['status'] = 0;

        $headerButton->update($data);

        return redirect()->route('admin.header-button.index')->withSuccess($headerButton['name'] . ' - header button has successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeaderButton $headerButton)
    {
        $headerButton->delete();
        return redirect()->route('admin.header-button.index')->withSuccess($headerButton['name'] . ' - header button has successfully deleted!');
    }
}
