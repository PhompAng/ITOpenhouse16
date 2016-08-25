<?php

namespace App\Http\Controllers\Backend;

use App\Models\Form;
use Illuminate\Http\Request;
use Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Form::all();
        return view('backend.form', ["datas" => $datas]);
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
        $form = Form::find($id);
        return view('backend.form_show', ["data" => $form]);
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
        Form::find($id)->delete();
        return redirect('/backend/form');
    }

    public function gift(Request $request, $id) {
        $form = Form::find($id);
        if (isset($form)) {
            if ($form->gift == null) {
                $form->gift = Carbon\Carbon::now();
                $form->save();
            } else {
                $form->gift = null;
                $form->save();
            }
        }
        return redirect('/backend/form');
    }
}
