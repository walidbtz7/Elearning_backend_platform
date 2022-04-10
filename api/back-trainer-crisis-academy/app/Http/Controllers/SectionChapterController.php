<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\SectionChapterResource;
use App\Models\SectionChapter;

class SectionChapterController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SectionChapter = SectionChapter::all();
        return SectionChapterResource::collection($SectionChapter);
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
                'numero' => 'required|intger',

            ]
        );

        return SectionChapter::create([
                'cahpter_id' => $request['cahpter_id'],
                'section_id' => $request['section_id'],
                'numero'=> $request['numero'],

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
        $SectionChapter = SectionChapter::findOrFail($id);




        $SectionChapter->update($request->all());

        return $SectionChapter;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SectionChapter = SectionChapter::findOrFail($id);

        $SectionChapter->delete();

        return $SectionChapter;
    }
}
