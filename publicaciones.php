    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Agregar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Agregar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

<div class="row">


<div class="card-body">
<div class="form-group">
<label for="inputName">Name</label>
<input type="text" id="inputName" class="form-control">
</div>
<div class="form-group">
<label for="inputDescription">Description</label>
<textarea id="inputDescription" class="form-control" rows="4"></textarea>
</div>
<div class="form-group">
<label for="inputStatus">Status</label>
<select id="inputStatus" class="form-control custom-select">
<option selected disabled>Select one</option>
<option>Donacion</option>
<option>Pedido</option>
<option>Convocatoria</option>
</select>
</div>

<div class="row">
<div class="col-md-12">
<div class="card card-default">
<div class="card-header">
<h3 class="card-title">Agregar imagen<small><em> png,</em> jpg</small></h3>
</div>
<div class="card-body">
<div id="actions" class="row">
<div class="col-lg-6">
<div class="btn-group w-100">
<span class="btn btn-success col fileinput-button">
<i class="fas fa-plus"></i>
<span>Add files</span>
</span>
<button type="submit" class="btn btn-primary col start">
<i class="fas fa-upload"></i>
<span>Start upload</span>
</button>
<button type="reset" class="btn btn-warning col cancel">
<i class="fas fa-times-circle"></i>
<span>Cancel upload</span>
</button>
</div>
</div>

<br>



</div>
</div>

</div>

<div class="row">
<div class="col-12">
<a href="#" class="btn btn-secondary">Cancel</a>
<input type="submit" value="Create new Project" class="btn btn-success float-right">
</div>
</div>



          </div>  <!-- /.row -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->