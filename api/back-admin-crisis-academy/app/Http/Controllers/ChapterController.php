<?php

namespace App\Http\Controllers;
use App\Models\Chapter;
use App\Http\Resources\ChapterResource;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Chapter = Chapter::all();
        return ChapterResource::collection($Chapter);
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
                'title' => 'required|string|max:191',
                'duration' => 'required|time',
                'video_id' =>'required|Integer',
                'lab_id' =>'required|Integer',
                'is_aproved' =>'required|boolean',

            ]
        );

        return Chapter::create([
            'title' =>$request['title'],
            'duration' =>$request['duration'],
            'video_id' =>$request['video_id'],
            'module_id' =>$request['module_id'],
            'lab_id' =>$request['lab_id'],
            'is_aproved' =>$request['is_aproved'],


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
        $Chapter = Chapter::findOrFail($id);




        $Chapter->update($request->all());

        return $Chapter;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Chapter = Chapter::findOrFail($id);

        $Chapter->delete();

        return $Chapter;
    }
}
