@extends('layouts.app')

@section('template_title')
    {{ $partit->name ?? 'Show Partit' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Partit</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('partit.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Jornada:</strong>
                            {{ $partit->jornada }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $partit->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Local:</strong>
                            {{ $partit->local }}
                        </div>
                        <div class="form-group">
                            <strong>Resultat Local:</strong>
                            {{ $partit->resultat_local }}
                        </div>
                        <div class="form-group">
                            <strong>Visitant:</strong>
                            {{ $partit->visitant }}
                        </div>
                        <div class="form-group">
                            <strong>Resultat Visitant:</strong>
                            {{ $partit->resultat_visitant }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
