<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $actividade?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_actividad" class="form-label">{{ __('Tipo Actividad') }}</label>
            <input type="text" name="tipo_actividad" class="form-control @error('tipo_actividad') is-invalid @enderror" value="{{ old('tipo_actividad', $actividade?->tipo_actividad) }}" id="tipo_actividad" placeholder="Tipo Actividad">
            {!! $errors->first('tipo_actividad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="calificacion" class="form-label">{{ __('Calificacion') }}</label>
            <input type="text" name="calificacion" class="form-control @error('calificacion') is-invalid @enderror" value="{{ old('calificacion', $actividade?->calificacion) }}" id="calificacion" placeholder="Calificacion">
            {!! $errors->first('calificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="materia_id" class="form-label">{{ __('Materia Id') }}</label>
            <input type="text" name="materia_id" class="form-control @error('materia_id') is-invalid @enderror" value="{{ old('materia_id', $actividade?->materia_id) }}" id="materia_id" placeholder="Materia Id">
            {!! $errors->first('materia_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>