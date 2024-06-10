<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="rol" class="form-label">{{ __('Rol') }}</label>
            <input type="text" name="rol" class="form-control @error('rol') is-invalid @enderror" value="{{ old('rol', $role?->rol) }}" id="rol" placeholder="Rol">
            {!! $errors->first('rol', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="desc" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" value="{{ old('desc', $role?->desc) }}" id="desc" placeholder="Descripcion">
            {!! $errors->first('desc', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2"  align="center">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>