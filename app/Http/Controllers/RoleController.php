<?php

namespace App\Http\Controllers;

use App\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role_info=Role::all();
        return response()->json($role_info,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'slug' => 'required|string',
        ]);
        if($validator->fails()){
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }
        try{
            $role = Role::create($request->all());
            return response()->json(['status','Role Created successfully'],200);
        }
        catch(Exception $e){
            return response()->json([
                "error" => "could_not_register",
                "message" => "Unable to register"
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role_info = Role::find($id);
        return response()->json($role_info,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role_info = Role::find($id);
        return response()->json($role_info,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator =  Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'slug' => 'required|string',
        ]);
        if($validator->fails()){
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }
        try{
            $role = Role::where('id', $id)->update($request->all());
            return response()->json(['status','Role Updated successfully'],200);
        }
        catch(Exception $e){
            return response()->json([
                "error" => "could_not_register",
                "message" => "Unable to register"
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role=Role::find($id)->delete();
        return response()->json(['status','Role Deleted successfully'],200);
    }
}
