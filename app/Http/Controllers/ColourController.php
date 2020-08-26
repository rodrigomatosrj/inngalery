<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colour;

class ColourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colours = Colour::where('active','=',true)->paginate();
        return view('adm.colours.index', ['colours' => $colours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.colours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('name');
        $data['active'] = true;
        Colour::create($data);
        return redirect()->route('colours.index');
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
      if(!$colour = Colour::find($id)){
          return redirect().back();
      }else{
            return view('adm.colours.edit',['colour' => $colour]);
      }
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
            if(!$colour = Colour::find($id)){
                return redirect().back();
            }else{
                  $data = $request->only('name');
                  $colour->update($data);
                  return redirect()->route('colours.index');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if(!$colour = Colour::find($id)){
            return redirect().back();
        }else{
            $data = ['active' => false];
            $colour->update($data);
            return redirect()->route('colours.index');
        }
    }
}
