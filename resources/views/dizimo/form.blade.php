@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')

<div class="content-wrapper">
<div class="d-flex justify-content-center">
  
   
  
  <div class="col-sm-6">
    <div class="row d-flex justify-content-center"> <h1>Novo Dízimo</h1></div>
      <form action="/dizimo/store/" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="">

        <div class="row">
          <div class="col-8">
            <div class="form-group">
              <label for="nome" class="form-label" >Nome do dizimista: </label>
              <select name="membro_id" id="" class="form-control">
                <option value="">Selecione</option>
                @foreach ($membro_id as $item)
                <option value="{{$item->id}}"> {{$item->nome}} </option>
                    
                @endforeach
              </select>
             
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
                <label for="valor" class="form-label">Valor:</label>
                <input type="text" id="valor" name="valor" class="form-control" >
              </div>
          </div>
        </div>
          <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="comprovante" class="form-label">Comprovante:</label>
                    <input type="file" id="comprovante" name="comprovante" class="form-control" >
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