@extends('nav.nav')

@section('body')

    <form action="{{route('produto.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="preco">preco</label>
            <input type="text" name="preco" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" name="quantidade" class="form-control">
        </div>
        <div class="form-group">
            <select name="categoria_id" id="categoria_id" class="form-control">
                <option value="">SELECIONE</option>
                @foreach ($categoriaItens as $categoriaItem)
                    <option value="{{ $categoriaItem->id }}" >{{ $categoriaItem->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
    </form>
@endsection
