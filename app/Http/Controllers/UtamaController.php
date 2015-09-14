<?php

namespace App\Http\Controllers;

use Session;
use App\Tempahan;
use Flash;
use Illuminate\Http\Request;
use Sentry;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UtamaController extends Controller
{
    /**
     * Papar halaman utama..
     *
     * @return Response
     */
    public function index()
    {
        $tempahan = Tempahan::all();
        return view('halaman.utama', compact('tempahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function test()
    {
        // $user = Sentry::findUserById(Session::get('userId'));
        // dd($user);
        return view('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
