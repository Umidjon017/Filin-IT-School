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
     * Remove the specified resource from storage.
     */
    public function destroy(Appeal $appeal)
    {
        $appeal->delete();
        return redirect()->route('admin.appeals.index')->withSuccess('Успешно удалено !');
    }
}
