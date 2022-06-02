<div class="row main-row">
    <div class="container">
      <h3 class="center title">Lista de cursos:</h3>
    </div>        
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Título</th>
          <th>Descrição</th>
          <th>Valor</th>
          <th>Imagem</th>
          <th>Publicado</th>
          <th colspan="2">Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($registros as $registro)
        <tr>
          <td>{{$registro->id}}</td>
          <td>{{$registro->titulo}}</td>
          <td>{{$registro->descricao}}</td>
          <td>{{$registro->valor}}</td>
          <td><img src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}" class="img-td"></td>          
          <td>{{$registro->publicado}}</td>
          <td>
            <a href="{{route('admin.cursos.editar', $registro->id)}}" class="edit-btn ccenter"><img src="http://127.0.0.1:8000/img/cursos//edit.svg" class="login_img"><div class="ccenter">EDITAR</div></a>
          </td>
          <td>
            <a href="{{route('admin.cursos.deletar', $registro->id)}}" class="delete-btn ccenter"><img src="http://127.0.0.1:8000/img/cursos//delete.svg" class="login_img delete-img"><div class="ccenter">DELETAR</div></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="row main-row">
    <a href="{{route('admin.cursos.adicionar')}}" class="btn blue">adicionar</a>                
  </div>