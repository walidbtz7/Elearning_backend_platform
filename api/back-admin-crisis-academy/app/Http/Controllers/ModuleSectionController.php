<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModuleSectionResource;
use Illuminate\Http\Request;
use App\Models\ModuleSection;

class ModuleSectionController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ModuleSection = ModuleSection::all();
        return ModuleSectionResource::collection($ModuleSection);
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
                'module_id' => 'exists:modules,id',
                'section_id' => 'exists:sections,id',
                'numero' => 'required|intger',
            ]
        );

        return ModuleSection::create([
                'module_id' => $request['module_id'],
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
        $ModuleSection = ModuleSection::findOrFail($id);




        $ModuleSection->update($request->all());

        return $ModuleSection;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ModuleSection = ModuleSection::findOrFail($id);

        $ModuleSection->delete();

        return $ModuleSection;
    }
}
