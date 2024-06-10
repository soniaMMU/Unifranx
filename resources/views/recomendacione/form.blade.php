<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="participantes_id" class="form-label">{{ __('Participante') }}</label>
            <select name="participantes_id" class="form-control @error('participantes_id') is-invalid @enderror" id="participantes_id">
                @foreach($participante as $participanteItem)
                    <option value="{{ $participanteItem->id }}" @if($recomendacione->participantes_id == $participanteItem->id) selected @endif>
                        {{ $participanteItem->nom_p }} {{ $participanteItem->app_p }} {{ $participanteItem->apm_p }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('participantes_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="desc_r" class="form-label">{{ __('Desc R') }}</label>
            <input type="text" name="desc_r" class="form-control @error('desc_r') is-invalid @enderror" value="{{ old('desc_r', $recomendacione?->desc_r) }}" id="desc_r" placeholder="Desc R">
            {!! $errors->first('desc_r', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>