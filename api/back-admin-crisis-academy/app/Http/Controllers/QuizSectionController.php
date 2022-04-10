<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizSection;
use App\Http\Resources\QuizSectionResource;


class QuizSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $QuizSection = QuizSection::all();
        return QuizSectionResource::collection($QuizSection);
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
        // use /validate method provided by Illuminate\Http\Request object to validate post data
        // if validation fails JSON response will be sent for AJAX requests
        $this->validate($request, [
                'cahpter_id' => 'exists:cahpters,id',
                'section_id' => 'exists:sections,id',

            ]
        );

        return QuizSection::create([
                'cahpter_id' => $request['cahpter_id'],
                'section_id' => $request['section_id'],
        ]);
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
        $QuizSection = QuizSection::findOrFail($id);




        $QuizSection->update($request->all());

        return $QuizSection;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $QuizSection = QuizSection::findOrFail($id);

        $QuizSection->delete();

        return $QuizSection;
    }
}
