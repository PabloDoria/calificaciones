<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Http\Requests\MateriaRequest;

/**
 * Class MateriaController
 * @package App\Http\Controllers
 */
class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materia::paginate();

        return view('materia.index', compact('materias'))
            ->with('i', (request()->input('page', 1) - 1) * $materias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materia = new Materia();
        return view('materia.create', compact('materia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MateriaRequest $request)
    {
        Materia::create($request->validated());

        return redirect()->route('materias.index')
            ->with('success', 'Materia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    /**
 * Display the specified resource.
 */
    public function show($id)
    {
        $materia = Materia::find($id);
        $actividades = $materia->actividades()->paginate();

        return view('materia.show', compact('materia', 'actividades'))
            ->with('i', (request()->input('page', 1) - 1) * $actividades->perPage());
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $materia = Materia::find($id);

        return view('materia.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MateriaRequest $request, Materia $materia)
    {
        $materia->update($request->validated());

        return redirect()->route('materias.index')
            ->with('success', 'Materia updated successfully');
    }

    public function destroy($id)
    {
        Materia::find($id)->delete();

        return redirect()->route('materias.index')
            ->with('success', 'Materia deleted successfully');
    }
}
