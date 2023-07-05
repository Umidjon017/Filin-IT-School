<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFooterButtonRequest;
use App\Http\Requests\Admin\UpdateFooterButtonRequest;
use App\Models\Admin\FooterButton;
use Illuminate\View\View;

class FooterButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $footerButtons = FooterButton::paginate(10, ['*'], 'footer_buttons');

        return view('admin.footer-button.index', compact('footerButtons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.footer-button.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFooterButtonRequest $request)
    {
        $data = $request->all();

        isset($data['status']) ? $data['status'] = 1 : $data['status'] = 0;

        $footerButtons = FooterButton::create($data);

        return redirect()->route('admin.footer-button.index')->withSuccess($footerButtons['name'] . ' - footer button has successfully stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FooterButton $footerButton): View
    {
        return view('admin.footer-button.show', compact('footerButton'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FooterButton $footerButton): View
    {
        return view('admin.footer-button.edit', compact('footerButton'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFooterButtonRequest $request, FooterButton $footerButton)
    {
        $data = $request->all();

        isset($data['status']) ? $data['status'] = 1 : $data['status'] = 0;

        $footerButton->update($data);

        return redirect()->route('admin.footer-button.index')->withSuccess($footerButton['name'] . ' - footer button has successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FooterButton $footerButton)
    {
        $footerButton->delete();
        return redirect()->route('admin.footer-button.index')->withSuccess($footerButton['name'] . ' - footer button has successfully deleted!');
    }
}
