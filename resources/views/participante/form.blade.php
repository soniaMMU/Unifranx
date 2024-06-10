<div class="row padding-1 p-1" id="formpart">
    <div class="col-md-12" >
        
        <div class="form-group mb-2 mb20">
            <label for="roles_id" class="form-label">{{ __('Rol') }}</label>
            <select name="roles_id" class="form-control @error('roles_id') is-invalid @enderror" id="roles_id">
                @foreach($roles as $roleId => $roleName)
                    <option value="{{ $roleId }}" @if($participante->roles_id == $roleId) selected @endif>
                        {{ $roleName }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('roles_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nom_p" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nom_p" class="form-control @error('nom_p') is-invalid @enderror" value="{{ old('nom_p', $participante?->nom_p) }}" id="nom_p" placeholder="Nombre" type="text" required>
            {!! $errors->first('nom_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="app_p" class="form-label">{{ __('Apellido Paterno') }}</label>
            <input type="text" name="app_p" class="form-control @error('app_p') is-invalid @enderror" value="{{ old('app_p', $participante?->app_p) }}" id="app_p" placeholder="Apellido paterno" type="text" required>
            {!! $errors->first('app_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apm_p" class="form-label">{{ __('Apellido Materno') }}</label>
            <input type="text" name="apm_p" class="form-control @error('apm_p') is-invalid @enderror" value="{{ old('apm_p', $participante?->apm_p) }}" id="apm_p" placeholder="Apellido materno" type="text" required>
            {!! $errors->first('apm_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ci_p" class="form-label">{{ __('Cédula de identidad') }}</label>
            <input type="text" name="ci_p" class="form-control @error('ci_p') is-invalid @enderror" value="{{ old('ci_p', $participante?->ci_p) }}" id="ci_p" placeholder="Ci" type="number" required>
            {!! $errors->first('ci_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="c1_p" class="form-label">{{ __('Contacto de referencia 1') }}</label>
            <input type="text" name="c1_p" class="form-control @error('c1_p') is-invalid @enderror" value="{{ old('c1_p', $participante?->c1_p) }}" id="c1_p" placeholder="Contacto de referencia" type="text" required>
            {!! $errors->first('c1_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="c2_p" class="form-label">{{ __('Contacto de referencia 2') }}</label>
            <input type="text" name="c2_p" class="form-control @error('c2_p') is-invalid @enderror" value="{{ old('c2_p', $participante?->c2_p) }}" id="c2_p" placeholder="Contacto de referencia" type="text" required>
            {!! $errors->first('c2_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="corr_p" class="form-label">{{ __('Correo') }}</label>
            <input type="text" name="corr_p" class="form-control @error('corr_p') is-invalid @enderror" value="{{ old('corr_p', $participante?->corr_p) }}" id="corr_p" placeholder="Correo" type="email" required>
            {!! $errors->first('corr_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="carr_p" class="form-label">{{ __('Carrera') }}</label>
            <select name="carr_p" id="carr_p" class="form-select @error('carr_p') is-invalid @enderror">
                <option value="">Selecciona una opción</option>
                <option value="NINGUNO" {{ old('carr_p', $participante?->carr_p) == 'NINGUNO' ? 'selected' : '' }}>NINGUNO</option>
                <option value="ADMINISTRACIÓN DE EMPRESAS" {{ old('carr_p', $participante?->carr_p) == 'ADMINISTRACIÓN DE EMPRESAS' ? 'selected' : '' }}>ADMINISTRACIÓN DE EMPRESAS</option>
                <option value="INGENIERIA DE SISTEMAS" {{ old('carr_p', $participante?->carr_p) == 'INGENIERIA DE SISTEMAS' ? 'selected' : '' }}>INGENIERIA DE SISTEMAS</option>
                <option value="INGENIERIA COMERCIAL" {{ old('carr_p', $participante?->carr_p) == 'INGENIERIA COMERCIAL' ? 'selected' : '' }}>INGENIERIA COMERCIAL</option>
                <option value="INGENIERIA FINANCIERA" {{ old('carr_p', $participante?->carr_p) == 'INGENIERIA FINANCIERA' ? 'selected' : '' }}>INGENIERIA FINANCIERA</option>
                <option value="INGENIERIA CIVIL" {{ old('carr_p', $participante?->carr_p) == 'INGENIERIA CIVIL' ? 'selected' : '' }}>INGENIERIA CIVIL</option>
                <option value="DISEÑO GRAFICO" {{ old('carr_p', $participante?->carr_p) == 'DISEÑO GRAFICO' ? 'selected' : '' }}>DISEÑO GRAFICO</option>
                <option value="DERECHO" {{ old('carr_p', $participante?->carr_p) == 'DERECHO' ? 'selected' : '' }}>DERECHO</option>
                <option value="GASTRONOMIA" {{ old('carr_p', $participante?->carr_p) == 'GASTRONOMIA' ? 'selected' : '' }}>GASTRONOMIA</option>
                <option value="BIOQUIMICA Y FARMACIA" {{ old('carr_p', $participante?->carr_p) == 'BIOQUIMICA Y FARMACIA' ? 'selected' : '' }}>BIOQUIMICA Y FARMACIA</option>
                <option value="MEDICINA" {{ old('carr_p', $participante?->carr_p) == 'MEDICINA' ? 'selected' : '' }}>MEDICINA</option>
                <option value="ODONTOLOGIA" {{ old('carr_p', $participante?->carr_p) == 'ODONTOLOGIA' ? 'selected' : '' }}>ODONTOLOGIA</option>
                <option value="HOTELERIA Y TURISMO" {{ old('carr_p', $participante?->carr_p) == 'HOTELERIA Y TURISMO' ? 'selected' : '' }}>HOTELERIA Y TURISMO</option>
                <option value="ADMINISTRACION DE EMPRESAS" {{ old('carr_p', $participante?->carr_p) == 'ADMINISTRACION DE EMPRESAS' ? 'selected' : '' }}>ADMINISTRACION DE EMPRESAS</option>
            </select>
            {!! $errors->first('carr_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="org_p" class="form-label">{{ __('Organizacion') }}</label>
            <input type="text" name="org_p" class="form-control @error('org_p') is-invalid @enderror" value="{{ old('org_p', $participante?->org_p) }}" id="org_p" placeholder="Organizaicon" type="text" required>
            {!! $errors->first('org_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="est_p" class="form-label">{{ __('Estado') }}</label>
            <select name="est_p" id="est_p" class="form-select @error('est_p') is-invalid @enderror">
                <option value="ACTIVO" {{ old('est_p', $participante?->est_p) == 'ACTIVO' ? 'selected' : '' }}>ACTIVO</option>
                <option value="INACTIVO" {{ old('est_p', $participante?->est_p) == 'INACTIVO' ? 'selected' : '' }}>INACTIVO</option>
            </select>
            {!! $errors->first('est_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

    </div>
    <div class="col-md-12 mt20 mt-2" align="center">
        <button type="submit" class="btn btn-primary">{{ __('REGISTRAR') }}</button>
    </div>
</div>