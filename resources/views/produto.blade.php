@extends('nav.nav')

@section('body')

<a href="/produto/create" class="btn btn-outline-primary mb-5"> Cadastrar Novo Produto</a>

<div class="table-responsive">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($produtos as $produto)
                <tr>
                    <th>{{ $produto->id }}</th>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->categoriaNome }}</td>
                    <td><a href="/produto/update/{{$produto->id}}" class="btn btn-outline-primary btn-sm">Editar</a></td>
                    <td><a href="{{route('produto.destroy',$produto->id)}}" class="btn btn-outline-danger btn-sm">Excluir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="card-footer">
    {{ $produtos->links() }}
</div>
@endsection
