@include('layout.header');
@include('layout.navbar');
@include('layout.sidebar');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Membros</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item "><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Membros</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.content-header -->

    <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->

      <div class="card">
        <div class="card-header">

        <!--   <div class="alert alert-info" style=" width:350px; float:left;">
            Nenhum registro encontrado!
          </div>
          -->
          <div class="card-tools" >
            <form action="">
              <div class="input-group " style="width: 150px; ">
                <input type="search" id="form1" class="form-control" name="pesquisa">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="card-tools">
            <form action="">
               <div class="input-group input-group">
                  <h4 class="mr-3 mb-0 pt-1">Tipo:</h4>
                  <select name="filtro" id="filtro" class="form-control" required>
                     <option value="">Selecione</option>
                     <option value="Daniel">Daniel</option>
                     <option value="Nike">NikeS</option>
                  </select>
                  <div class="input-group-append">
                     <button type="submit" class="btn btn-default">
                     <i class="fas fa-filter"></i>
                     </button>
                  </div>
               </div>
            </form>
         </div>
        </div>
        
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <tbody>
              <tr>
                <th scope="col">#</th>
                
                <th>Nome</th>
                <th>Telefone</th>
                <th>Data de nascimento</th>
                <th>A????es</th>
              </tr>
            </tbody>
            <tbody>
              @foreach ($oi as $t)
                  
              
              <tr>
                <td> {{$t->id}} </td>
                <td> {{$t->nome}} </td>
                <td> {{$t->telefone}} </td>
                <td> {{$t->nascimento}} </td>
                
                <td>
                  <a href="/membro/edit/{{$t->id}}" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="/membro/delete/{{ $t->id }}" class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                 
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
        <div class="row d-flex justify-content-center" style="margin:10px;">
          <a href="/membro/create" class="btn btn-primary w-50" >
              Novo Membro <i class="fas fa-plus" ></i>
          </a>
        </div>
        <!-- /.card-body -->
      </div>

    <!-- /.row (main row) -->
    </div><!-- /.container-fl uid -->
  </section>

<!-- /.content -->
</div>

@include('layout.footer');