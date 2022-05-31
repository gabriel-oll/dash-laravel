 <div class="row main-row">
    <div class="container">
      <h3 class="center">Adicionar cursos:</h3>
    </div>
    <div class="row">
        <form action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('layouts.includes.form')
            <button class="btn blue">Salvar</button>
        </form>
    </div>        
  </div> 