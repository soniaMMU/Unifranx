<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="eventos_id" class="form-label">{{ __('Evento') }}</label>
            <select name="eventos_id" class="form-control @error('eventos_id') is-invalid @enderror" id="eventos_id">
                @foreach($eventos as $id => $nombre)
                    <option value="{{ $id }}" @if(old('eventos_id', optional($sesione)->eventos_id) == $id) selected @endif>{{ $nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('eventos_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="t_s" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="t_s" class="form-control @error('t_s') is-invalid @enderror" value="{{ old('t_s', $sesione?->t_s) }}" id="t_s" placeholder="Tema de la sesion">
            {!! $errors->first('t_s', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cant_s" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="cant_s" class="form-control @error('cant_s') is-invalid @enderror" value="{{ old('cant_s', $sesione?->cant_s) }}" id="cant_s" placeholder="Cantidad">
            {!! $errors->first('cant_s', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="st_s" class="form-label">{{ __('Estado de la Sesion') }}</label>
            <select name="st_s" class="form-control @error('st_s') is-invalid @enderror" id="st_s">
                <option value="SUSPENDIDA" {{ old('st_s', $sesione?->st_s) === 'SUSPENDIDA' ? 'selected' : '' }}>SUSPENDIDA</option>
                <option value="ACTIVA" {{ old('st_s', $sesione?->st_s) === 'ACTIVA' ? 'selected' : '' }}>ACTIVA</option>
                <option value="FINALIZADA" {{ old('st_s', $sesione?->st_s) === 'FINALIZADA' ? 'selected' : '' }}>FINALIZADA</option>
                <option value="RETRASADA" {{ old('st_s', $sesione?->st_s) === 'RETRASADA' ? 'selected' : '' }}>RETRASADA</option>
            </select>
            {!! $errors->first('st_s', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>