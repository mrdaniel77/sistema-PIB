@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')

<div class="content-wrapper">
<div class="d-flex justify-content-center">
  
   
  
  <div class="col-sm-6">
    <div class="row d-flex justify-content-center"> <h1>Novo Membro</h1></div>
      <form action="/membro/store" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="@if(isset($membro)){{$membro->id}}@endif">
                                        
    
        <div class="row d-flex justify-content-center">
          <div class="col-4">
            <div class="form-group" style="width: 10rem;">
              <img class="card-img-top img-circle" id="img" src="/img/avatar.png">
              <div class="card-body">
                <h5 class="card-title"><input name="foto_temp" id="foto" type="file"></h5>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="form-group">
              <label for="nome" class="form-label" >Nome: </label>
              <input type="text" id="nome" name="nome" placeholder="Digite seu nome" class="form-control" value="@if(isset($membro)){{$membro->nome}}@endif">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Informe seu telefone" value="@if(isset($membro)){{$membro->telefone}}@endif">
              </div>
          </div>
        </div>
        
        <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="data" class="form-label">Data:</label>
                <input type="date" name="nascimento" id="nascimento" class="form-control" value="@if(isset($membro)){{$membro->nascimento}}@endif">
              </div>
            </div>
            <div class="col-8">
              <div class="form-group">
                <label for="data" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Insira seu email" value="@if(isset($membro)){{$membro->email}}@endif">
              </div>
            </div>
        </div>

        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label for="cep" class="form-label">CEP:</label>
              <input type="text" id="cep" name="cep" class="form-control cep" value="" placeholder="Insira o CEP" value="@if(isset($membro)){{$membro->cep}}@endif">
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label for="numero" class="form-label">Número:</label>
              <input type="number" id="numero" name="numero" class="form-control" value="@if(isset($membro)){{$membro->numero}}@endif">
            </div>
          </div>
          <div class="col-5">
            <div class="form-group">
              <label for="logradouro" class="form-label">Logradouro:</label>
              <input type="text" id="logradouro" name="logradouro" class="form-control" value="@if(isset($membro)){{$membro->logradouro}}@endif">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-5">
            <div class="form-group">
              <label for="bairro" class="form-label">Bairro:</label>
              <input type="text" id="bairro" name="bairro" class="form-control" value="@if(isset($membro)){{$membro->bairro}}@endif">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="cidade" class="form-label">Cidade:</label>
              <input type="text" id="cidade" name="cidade" class="form-control" value="@if(isset($membro)){{$membro->cidade}}@endif">
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label for="uf" class="form-label">UF:</label>
              <input type="text" id="uf" name="uf" class="form-control cep" value="@if(isset($membro)){{$membro->uf}}@endif">
            </div>
          </div>
        </div>

        <div class="row d-flex justify-content-center">
          <div class="col" align="center">
            <button type="submit" class="btn btn-success w-50 hover-shadow">
              Salvar 
              <i class="fas fa-save"></i>
            </button>
          </div>
        </div>
      </form>

  </div>




</div>
</div>
@include('layout.footer')