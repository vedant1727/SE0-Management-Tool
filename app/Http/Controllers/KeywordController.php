<?php

namespace App\Http\Controllers;

use App\Keyword;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $per_page = $request->has('per_page') ? $request->input('per_page') : 20;
        return Keyword::paginate($per_page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keyword = new Keyword;

        $keyword->keyword = $request->keyword;
        $keyword->pages_id = $request->pages_id;
        $keyword->companies_id = $request->companies_id;

        if ($keyword->save()) {
            return Response()->json([
                "success"=>true,
                "data"=>[
                    "id"=>$keyword->id,
                    "keyword"=>$keyword->keyword,
                    "pages_id"=>$keyword->pages_id,
                    "comapanies_id"=>$keyword->companies_id
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
     * @param  \App\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Keyword::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $keyword = Keyword::find($request->input('id'));

        $keyword->keyword = $request->input('keyword');

        if ($keyword->save()) {
            return Response()->json([
                "success"=>true,
                "data"=>[
                    "id"=>$keyword->id,
                    "keyword"=>$keyword->keyword,
                    "pages_id"=>$keyword->pages_id,
                    "comapanies_id"=>$keyword->companies_id
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
     * @param  \App\Keyword  $keyword
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keyword $keyword,$id)
    {
        if ($keyword::destroy($id)) {
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
