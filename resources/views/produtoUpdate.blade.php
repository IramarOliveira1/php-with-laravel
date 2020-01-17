@extends('nav.nav')

@section('body')
<form action="{{route('produto.update',$productViewUpdate->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{$productViewUpdate->nome}}">
    </div>
    <div class="form-group">
        <label for="preco">preco</label>
        <input type="text" name="preco" class="form-control" value="{{$productViewUpdate->preco}}">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" class="form-control" value="{{$productViewUpdate->quantidade}}">
    </div>
    <button type="submit" class="btn btn-outline-success">Atualizar</button>
</form>
@endsection
