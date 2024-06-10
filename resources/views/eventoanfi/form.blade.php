<div class="row padding-1 p-1">
    <div class="col-md-12">
        

        
        <div class="form-group mb-2 mb20">
            <label for="tip_ev" class="form-label">{{ __('Tipo Evento') }}</label>
            <select name="tip_ev" class="form-control @error('tip_ev') is-invalid @enderror" id="tip_ev">
                <option value="SEMINARIO" @if(old('tip_ev', $evento?->tip_ev) == 'SEMINARIO') selected @endif>SEMINARIO</option>
                <option value="TALLER" @if(old('tip_ev', $evento?->tip_ev) == 'TALLER') selected @endif>TALLER</option>
                <option value="CAPACITACION" @if(old('tip_ev', $evento?->tip_ev) == 'CAPACITACION') selected @endif>CAPACITACION</option>
                <option value="FERIA" @if(old('tip_ev', $evento?->tip_ev) == 'FERIA') selected @endif>FERIA</option>
                <option value="EXPOSICION" @if(old('tip_ev', $evento?->tip_ev) == 'EXPOSICION') selected @endif>EXPOSICION</option>
            </select>
            {!! $errors->first('tip_ev', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="f_in_ev" class="form-label">{{ __('Inicio Evento') }}</label>
            @php
                $formatted_date = !empty($evento) ? \Carbon\Carbon::parse($evento->f_in_ev)->format('Y-m-d') : '';
            @endphp
            <input type="date" name="f_in_ev" class="form-control @error('f_in_ev') is-invalid @enderror" value="{{ old('f_in_ev', $formatted_date) }}" id="f_in_ev">
            @error('f_in_ev')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="nom_ev" class="form-label">{{ __('Nombre Evento') }}</label>
            <input type="text" name="nom_ev" class="form-control @error('nom_ev') is-invalid @enderror" value="{{ old('nom_ev', $evento?->nom_ev) }}" id="nom_ev" placeholder="Nom Ev">
            {!! $errors->first('nom_ev', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sed_ev" class="form-label">{{ __('Sede Evento') }}</label>
            <select name="sed_ev" class="form-control @error('sed_ev') is-invalid @enderror" id="sed_ev">
                <option value="La Paz" @if(old('sed_ev', $evento?->sed_ev) == 'La Paz') selected @endif>La Paz</option>
                <option value="Santa Cruz" @if(old('sed_ev', $evento?->sed_ev) == 'Santa Cruz') selected @endif>Santa Cruz</option>
                <option value="Cochabamba" @if(old('sed_ev', $evento?->sed_ev) == 'Cochabamba') selected @endif>Cochabamba</option>
                <option value="El Alto" @if(old('sed_ev', $evento?->sed_ev) == 'El Alto') selected @endif>El Alto</option>
            </select>
            {!! $errors->first('sed_ev', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="f_fi_ev" class="form-label">{{ __('Fin Evento') }}</label>
            @php
                $formatted_date = !empty($evento) ? \Carbon\Carbon::parse($evento->f_fi_ev)->format('Y-m-d') : '';
            @endphp
            <input type="date" name="f_fi_ev" class="form-control @error('f_fi_ev') is-invalid @enderror" value="{{ old('f_fi_ev', $formatted_date) }}" id="f_fi_ev">
            @error('f_fi_ev')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        
        
        <div class="form-group mb-2 mb20">
            <label for="st_ev" class="form-label">{{ __('ESTADO DEL EVENTO') }}</label>
            <select name="st_ev" class="form-control @error('st_ev') is-invalid @enderror" id="st_ev">
                <option value="ACTIVO" {{ old('st_ev', $evento?->st_ev ?? 'PENDIENTE') == 'ACTIVO' ? 'selected' : '' }}>ACTIVO</option>
                <option value="PENDIENTE" {{ old('st_ev', $evento?->st_ev ?? 'PENDIENTE') == 'PENDIENTE' ? 'selected' : '' }}>PENDIENTE</option>
                <option value="SUSPENDIDO" {{ old('st_ev', $evento?->st_ev) == 'SUSPENDIDO' ? 'selected' : '' }}>SUSPENDIDO</option>
                <option value="FINALIZADO" {{ old('st_ev', $evento?->st_ev) == 'FINALIZADO' ? 'selected' : '' }}>FINALIZADO</option>
            </select>
            {!! $errors->first('st_ev', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="image" class="form-label">{{ __('Imagen') }}</label>
            <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', $evento?->image) }}" id="image" placeholder="Image">
            {!! $errors->first('image', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>