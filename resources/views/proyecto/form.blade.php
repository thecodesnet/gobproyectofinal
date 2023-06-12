<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreproyecto') }}
            {{ Form::text('nombreproyecto', $proyecto->nombreproyecto, ['class' => 'form-control' . ($errors->has('nombreproyecto') ? ' is-invalid' : ''), 'placeholder' => 'Nombreproyecto']) }}
            {!! $errors->first('nombreproyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fuentefondo') }}
            {{ Form::text('fuentefondo', $proyecto->fuentefondo, ['class' => 'form-control' . ($errors->has('fuentefondo') ? ' is-invalid' : ''), 'placeholder' => 'Fuentefondo']) }}
            {!! $errors->first('fuentefondo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montoplanificado') }}
            {{ Form::text('montoplanificado', $proyecto->montoplanificado, ['class' => 'form-control' . ($errors->has('montoplanificado') ? ' is-invalid' : ''), 'placeholder' => 'Montoplanificado']) }}
            {!! $errors->first('montoplanificado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montopatrocinado') }}
            {{ Form::text('montopatrocinado', $proyecto->montopatrocinado, ['class' => 'form-control' . ($errors->has('montopatrocinado') ? ' is-invalid' : ''), 'placeholder' => 'Montopatrocinado']) }}
            {!! $errors->first('montopatrocinado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montofondospropios') }}
            {{ Form::text('montofondospropios', $proyecto->montofondospropios, ['class' => 'form-control' . ($errors->has('montofondospropios') ? ' is-invalid' : ''), 'placeholder' => 'Montofondospropios']) }}
            {!! $errors->first('montofondospropios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>