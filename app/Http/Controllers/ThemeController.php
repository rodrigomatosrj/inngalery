<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::where('active','=',true)->paginate();
        return view('adm.themes.index', ['themes' => $themes]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.themes.create');
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
        Theme::create($data);
        return redirect()->route('themes.index');
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
        if(!$theme = Theme::find($id)){
             return redirect()->back();
         }else{
             return view('adm.themes.edit', ['theme' => $theme]);
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
        if(!$theme = Theme::find($id)){
             return redirect()->back();
         }else{
            $data = $request->only('name');
            $theme->update($data);
            return redirect()->route('themes.index');
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
        if(!$theme = Theme::find($id)){
            return redirect()->back();
        }else{
           $data = ["active" => false];
           $theme->update($data);
           return redirect()->route('themes.index');
        }    
 
    }
}
