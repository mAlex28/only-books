  <?php
    // include('../includes/dbconfig.inc.php');
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/sidebar.php');
    ?>


  <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
          <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                  <div class="container-fluid">
                      <div class="row mb-2">
                          <div class="col-sm-6">
                              <h1>Books</h1>
                          </div>
                          <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item active">Books</li>
                              </ol>
                          </div>
                      </div>
                  </div>
                  <!-- /.container-fluid -->
              </section>

              <!-- Main content -->
              <section class="content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                  <div class="card-header">
                                      <!-- <h3 class="card-title">Books details</h3> -->
                                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#insertbooks">
                                          Add Book
                                      </button>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                      <table id="example1" class="table table-bordered table-striped">
                                          <thead>
                                              <tr>
                                                  <th>Book ID</th>
                                                  <th>ISBN</th>
                                                  <th>Title</th>
                                                  <th>Author</th>
                                                  <th>Description</th>
                                                  <th>Price</th>
                                                  <th>Published date</th>
                                                  <th>Publisher</th>
                                                  <th>Version</th>
                                                  <th>Image</th>
                                                  <th>Quantity</th>
                                                  <th>Edit</th>
                                                  <th>Delete</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr></tr>
                                          </tbody>
                                          <tfoot>
                                              <tr>
                                                  <th>Book ID</th>
                                                  <th>ISBN</th>
                                                  <th>Title</th>
                                                  <th>Author</th>
                                                  <th>Description</th>
                                                  <th>Price</th>
                                                  <th>Published date</th>
                                                  <th>Publisher</th>
                                                  <th>Version</th>
                                                  <th>Image</th>
                                                  <th>Quantity</th>
                                                  <th>Edit</th>
                                                  <th>Delete</th>
                                              </tr>
                                          </tfoot>
                                      </table>
                                  </div>
                                  <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                          </div>
                          <!-- /.col -->
                      </div>
                      <!-- /.row -->
                  </div>
                  <!-- /.container-fluid -->
              </section>
              <!-- /.content -->
          </div>

          <?php
            include('includes/footer.php');
            include('includes/script.php');
            ?>