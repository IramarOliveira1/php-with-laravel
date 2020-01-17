@extends('nav.nav')

@section('body')

<a href="/categoria/create" class="btn btn-outline-primary mb-5"> Cadastrar Nova Categoria</a>

<div class="table-responsive">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoria as $categorias)
                <tr>
                    <th>{{ $categorias['id'] }}</th>
                    <td>{{ $categorias['nome'] }}</td>
                    <td><a href="/categoria/update/{{$categorias['id']}}" class="btn btn-outline-primary btn-sm">Editar</a></td>
                    <td><a href="{{route('categoria.destroy',$categorias['id'])}}" class="btn btn-outline-danger btn-sm">Excluir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="card-footer">
    {{ $categoria->links() }}
</div>
@endsection
