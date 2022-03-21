<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('club') }}
            {{ Form::text('club', $club->club, ['class' => 'form-control' . ($errors->has('club') ? ' is-invalid' : ''), 'placeholder' => 'Club']) }}
            {!! $errors->first('club', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciutat') }}
            {{ Form::text('ciutat', $club->ciutat, ['class' => 'form-control' . ($errors->has('ciutat') ? ' is-invalid' : ''), 'placeholder' => 'Ciutat']) }}
            {!! $errors->first('ciutat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>