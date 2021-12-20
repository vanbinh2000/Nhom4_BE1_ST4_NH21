<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Maunfacture Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manufacture Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="editmanu.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <?php
            if (isset($_GET['id']))
              $id = $_GET['id'];
            $getManuByID = $manufacture->getManuByID($id);
            foreach ($getManuByID as $value) :
            ?>
              <!--name -->
              <div class="card-body">
                <div class="form-group" hidden>
                  <label for="inputName">Manu_Id</label>
                  <input type="text" id="inputName" class="form-control" name="id" value="<?php echo $value['manu_id'] ?>">
                </div>
                <div class="form-group">
                  <label for="inputName">Manu_Name</label>
                  <input type="text" id="inputName" class="form-control" name="name" value="<?php echo $value['manu_name'] ?>">
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Manu_logo</label>
                  <input type="file" id="inputProjectLeader" class="form-control" name="logo" value="<?php echo $value['manu_logo'] ?>">
                </div>
              </div>
              <!-- /.card-body -->
            <?php
            endforeach;
            ?>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input name="submit" type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>