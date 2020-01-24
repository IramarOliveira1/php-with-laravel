@extends('nav.nav')

@section('body')
<form action="{{route('produto.update',$productViewUpdate->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{$productViewUpdate->nome}}" required>
    </div>
    <div class="form-group">
        <label for="preco">preco</label>
        <input type="text" name="preco" class="form-control" value="{{$productViewUpdate->preco}}" required>
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" class="form-control" value="{{$productViewUpdate->quantidade}}" required>
    </div>
    <div class="form-group">
        <select name="categoria_id" id="categoria_id" class="form-control" required>
            <option value="">SELECIONE</option>
            @foreach ($categoriaViewUpdate as $categoriaItem)
                {{ $selected =  $categoriaItem->id == $productViewUpdate->categoria_id ? 'selected' : ''}}
                <option value="{{ $categoriaItem->id }}" {{ $selected }}  > {{$categoriaItem->nome }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-outline-success">Atualizar</button>
</form>
@endsection
