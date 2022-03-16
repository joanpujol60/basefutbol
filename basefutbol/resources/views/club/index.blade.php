@extends('layouts.app')

@section('template_title')
    Clubs
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clubs') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('club.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Club</th>
										<th>Ciutat</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clubs as $club)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $club->club }}</td>
											<td>{{ $club->ciutat }}</td>

                                            <td>
                                                <form action="{{ route('club.destroy',$club->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('club.show',$club->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('club.edit',$club->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $clubs->links() !!}
            </div>
        </div>
    </div>
@endsection
