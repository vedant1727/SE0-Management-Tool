<?php

namespace App\Http\Controllers;

use App\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $per_page = $request->has('per_page') ? $request->input('per_page') : 20;
        return Description::paginate($per_page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $description = new Description;

        $description->description = $request->description;
        $description->pages_id = $request->pages_id;
        $description->companies_id = $request->companies_id;

        if ($description->save()) {
            return Response()->json([
                "success"=>true,
                "data"=>[
                    "id"=>$description->id,
                    "description"=>$description->description,
                    "pages_id"=>$description->pages_id,
                    "comapanies_id"=>$description->companies_id
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
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Description::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $description = Description::find($request->input('id'));

        $description->description = $request->input('description');

        if ($description->save()) {
            return Response()->json([
                "success"=>true,
                "data"=>[
                    "id"=>$description->id,
                    "description"=>$description->description,
                    "pages_id"=>$description->pages_id,
                    "comapanies_id"=>$description->companies_id
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
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function destroy(Description $description,$id)
    {
        if ($description::destroy($id)) {
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
