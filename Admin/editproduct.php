<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <form action="edit.php" method="post" enctype="multipart/form-data">
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
            <?php 
            if (isset($_GET['id']))
              $id = $_GET['id'];
              $getProtypeByID = $product -> getProductById($id);
              foreach($getProtypeByID as $value):
            ?>
            <div class="card-body">
            <div class="form-group" hidden>
                <label for="inputName">ID</label>
                <input type="text" id="inputName" class="form-control" name = "id" value = "<?php echo $value['id'] ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name = "name" value = "<?php echo $value['name'] ?>">
              </div>
              <!-- manu-->
              <div class="form-group">
                <label for="inputDescription">Manufactures</label>
                <select id="inputStatus" class="form-control custom-select" name ="manu">
                  <?php
                  $getAllManu = $manufacture -> getAllManufacture();
                  foreach ($getAllManu as $value1):
                    if ($value1['manu_id'] == $value['manu_id']):
                  ?> 
                  <option selected value = "<?php echo $value1['manu_id']?>">
                <?php echo $value1['manu_name']; ?> </option>
                <?php  else:?>
                  <option value = "<?php echo $value1['manu_id']?>">
                <?php echo $value1['manu_name']; ?>
                  <?php 
                  endif;
                  endforeach;
                  ?>
                </select>
              </div>
              <!--protype -->
              <div class="form-group">
                <label for="inputStatus">Protype</label>
                <select id="inputStatus" class="form-control custom-select" name = "protype" >
                <?php
                  $getAllType = $protype -> getAllProtype();
                  foreach ($getAllType as $value1):
                    if ($value1['type_id'] == $value['type_id']):
                  ?> 
                  <option selected value = "<?php echo $value1['type_id']?>">
                <?php echo $value1['type_name']; ?> </option>
                <?php  else:?>
                  <option value = "<?php echo $value1['type_id']?>">
                <?php echo $value1['type_name']; ?>
                  <?php 
                  endif;
                  endforeach;
                  ?>
                </select>
              </div>
              <!-- price-->
              <div class="form-group">
                <label for="inputClientCompany">Price</label>
                <input type="text" id="inputClientCompany" class="form-control" name = "price" value= "<?php echo $value['price'] ?>">
              </div>
              <!-- Description-->
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="description" class="form-control" rows="4" name  = "desc"></textarea>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">img</label>
                <input type="file" id="inputProjectLeader" class="form-control" name="img">
              </div>
              <div class="form-group">
                <label for="inputStatus">feature</label>
                <input type="text" id="inputProjectLeader" class="form-control" name="feature" value="<?php echo $value['feature'] ?>">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Create at</label>
                <input type="text" id="inputProjectLeader" class="form-control" name="create" value = "<?php echo $value['created_at']?>">
              </div>
            <div class="form-group">
                <label for="inputProjectLeader">Hang ton</label>
                <input type="text" id="inputProjectLeader" class="form-control" name="Hangton" value = "<?php echo $value['hangton'] ?>">
              </div>
              
            </div>
            <?php endforeach; ?>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input  name = "submit" type="submit" value="Edit product" class="btn btn-success float-right">
        </div>
      </div>
                </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html" ?>