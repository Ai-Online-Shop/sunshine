<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FragenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('Unser FAQ!');
        $user = Auth::user();


        return view('home.faq', compact('title', 'user'));    }

        /* Geupdated und sollte funktionieren*/
    public function store(Request $request)
    {
        $rules = [
            'frage_headline'                => 'required',
            'description'              => 'required',
        ];
        $this->validate($request, $rules);

        $slug = str_slug($request->frage_headline);
        $duplicate = Frage::where('frage_headline_slug', $slug)->count();
        if ($duplicate > 0){
            return back()->with('error', trans('app.category_exists_in_db'));
        }

        $data = [
            'frage_headline' => $request->frage_headline,
            'title_slug' => $slug,
        ];

        Category::create($data);
        return back()->with('success', trans('app.category_created'));
    }
    /* Geupdated und sollte funktionieren*/
    public function edit($id){
        $frage = Frage::find($id);
        if (! $frage){
            return trans('app.invalid_request');
        }
        $title = trans('app.edit_category');

        return view('admin.categories_edit', compact('title', 'frage'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return string
     */
    /* Geupdated und sollte funktionieren*/
    public function update(Request $request, $id){
        $frage = Frage::find($id);
        if (! $frage){
            return trans('app.invalid_request');
        }

        $rules = [
            'frage_headline'                => 'required',
            'description'              => 'required',
        ];
        $this->validate($request, $rules);

        $data = [
            'frage_headline' => $request->frage_headline,
            'description' => $request->description,
        ];

        $frage->update($data);
        return back()->with('success', trans('app.category_created'));
    }
    /* Geupdated und sollte funktionieren*/
    public function destroy(Request $request){
        $frage_id = $request->data_id;
        Frage::find($frage_id)->delete();
        return ['success' => 1];
    }
    /* Geupdated und sollte funktionieren*/
    public function browseFAQ(){
        $title = trans('app.crowdfunding_categories');
        $frage = Frage::orderBy('frage_headline', 'asc')->get();
        return view('categories', compact('title', 'frage'));
    }
    /* Geupdated und sollte funktionieren*/
    public function singleFAQ($id, $slug = null){
        $title = trans('app.crowdfunding_categories');
        $frage = Frage::find($id);
        return view('campaigns_by_category', compact('title', 'frage'));
    }

    public function search(Request $request){
        if ($request->q){
            $q = $request->q;
            $title = trans('app.search_campaigns');
            $frage = Frage::active()->where('frage_headline', 'like', "%{$q}%")->orWhere('short_description', 'like', "%{$request->q}%")->orWhere('description', 'like', "%{$q}%")->paginate(20);
            return view('search', compact('title', 'frage', 'q'));
        }else{
            return $this->browseFAQ();
        }}

}
