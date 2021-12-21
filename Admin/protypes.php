<?php
$page = "protype";
include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
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
          <h3 class="card-title">Projects</h3>

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
                          Type_id
                      </th>
                      <th style="width: 20%">
                          Type_name
                      </th>
                    
                  </tr>
              </thead>
              <?php
                $getAllProtypes = $protype->getAllProtype();
                foreach($getAllProtypes as $value): 
              ?>
              <tbody>
                  <tr>
                      <td>
                          <?php echo $value['type_id'] ?>
                      </td>
                      <td>
                          <a>
                          <?php echo $value['type_name'] ?>
                          </a>
                         
                      </td>
                      
                      <td class="project-actions text-right">
          
                          <a class="btn btn-info btn-sm" href="editprotype.php?id=<?php echo $value['type_id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a onclick="return Del('<?php echo $value['type_name'] ?>')" class="btn btn-danger btn-sm" href="delprotype.php?id=<?php echo $value['type_id'] ?>">
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
      function Del(name) {
        return confirm("Bạn có chắc muốn xoá "+ name + " ?");
      }
  </script>
  <?php include "footer.html" ?>