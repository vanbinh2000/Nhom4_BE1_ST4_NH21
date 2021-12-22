<?php
include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="add.php" method="post" enctype="multipart/form-data">
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
            <!--name -->
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name = "name">
              </div>
              <!-- manu-->
              <div class="form-group">
                <label for="inputDescription">Manufactures</label>
                <select id="inputStatus" class="form-control custom-select" name ="manu">
                  <?php
                  $getAllManu = $manufacture -> getAllManufacture();
                  foreach ($getAllManu as $value):
                  ?> 
                  <option value = <?php echo $value['manu_id']?>>
                <?php echo $value['manu_name'] ?>
                </option>
                  <?php 
                  endforeach;
                  ?>
                </select>
              </div>
              <!--protype -->
              <div class="form-group">
                <label for="inputStatus">Protype</label>
                <select id="inputStatus" class="form-control custom-select" name = "protype">
                <?php
                  $getAllType = $protype -> getAllProtype();
                  foreach ($getAllType as $value):
                  ?> 
                  <option value = <?php echo $value['type_id']?>>
                <?php echo $value['type_name'] ?>
                </option>
                  <?php 
                  endforeach;
                  ?>
                </select>
              </div>
              <!-- price-->
              <div class="form-group">
                <label for="inputClientCompany">Price</label>
                <input type="number" id="inputClientCompany" class="form-control" name = "price">
              </div>
              <!-- Description-->
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="description" class="form-control" rows="4" name  = "desc"></textarea>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">img</label>
                <input type="file" id="inputProjectLeader" class="form-control" name="image">
              </div>
              <div class="form-group">
                <label for="inputStatus">feature</label>
                <select id="inputStatus" class="form-control custom-select" name = "feature" >
                  <option selected disabled>Select one</option>
                  <option>0</option>
                  <option >1</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Create at</label>
                <input type="date" id="inputProjectLeader" class="form-control" name="create" placeholder= "yyyy-mm-dd">
              </div>
            <div class="form-group">
                <label for="inputProjectLeader">Hang ton</label>
                <input type="text" id="inputProjectLeader" class="form-control" name="Hangton">
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input  name = "submit" type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div>
                </form>
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
<?php include "footer.html" ?>