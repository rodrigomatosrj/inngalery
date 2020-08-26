<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;


class TypeController extends Controller
{
    public function index()
    {
        $types = Type::where('active','=',true)->paginate();
        return view('adm.types.index', ['types' => $types]);    
    }

    public function create()
    {
        return view('adm.types.create');
    }

    public function store(Request $request)
    {
        $data = $request->only('name');
        $data["active"] = true;
        Type::create($data);
        return redirect()->route('types.index');
    }

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
       if(!$type = Type::find($id)){
            return redirect()->back();
        }else{
            return view('adm.types.edit', ['type' => $type]);
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
        if(!$type = Type::find($id)){
            return redirect()->back();
        }else{
            $data = $request->only('name');
            $type->update($data);
            return redirect()->route('types.index');
        }        

    }

    public function destroy($id)
    {
        if(!$type = Type::find($id)){
            return redirect()->back();
        }else{
            $type = Type::find($id);
            $data = ["active" => false];
            $type->update($data);
            return redirect()->route('types.index');
        }        

    }
}
