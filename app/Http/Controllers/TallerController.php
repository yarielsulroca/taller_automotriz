<?php

namespace App\Http\Controllers;

use App\Models\Taller;
use Illuminate\Http\Request;
use App\Models\AreasTaller;

class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talleres= Taller::all();

      return view('taller.index')->with('talleres',$talleres);
      //  return "Hola";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //icremento el id del taller
        $talleres= Taller::all();
        $taller_las= $talleres->last();
        $new_id= $taller_las->id +1;

        // Creando el nuevo Taller
        $taller= new Taller();
        $taller->id= $new_id;
        $taller->nombre= $request->get('nombre');
        $taller->descripcion= $request->get('descripcion');
        $taller->save();

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
      $taller= Taller::find($id);
      return view('taller.edit')->with('taller',$taller);
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
        $taller= Taller::find($id);
        $taller->id= $request->get('id');
        $taller->nombre= $request->get('nombre');
        $taller->descripcion= $request->get('descripcion');
        $taller->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taller= Taller::find($id);
        $taller->delete();
        return redirect('/talleres');
    }
}
