@extends('nav.nav')

@section('body')
    
    <form action="{{route('categoria.update',$categoriaUpdateView->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{$categoriaUpdateView->nome}}">
        </div>
        <button class="btn btn-outline-primary">Atualizar</button>
    </form>

@endsection