@extends('index.index')


<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <a class="navbar-brand" href="/home">SoteroSystems</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNav">
        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produto">Produto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categoria">Categoria</a>
            </li>
        </ul>
    </div>
</nav>


