<?php

namespace App\Http\Controllers\Backend;

use App\Models\Network;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class NetworkController extends Controller
{
    public function index() {
        $datas = Network::all();
        return view('backend.competition.list', ['datas' => $datas, 'type' => 3, 'typeText' => 'network']);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Network::find($id);
        return view('backend.competition.show', ['data' => $data, 'typeName' => 'network']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $network = Network::find($id);
        $network->prefix = array_column($network->member, 'prefix');
        $network->name = array_column($network->member, 'name');
        $network->surname = array_column($network->member, 'surname');
        $network->class = array_column($network->member, 'class');
        $network->email = array_column($network->member, 'email');
        $network->phone = array_column($network->member, 'phone');
        return view('backend.competition.network_edit', ['data' => $network]);
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
