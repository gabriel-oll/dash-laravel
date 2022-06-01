<div class="row main-row">
    <div class="container">
      <h3 class="center">Lista de cursos:</h3>
    </div>
    <div class="row">
        <div class="row">
            @foreach($cursos as $curso)
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="{{asset($curso->imagem)}}">
                  <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <h5>{{$curso->titulo}}</h5>
                    <p>{{$curso->descricao}}</p>
                    <p>{{$curso->valor}}</p>
                </div>
                <div class="card-action">
                  <a href="#">Ver mais..</a>
                </div>
              </div>
            </div>
            @endforeach
        </div>
        <div class="row center">
          {{$cursos->links()}}
        </div>
    </div>
</div>