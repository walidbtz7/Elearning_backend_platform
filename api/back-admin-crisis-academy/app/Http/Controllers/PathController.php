<?php

namespace App\Http\Controllers;
use App\Models\LearningPath as Path;
use App\Http\Resources\PathResource;
use Illuminate\Http\Request;

class PathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Path = Path::all();
        return PathResource::collection($Path);
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

                'title' => 'required|string|between:2,100',
                'description' => 'required|string|between:2,100',
                'niveau' => 'required|string|between:2,100',
                'logo' => 'image|nullable|max:1999',
                'grained_points' => 'required|integer',
                'is_premium' => 'required|boolean',




            ]
        );

            $path = new Path;
            $path->title = $request->title;
            $path->description = $request->description;
            $path->niveau = $request->niveau;
            $path->grained_points = $request->grained_points;
            if ($request->hasFile('logo')) {
                //Get Just Ext
                $extention = $request->file('logo')->getClientOriginalExtension();
                //FileName To Store
                $fileNameToStore = "item_" . time() . '.' . $extention;
                //Upload Image
                $paths = $request->file('image')->storeAs('public/image', $fileNameToStore);
                $path->logo = $fileNameToStore;
            }
            $path->is_premium = $request->is_premium;
            $path->save();
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
        $Path = Path::findOrFail($id);




        $Path->update($request->all());

        return $Path;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Path = Path::findOrFail($id);

        $Path->delete();

        return $Path;
    }
}
