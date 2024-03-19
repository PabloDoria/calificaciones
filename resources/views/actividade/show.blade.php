@extends('layouts.app')

@section('template_title')
    {{ $actividade->name ?? __('Show') . " " . __('Actividade') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Actividade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('actividades.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $actividade->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo Actividad:</strong>
                            {{ $actividade->tipo_actividad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Calificacion:</strong>
                            {{ $actividade->calificacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Materia Id:</strong>
                            {{ $actividade->materia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
