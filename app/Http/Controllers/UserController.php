<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = \App\Models\User::all();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        \App\Models\User::create($request->all());
        return $request->all();
    }


    public function update(Request $request, string $id){
        $data = \App\Models\User::find($id);
        $data->update($request->all());

        return 'update sukses';
    }

    public function delete(string $id){
        $data = \App\Models\User::find($id);
        $data->delete($data);
        
        return 'delete sukses';
    }
}
