<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use App\Models\PageData;
use App\Services\DataService;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PageController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $pages = Page::when($request->get('search'), function ($query) use($request){
            return $query->where(function ($q) use ($request){
                return $q->where('slug', 'LIKE', '%' . $request->get('search') . '%');
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.pages.index', compact('pages'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard.pages.create');
    }

    /**
     * @param PageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PageRequest $request)
    {
        $data = $request->all();
        $page = Page::create($data);
        DataService::saveData($data, $page, new PageData());
        flash()->success('Page Created');
        return redirect()->route('pages.index');
    }

    /**
     * @param Page $page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Page $page)
    {
        return view('dashboard.pages.show', compact('page'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Page $page)
    {
        $data = [];
        foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties){
            $data[$localeCode] = PageData::where('page_id', $page->id)->where('lang', $localeCode)->first();
        }
        return view('dashboard.pages.edit',  compact('page', 'data'));
    }

    /**
     * @param $page
     * @param PageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Page $page, PageRequest $request)
    {
        $data = $request->all();

        $page->update($data);
        DataService::saveData($data, $page, new PageData());
        flash()->success('Page Updated');
        return redirect()->route('pages.index');
    }

    /**
     * @param Page $page
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Page $page)
    {
        Page::destroy($page->id);
        flash()->success('Page Deleted');
        return redirect()->route('pages.index');
    }
}
