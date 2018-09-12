<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $per_page = $request->has('per_page') ? $request->input('per_page') : 15;
        return Company::paginate($per_page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;
        $company->company_code = uniqid(mt_rand(10,100));
        $company->name = $request->name;
        $company->base_url = $request->base_url;
        $company->primary_email = $request->primary_email;
        $company->secondary_email = $request->secondary_email;
        $company->office_address = $request->office_address;
        $company->landmark = $request->landmark;
        $company->city = $request->city;
        $company->state = $request->state;
        $company->description = $request->description;
        $company->primary_contact_number = $request->primary_contact_number;
        $company->secondary_contact_number = $request->secondary_contact_number;

        if ($company->save()) {
            /*
            *  Company code generation -
            *  1. Generate unique number using uniqid().
            *  2. Remove LAST 'n' characters from unique number generated, where 'n' is no. of digits in row id ($company->id) + 1.
            *  3. Add the $company->id as sufix to string obtained in step 2.
            *  4. A 12 digit company code is generated.
            *  Note- 1 is add to no. of digits in row id because we want to generate 12 digit code and uniqid() generate 13 digit string.
            */
            $company_code = substr(uniqid(),0,((-1)*strlen((string)$company->id)-1)).(string)$company->id;
            $entered_company_row = Company::find($company->id);
            $entered_company_row->company_code = $company_code;
            if ($entered_company_row->save()) {
                return response()->json([
                    "success"=>true,
                    "data"=>[
                        "id"=>$company->id,
                        "company_code"=>$entered_company_row->company_code,
                        "name"=>$company->name,
                        "base_url"=>$company->base_url,
                        "primary_email"=>$company->primary_email,
                        "secondary_email"=>$company->secondary_email,
                        "office_address"=>$company->office_address,
                        "landmark"=>$company->landmark,
                        "city"=>$company->city,
                        "state"=>$company->state,
                        "description"=>$company->description,
                        "primary_contact_number"=>$company->primary_contact_number,
                        "secondary_contact_number"=>$company->secondary_contact_number
                    ]
                ]);
            } else {
                Company::destroy($company->id);
                return response()->json([
                    "success"=>false,
                    "error"=>"Problem generating company code."
                ]);
            }
        } else {
            return response()->json([
                "success"=>false,
                "error"=>"Something went wrong."
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Company::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $company = Company::find($request->input('id'));
        
        $company->name = $request->input('name');
        $company->base_url = $request->input('base_url');
        $company->primary_email = $request->input('primary_email');
        $company->secondary_email = $request->input('secondary_email');
        $company->office_address = $request->input('office_address');
        $company->landmark = $request->input('landmark');
        $company->city = $request->input('city');
        $company->state = $request->input('state');
        $company->description = $request->input('description');
        $company->primary_contact_number = $request->input('primary_contact_number');
        $company->secondary_contact_number = $request->input('secondary_contact_number');

        if ($company->save()) {
            return response()->json([
                "success"=>true,
                "data"=>[
                    "id"=>$company->id,
                    "company_code"=>$company->company_code,
                    "name"=>$company->name,
                    "base_url"=>$company->base_url,
                    "primary_email"=>$company->primary_email,
                    "secondary_email"=>$company->secondary_email,
                    "office_address"=>$company->office_address,
                    "landmark"=>$company->landmark,
                    "city"=>$company->city,
                    "state"=>$company->state,
                    "description"=>$company->description,
                    "primary_contact_number"=>$company->primary_contact_number,
                    "secondary_contact_number"=>$company->secondary_contact_number
                ]
            ]);
        } else {
            return response()->json([
                "success"=>false,
                "error"=>"Something went wrong."
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company, $id)
    {
        if ($company::destroy($id)) {
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
