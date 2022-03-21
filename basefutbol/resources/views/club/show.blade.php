@extends('layouts.app')

@section('template_title')
    {{ $club->name ?? 'Mostrar Club' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Club</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('club.index') }}"> Tornar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Club:</strong>
                            {{ $club->club }}
                        </div>
                        <div class="form-group">
                            <strong>Ciutat:</strong>
                            {{ $club->ciutat }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
