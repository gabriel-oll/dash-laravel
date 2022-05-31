<div class="row main-row">
  <div class="container">
    <h3 class="center">Editar cursos:</h3>
  </div>
  <div class="row">
      <form action="{{route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="put">
          {{ csrf_field() }}
          @include('layouts.includes.form')
          <button class="btn blue">Atualizar</button>
      </form>
  </div>        
</div> 