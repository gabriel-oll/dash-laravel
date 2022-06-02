<div class="row main-row ccenter">
    <div class="container">
      <h3 class="center title">Entrar</h3>
    </div>
    <div class="row cover">
        <form action="{{route('site.login.entrar')}}" method="post">
            {{ csrf_field() }}

            <div class="input-field">
                <input type="text" name="email">
                <label>E-mail</label>
            </div>            
            <div class="input-field">
                <input type="password" name="senha">
                <label>Senha</label>
            </div>            

            <button class="btn blue">Entrar</button>
        </form>
    </div>        
  </div> 