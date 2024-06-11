<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="eventos_id" class="form-label">{{ __('Evento') }}</label>
            <select name="eventos_id" class="form-control @error('eventos_id') is-invalid @enderror" id="eventos_id">
                @foreach($evento as $id => $nom_ev)
                    <option value="{{ $id }}" @if(old('evento_id', optional($lugare)->eventos_id) == $id) selected @endif>{{ $nom_ev }}</option>
                @endforeach
            </select>
            {!! $errors->first('eventos_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
       
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nom_lu" class="form-label">{{ __('Nombre del lugar') }}</label>
            <select name="nom_lu" class="form-select @error('nom_lu') is-invalid @enderror" id="nom_lu">
                <option value="" disabled selected>Selecciona un lugar</option>
                <option value="AUDITORIO" {{ old('nom_lu', $lugare?->nom_lu) === 'AUDITORIO' ? 'selected' : '' }}>AUDITORIO</option>
                <option value="LABORATORIO 1" {{ old('nom_lu', $lugare?->nom_lu) === 'LABORATORIO 1' ? 'selected' : '' }}>LABORATORIO 1</option>
                <option value="LABORATORIO 2" {{ old('nom_lu', $lugare?->nom_lu) === 'LABORATORIO 2' ? 'selected' : '' }}>LABORATORIO 2</option>
                <option value="LABORATORIO 3" {{ old('nom_lu', $lugare?->nom_lu) === 'LABORATORIO 3' ? 'selected' : '' }}>LABORATORIO 3</option>
                <option value="CENTRO DE DESARROLLO DE SOFTWARE" {{ old('nom_lu', $lugare?->nom_lu) === 'CENTRO DE DESARROLLO DE SOFTWARE' ? 'selected' : '' }}>CENTRO DE DESARROLLO DE SOFTWARE</option>
                <option value="LABORATORIO DE FOTOGRAFIA" {{ old('nom_lu', $lugare?->nom_lu) === 'LABORATORIO DE FOTOGRAFIA' ? 'selected' : '' }}>LABORATORIO DE FOTOGRAFIA</option>
                <option value="SALA DE SIMULACIONES" {{ old('nom_lu', $lugare?->nom_lu) === 'SALA DE SIMULACIONES' ? 'selected' : '' }}>SALA DE SIMULACIONES</option>
                <option value="CAMARA GESSEL" {{ old('nom_lu', $lugare?->nom_lu) === 'CAMARA GESSEL' ? 'selected' : '' }}>CAMARA GESSEL</option>
                <option value="CENTRO DE IMPLEMENTACION CON HARDWARE" {{ old('nom_lu', $lugare?->nom_lu) === 'CENTRO DE IMPLEMENTACION CON HARDWARE' ? 'selected' : '' }}>CENTRO DE IMPLEMENTACION CON HARDWARE</option>
                <option value="LABORATORIO ODONTOLOGÍA" {{ old('nom_lu', $lugare?->nom_lu) === 'LABORATORIO ODONTOLOGÍA' ? 'selected' : '' }}>LABORATORIO ODONTOLOGÍA</option>
                <option value="BIBLIOTECA" {{ old('nom_lu', $lugare?->nom_lu) === 'BIBLIOTECA' ? 'selected' : '' }}>BIBLIOTECA</option>
                <option value="TERRAZA" {{ old('nom_lu', $lugare?->nom_lu) === 'TERRAZA' ? 'selected' : '' }}>TERRAZA</option>
                <option value="GAME ROOM" {{ old('nom_lu', $lugare?->nom_lu) === 'GAME ROOM' ? 'selected' : '' }}>GAME ROOM</option>
                <option value="CAFETERIA" {{ old('nom_lu', $lugare?->nom_lu) === 'CAFETERIA' ? 'selected' : '' }}>CAFETERIA</option>
            </select>
            {!! $errors->first('nom_lu', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="bl_lu" class="form-label">{{ __('Bloque') }}</label>
            <select name="bl_lu" class="form-select @error('bl_lu') is-invalid @enderror" id="bl_lu">
                <option value="A" {{ old('bl_lu', $lugare?->bl_lu) === 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ old('bl_lu', $lugare?->bl_lu) === 'B' ? 'selected' : '' }}>B</option>
                <option value="TERRENO EXTERNO" {{ old('bl_lu', $lugare?->bl_lu) === 'TERRENO EXTERNO' ? 'selected' : '' }}>TERRENO EXTERNO</option>
            </select>
            {!! $errors->first('bl_lu', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="cap_lu" class="form-label">{{ __('Capacidad') }}</label>
            <select name="cap_lu" class="form-select @error('cap_lu') is-invalid @enderror" id="cap_lu">
                <option value="10" {{ old('cap_lu', $lugare?->cap_lu) === '10' ? 'selected' : '' }}>10</option>
                <option value="15" {{ old('cap_lu', $lugare?->cap_lu) === '15' ? 'selected' : '' }}>15</option>
                <option value="20" {{ old('cap_lu', $lugare?->cap_lu) === '20' ? 'selected' : '' }}>20</option>
                <option value="30" {{ old('cap_lu', $lugare?->cap_lu) === '30' ? 'selected' : '' }}>30</option>
                <option value="50" {{ old('cap_lu', $lugare?->cap_lu) === '50' ? 'selected' : '' }}>50</option>
                <option value="100" {{ old('cap_lu', $lugare?->cap_lu) === '100' ? 'selected' : '' }}>100</option>
            </select>
            {!! $errors->first('cap_lu', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="est_lu" class="form-label">{{ __('Estado') }}</label>
            <select name="est_lu" class="form-select @error('est_lu') is-invalid @enderror" id="est_lu">
                <option value="OCUPADO" {{ old('est_lu', $lugare?->est_lu) === 'OCUPADO' ? 'selected' : '' }}>OCUPADO</option>
                <option value="LIBRE" {{ old('est_lu', $lugare?->est_lu) === 'LIBRE' ? 'selected' : '' }}>LIBRE</option>
                <option value="RESERVADO" {{ old('est_lu', $lugare?->est_lu) === 'RESERVADO' ? 'selected' : '' }}>RESERVADO</option>
            </select>
            {!! $errors->first('est_lu', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>