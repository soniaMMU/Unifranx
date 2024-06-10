<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="lugares_id" class="form-label">{{ __('Lugar') }}</label>
            <select name="lugares_id" class="form-control @error('lugares_id') is-invalid @enderror" id="lugares_id">
                @foreach($lugare as $id => $nom_lu)
                    <option value="{{ $id }}" @if(old('lugares_id', $horario?->lugares_id) == $id) selected @endif>{{ $nom_lu }}</option>
                @endforeach
            </select>
            {!! $errors->first('lugares_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="dia_ho" class="form-label">{{ __('Dia') }}</label>
            <select name="dia_ho" class="form-select @error('dia_ho') is-invalid @enderror" id="dia_ho">
                <option value="LUNES" {{ old('dia_ho', $horario?->dia_ho) === 'LUNES' ? 'selected' : '' }}>LUNES</option>
                <option value="MARTES" {{ old('dia_ho', $horario?->dia_ho) === 'MARTES' ? 'selected' : '' }}>MARTES</option>
                <option value="MIERCOLES" {{ old('dia_ho', $horario?->dia_ho) === 'MIERCOLES' ? 'selected' : '' }}>MIERCOLES</option>
                <option value="JUEVES" {{ old('dia_ho', $horario?->dia_ho) === 'JUEVES' ? 'selected' : '' }}>JUEVES</option>
                <option value="VIERNES" {{ old('dia_ho', $horario?->dia_ho) === 'VIERNES' ? 'selected' : '' }}>VIERNES</option>
                <option value="SABADO" {{ old('dia_ho', $horario?->dia_ho) === 'SABADO' ? 'selected' : '' }}>SABADO</option>
                <option value="DOMINGO" {{ old('dia_ho', $horario?->dia_ho) === 'DOMINGO' ? 'selected' : '' }}>DOMINGO</option>
            </select>
            {!! $errors->first('dia_ho', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="h_in" class="form-label">{{ __('Hora de inicio') }}</label>
            <select name="h_in" class="form-select @error('h_in') is-invalid @enderror" id="h_in">
                @for ($hour = 8; $hour <= 22; $hour++)
                    @for ($minute = 0; $minute < 60; $minute += 30)
                        @php
                            $time = sprintf('%02d:%02d', $hour, $minute);
                        @endphp
                        <option value="{{ $time }}" {{ old('h_in', optional($horario)->h_in) == $time ? 'selected' : '' }}>{{ $time }}</option>
                    @endfor
                @endfor
            </select>
            {!! $errors->first('h_in', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="h_fin" class="form-label">{{ __('Hora de finalizacion') }}</label>
            <select name="h_fin" class="form-select @error('h_fin') is-invalid @enderror" id="h_fin">
                @for ($hour = 8; $hour <= 22; $hour++)
                    @for ($minute = 0; $minute < 60; $minute += 30)
                        @php
                            $time = sprintf('%02d:%02d', $hour, $minute);
                        @endphp
                        <option value="{{ $time }}" {{ old('h_fin', optional($horario)->h_fin) == $time ? 'selected' : '' }}>{{ $time }}</option>
                    @endfor
                @endfor
            </select>
            {!! $errors->first('h_fin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>