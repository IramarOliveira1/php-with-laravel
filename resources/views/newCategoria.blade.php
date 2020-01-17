@extends('nav.nav')

@section('body')
    <form action="{{route('categoria.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
    </form>
@endsection
