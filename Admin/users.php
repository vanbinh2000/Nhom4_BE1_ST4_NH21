<?php include "header.php" ?>
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
                          ID
                      </th>
                      <th style="width: 20%">
                          Fullname
                      </th>
                      <th style="width: 8%">
                          Email
                      </th>
                      
                      <th style="width: 20%" class="text-center">
                          Password
                      </th>
                    
                  </tr>
              </thead>
              <?php
                $getAllUser = $user->getAllUsers();
                foreach($getAllUser as $value): 
              ?>
              <tbody>
                  <tr>
                      <td>
                          <?php echo $value['id'] ?>
                      </td>
                      <td>
                          <a>
                          <?php echo $value['fullname'] ?>
                          </a>
                         
                      </td>
                     
                      <td class="project_progress">
                          <span><?php echo $value['email']?></span>
                      </td>
                      <td class="project-state">
                          <span><?php echo $value['password'] ?></span>
                      </td>
                      <td class="project-actions text-right">
                          
                          <a class="btn btn-info btn-sm" href="editUsers.php?id=<?php echo $value['id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a onclick="return Del('<?php echo $value['fullname'] ?>')" class="btn btn-danger btn-sm" href="delusers.php?id=<?php echo $value['id'] ?>">
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