<?php

namespace App\Http\Controllers;

use App\Bahagian;
use Session;
use Sentinel\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\TempahanRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TempahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('sentry.auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $pengguna = User::findOrFail(Session::get('userId'));

        $bahagian = Bahagian::lists('nama', 'id');

        return view('tempahan.create', compact('pengguna', 'bahagian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(TempahanRequest $request)
    {
        $input = $request->all();
        dd($input);
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
