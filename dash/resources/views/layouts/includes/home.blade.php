<div class="row main-row">
    <div class="container">
      <h3 class="title center">Lista de cursos:</h3>
    </div>
    <div class="row curso-row">
        <div class="row">
            @foreach($cursos as $curso)
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="{{asset($curso->imagem)}}">
                  <span class="card-title">{{$curso->titulo}}</span>
                </div>
                <div class="card-content">
                    <p class="card-desc card-stitle">{{$curso->descricao}}</p>
                    <p class="card-desc">{{$curso->valor}}</p>
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