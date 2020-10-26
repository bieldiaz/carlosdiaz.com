<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeriafotos;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeriafotos = galeriafotos::all();
        return view('urban')->with('galeriafotos', $galeriafotos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('urban');   // devolvera el formulario de registro
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $galeriafotos = new galeriafotos();
        $galeriafotos->nom_foto = $request->input('nom_foto');
        $galeriafotos->descripcio = $request->input('descripcio');
        $galeriafotos->image = $request->input('image');

        $galeriafotos->save(); //realiza un insert sobre la tabla Product.

        return redirect('urban');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeriafotos = galeriafotos::find($id);
        return view('urban', array('galeriafotos' => $galeriafotos));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Category::find($id);

        return view('urban')->with(['image' => $image]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
