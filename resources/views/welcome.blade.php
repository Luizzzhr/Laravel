@extends('layouts.main')

@section('title', 'LH Events')

@section('content')

<div id="search-container" class="cool-md-12">
    <h1>Busque o evento</h1>.
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
        <h2>Proximo Eventos</h2>
        <p class="subtitle">Veja os eventos nos proximos dias</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
              <div class="card col-md-3">
                  <img src="/img/1338376.jpg" alt="{{ $event->title }}">
                  <div class="card-body">
                      <p class="card-date">24/03/2022</p>
                      <h5 class="card-title">{{ $event->    title }}</h5>
                      <p class="card-participants">X Participantes</p>
                      <a href="#" class="btn btn-primary">Saber mais</a>
                  </div>
            </div>  
            @endforeach

        </div>
</div>
        @endsection
        


  
