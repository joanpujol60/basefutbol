<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('jornada') }}
            {{ Form::text('jornada', $partit->jornada, ['class' => 'form-control' . ($errors->has('jornada') ? ' is-invalid' : ''), 'placeholder' => 'Jornada']) }}
            {!! $errors->first('jornada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::text('categoria', $partit->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('local') }}
            {{ Form::select('local', $club, $partit->local, ['class' => 'form-control' . ($errors->has('local') ? ' is-invalid' : ''), 'placeholder' => 'Local']) }}
            {!! $errors->first('local', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('resultat_local') }}
            {{ Form::text('resultat_local', $partit->resultat_local, ['class' => 'form-control' . ($errors->has('resultat_local') ? ' is-invalid' : ''), 'placeholder' => 'Resultat Local']) }}
            {!! $errors->first('resultat_local', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('visitant') }}
            {{ Form::select('visitant', $club, $partit->visitant, ['class' => 'form-control' . ($errors->has('visitant') ? ' is-invalid' : ''), 'placeholder' => 'Visitant']) }}
            {!! $errors->first('visitant', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       
        <div class="form-group">
            {{ Form::label('resultat_visitant') }}
            {{ Form::text('resultat_visitant', $partit->resultat_visitant, ['class' => 'form-control' . ($errors->has('resultat_visitant') ? ' is-invalid' : ''), 'placeholder' => 'Resultat Visitant']) }}
            {!! $errors->first('resultat_visitant', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>