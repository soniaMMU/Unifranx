<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="participantes_id" class="form-label">{{ __('Participante') }}</label>
            <select name="participantes_id" class="form-control @error('participantes_id') is-invalid @enderror" id="participantes_id">
                @foreach($participantes as $participanteItem)
                    <option value="{{ $participanteItem->id }}" @if($inscripcione->participantes_id == $participanteItem->id) selected @endif>
                        {{ $participanteItem->nom_p }} {{ $participanteItem->app_p }} {{ $participanteItem->apm_p }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('participantes_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

        <div class="form-group mb-2 mb20">
            <label for="eventos_id" class="form-label">{{ __('Eventos Id') }}</label>
            <select name="eventos_id" class="form-control @error('eventos_id') is-invalid @enderror" id="eventos_id">
                @foreach($evento as $id => $nom_ev)
                    <option value="{{ $id }}" @if(old('evento_id', optional($inscripcione)->eventos_id) == $id) selected @endif>{{ $nom_ev }}</option>
                @endforeach
            </select>
            {!! $errors->first('evento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="st_ev" class="form-label">{{ __('Estado') }}</label>
            <select name="st_ev" id="st_ev" class="form-select @error('st_ev') is-invalid @enderror">
                <option value="ACTIVO" {{ old('st_ev', $inscripcione?->st_ev) == 'ACTIVO' ? 'selected' : '' }}>ACTIVO</option>
                <option value="INACTIVO" {{ old('st_ev', $inscripcione?->st_ev) == 'INACTIVO' ? 'selected' : '' }}>INACTIVO</option>
                <option value="ABANDONO" {{ old('st_ev', $inscripcione?->st_ev) == 'ABANDONO' ? 'selected' : '' }}>ABANDONO</option>
            </select>
            {!! $errors->first('st_ev', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>