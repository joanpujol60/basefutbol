@extends('layouts.app')

@section('template_title')
    Partit
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Partit') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('partit.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nou Registre') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Jornada</th>
										<th>Categoria</th>
										<th>Local</th>
										<th>Resultat Local</th>
										<th>Visitant</th>
										<th>Resultat Visitant</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($partits as $partit)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $partit->jornada }}</td>
											<td>{{ $partit->categoria }}</td>
											<td>{{ $partit->clubl->club }}</td>
											<td>{{ $partit->resultat_local }}</td>
											<td>{{ $partit->clubv->club }}</td>
											<td>{{ $partit->resultat_visitant }}</td>

                                            <td>
                                                <form action="{{ route('partit.destroy',$partit->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('partit.show',$partit->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('partit.edit',$partit->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $partits->links() !!}
            </div>
        </div>
    </div>
@endsection
