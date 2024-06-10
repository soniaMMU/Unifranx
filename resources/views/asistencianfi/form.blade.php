<div class="row padding-1 p-1">
    <div class="col-md-12">
        
     
        <div class="form-group mb-2 mb20">
            <label for="sesiones_id" class="form-label">{{ __('Sesión') }}</label>
            <select name="sesiones_id" class="form-control @error('sesiones_id') is-invalid @enderror" id="sesiones_id">
                @foreach($sesiones as $id => $t_s)
                    <option value="{{ $id }}" @if(old('sesiones_id', optional($asistencia)->sesiones_id) == $id) selected @endif>{{ $t_s }}</option>
                @endforeach
            </select>
            {!! $errors->first('sesiones_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="participantes_id" class="form-label">{{ __('Participante') }}</label>
            <select name="participantes_id" class="form-control @error('participantes_id') is-invalid @enderror" id="participantes_id">
                @foreach($participantes as $participanteItem)
                    <option value="{{ $participanteItem->id }}" @if($asistencia->participantes_id == $participanteItem->id) selected @endif>
                        {{ $participanteItem->nom_p }} {{ $participanteItem->app_p }} {{ $participanteItem->apm_p }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('participantes_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="fh_asis" class="form-label">{{ __('Fecha y Hora de Asistencia') }}</label>
            <input type="datetime-local" name="fh_asis" class="form-control @error('fh_asis') is-invalid @enderror" value="{{ !empty($asistencia) ? \Carbon\Carbon::parse($asistencia->fh_asis)->format('Y-m-d\TH:i') : '' }}" id="fh_asis" placeholder="Fecha y Hora de Asistencia">
            {!! $errors->first('fh_asis', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        
        <div class="form-group mb-2 mb20">
            <label for="st_asis" class="form-label">{{ __('Estado de asistencia') }}</label>
            <select name="st_asis" class="form-control @error('st_asis') is-invalid @enderror" id="st_asis">
                <option value="PRESENTE" {{ old('st_asis', $asistencia?->st_asis) === 'PRESENTE' ? 'selected' : '' }}>PRESENTE</option>
                <option value="RETRASO" {{ old('st_asis', $asistencia?->st_asis) === 'RETRASO' ? 'selected' : '' }}>RETRASO</option>
                <option value="FALTA INJUSTIFICADA" {{ old('st_asis', $asistencia?->st_asis) === 'FALTA INJUSTIFICADA' ? 'selected' : '' }}>FALTA INJUSTIFICADA</option>
                <option value="FALTA JUSTIFICADA" {{ old('st_asis', $asistencia?->st_asis) === 'FALTA JUSTIFICADA' ? 'selected' : '' }}>FALTA JUSTIFICADA</option>
            </select>
            {!! $errors->first('st_asis', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="asistencia_confirmada" class="form-label">{{ __('Asistencia Confirmada') }}</label>
            <select name="asistencia_confirmada" class="form-control @error('asistencia_confirmada') is-invalid @enderror" id="asistencia_confirmada">
                <option value="1" {{ old('asistencia_confirmada', $asistencia?->asistencia_confirmada) == '1' ? 'selected' : '' }}>CONFIRMADO</option>
                <option value="0" {{ old('asistencia_confirmada', $asistencia?->asistencia_confirmada) == '0' ? 'selected' : '' }}>NO CONFIRMADO</option>
            </select>
            {!! $errors->first('asistencia_confirmada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>