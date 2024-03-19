<?php

namespace App\Http\Controllers;

use App\Models\Actividade;
use App\Http\Requests\ActividadeRequest;

/**
 * Class ActividadeController
 * @package App\Http\Controllers
 */
class ActividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actividades = Actividade::paginate();

        return view('actividade.index', compact('actividades'))
            ->with('i', (request()->input('page', 1) - 1) * $actividades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actividade = new Actividade();
        return view('actividade.create', compact('actividade'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActividadeRequest $request)
    {
        Actividade::create($request->validated());

        return redirect()->route('actividades.index')
            ->with('success', 'Actividade created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $actividade = Actividade::find($id);

        return view('actividade.show', compact('actividade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $actividade = Actividade::find($id);

        return view('actividade.edit', compact('actividade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActividadeRequest $request, Actividade $actividade)
    {
        $actividade->update($request->validated());

        return redirect()->route('actividades.index')
            ->with('success', 'Actividade updated successfully');
    }

    public function destroy($id)
    {
        Actividade::find($id)->delete();

        return redirect()->route('actividades.index')
            ->with('success', 'Actividade deleted successfully');
    }
}
