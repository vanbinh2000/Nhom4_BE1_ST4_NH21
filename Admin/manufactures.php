<?php
$page = "manu";
include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manufactures</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manufactures</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Manufactures</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          manu_id
                      </th>
                      <th style="width: 20%">
                          manu_name
                      <th style="width: 20%">
                          manu_logo
                      </th>
                      <th style="width: 95%;">
                    </th>
                  </tr>
              </thead>
              <?php $getAllManufacters = $manufacture->getAllManufacture();
              foreach($getAllManufacters as $value):
              ?>
              <tbody>
              <tr>
                      <td>
                          <?php echo $value['manu_id'] ?>
                      </td>
                      <td>
                          <a>
                              <?php echo $value['manu_name'] ?>
                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="" style="width: 70px;" src="../img/<?php echo $value['manu_logo'] ?>">
                              </li>
                              
                          </ul>
                      </td>

                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="manufactureEdit.php?id=<?php echo $value['manu_id'] ?>">
                              <i class="fas fa-pencil-alt" >
                              </i>
                              Edit
                          </a>
                          <a onclick="return Del('<?php echo $value['manu_name'] ?>')" class="btn btn-danger btn-sm" href="delmanufacture.php?id=<?php echo $value['manu_id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
              </tbody>
              <?php endforeach; ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    function Del(name){
      return confirm("Bạn có chắc muốn xoá " + name + "?");
    }
  </script>
<?php include "footer.html" ?>