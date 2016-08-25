<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

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
        return view('new.form', ["title" => "แบบสอบถาม | "]);
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
        $input = $request->all();

        $form = new Form();
        $form->fill($request->all());

        $reason = [];
        foreach ($input['reason'] as $i) {
            $reason[] = $i;
        }

        $know = [];
        foreach ($input['know'] as $i) {
            $know[] = $i;
        }

        $activity = [$input['a1'], $input['a2'], $input['a3']];

        $form->know = json_encode($know, JSON_UNESCAPED_UNICODE);
        $form->reason = json_encode($reason, JSON_UNESCAPED_UNICODE);
        $form->activity = json_encode($activity, JSON_UNESCAPED_UNICODE);

        $code = substr(sha1(time()), 0, 6);
        $form->code = $code;

        $form->save();

        return view('new.form_result', ["title" => "แบบสอบถาม | ", "code" => $code]);
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
