<?php

namespace App\Http\Controllers;
use App\Models\Module;
use App\Http\Resources\ModuleResource;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Module = Module::all();
        return ModuleResource::collection($Module);
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
                'big_image' => 'image|nullable|max: 1999',
                'trainer_id' => 'exists:trainers,id',
                'new' => 'required|boolean',
                'scop' =>'required|boolean',
                'niveau' => 'required|string|between:2,100',
                "category" => 'required|string|between:2,100'


            ]
        );
        $Module = new Module();
        $Module->title = $request->title;
        $Module->trainer_id = $request->trainer_id;
        $Module->new = $request->new;
        $Module->niveau = $request->niveau;
        $Module->category = $request->category;
        $Module->scope = $request->scope;
        if ($request->hasFile('big_image')) {
            //Get Just Ext
            $extention = $request->file('big_image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload Image
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
            $Module->big_image = $fileNameToStore;
        }
        $Module->save();

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
        $Module = Module::findOrFail($id);


        $Module->update($request->all());

        return $Module;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Module = Module::findOrFail($id);

        $Module->delete();

        return $Module;
    }
}
