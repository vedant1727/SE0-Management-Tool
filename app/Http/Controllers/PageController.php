<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $per_page = $request->has('per_page') ? $request->input('per_page') : 15;
        return Page::paginate($per_page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page;

        $page->page_url = $request->page_url;
        $page->page_name = $request->page_name;
        $page->companies_id = $request->companies_id;

        if ($page->save()) {
            return Response()->json([
                "success"=>true,
                "data"=>[
                    "id"=>$page->id,
                    "page_url"=>$page->page_url,
                    "page_name"=>$page->page_name,
                    "comapanies_id"=>$page->companies_id
                ]
            ]);
        } else {
            return Response()->json([
                "success"=>false,
                "error"=>"Something went wrong."
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Page::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $page = Page::find($request->input('id'));

        $page->page_url = $request->input('page_url');
        $page->page_name = $request->input('page_name');

        if ($page->save()) {
            return Response()->json([
                "success"=>true,
                "data"=>[
                    "id"=>$page->id,
                    "page_url"=>$page->page_url,
                    "page_name"=>$page->page_name,
                    "comapanies_id"=>$page->companies_id
                ]
            ]);
        } else {
            return Response()->json([
                "success"=>false,
                "error"=>"Something went wrong."
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page,$id)
    {
        if ($page::destroy($id)) {
            return response()->json([
                "success"=>true,
                "message"=>"Successfully deleted."
            ]);
        } else {
            return response()->json([
                "success"=>false,
                "error"=>"Something went wrong."
            ]);
        }
    }
}
