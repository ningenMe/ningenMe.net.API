<?php

namespace App\Http\Controllers;

use App\Access;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

     /**
     * Display a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function increment(Request $request)
    {
        $name = $request->input('name');
        $access = \App\Access::where('name', $name)->where('date',date('Y-m-d'))->first();
        if(empty($access)){
            \App\Access::create([
                'name' => $name,
                'date' => date('Y-m-d'),
            ]);
        }
        else{
            $access->count += 1;
            $access->save();
        }
        return $access;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
