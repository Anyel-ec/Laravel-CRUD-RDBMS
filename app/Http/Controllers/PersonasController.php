<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     * Mostrar la página de inicio
     */
    public function index()
    {
       // $nombre='Liseth Poma';
       $datos=Personas::all();
       return view('welcome', compact('datos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     * muestra un formulario para agregar un nuevo registro
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     * Guarda los datos a la bdd
     */
    public function store(Request $request)
    {
        /**
         * Create a new Personas instance and assign values from the request.
         */
        $personas = new Personas();
        $personas->nombre = $request->post('nombre');
        $personas->apellido = $request->post('apellido');
        $personas->telefono = $request->post('telefono');
        $personas->direccion = $request->post('direccion');
        $personas->fecha_nac = $request->post('fecha_nac');
        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('uploads', 'public');
            $personas->foto = $imagePath;
        }
        $personas-> save();

        return redirect()-> route("persona.index");
    }

    /**
     * Display the specified resource.
     * obtener un registro espeifico de la tabla
     */
    public function show(Personas $persona)
    {
    }

    /**
     * Show the form for editing the specified resource.
     * mostrar los datos que se van a editar en el formulario
     */
    public function edit($id)
    {
        $persona = Personas::find($id);
        return view('actualizar', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     * actualizar los datos en la base
     */
    public function update(Request $request, Personas $personas, $id)
    {
        //
        $persona = Personas::find($id);
        $personas->nombre = $request->post('nombre');
        $personas->apellido = $request->post('apellido');
        $personas->telefono = $request->post('telefono');
        $personas->direccion = $request->post('direccion');
        $personas->fecha_nac = $request->post('fecha_nac');
        $personas->foto = $request->post('foto');
        $personas ->save();
        return redirect()-> route("persona.index");
    }

    /**
     * Remove the specified resource from storage.
     * eliminar un registro de la base de datos
     */
    public function destroy(Personas $personas, $id)
    {
        
    /**
     * Delete a persona by ID.
     */
    $persona = Personas::find($id);

    if ($persona) {
        $persona->delete();
    }
    return redirect()->route('persona.index');
    }
    

}
