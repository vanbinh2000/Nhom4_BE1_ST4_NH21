<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <form action="editprotypes.php" method="post" enctype="multipart/form-data">
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
              $getProtypeByID = $protype -> getProtypeById($id);
              foreach($getProtypeByID as $value):
            ?>
            <div class="card-body">
            <div class="form-group" hidden>
                <label for="inputName">ID</label>
                <input type="text" id="inputName" class="form-control" name = "id" value = "<?php echo $value['type_id'] ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name = "name" value = "<?php echo $value['type_name'] ?>">
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