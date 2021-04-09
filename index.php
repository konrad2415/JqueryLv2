<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Testing JQuery Data Table with Ajax and php+MySql db connection live load and search in a Bootstrap page">
    <meta name="author" content="Daibel Inle Martínez Sánchez | Konrad Zuse ">
    
    
    <title>JQ  DataTable</title>  
    <?php 
       require_once "deps.php";
    ?>
  </head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Data Table:</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
            </div>
          </li>
        </ul>
        
      </div>
    </nav>

    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" href="#">
          Changes:
          <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
      </nav>
    </div>

    <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3 logo-x48" src="libs/bootstrap/bootstrap-outline.svg" alt="" >
        <img class="mr-3 bg-light rounded logo-x48" src="imgs/jquery-vertical.svg" alt="">
        <img class="mr-3 logo-x48" src="imgs/datatable-2021940-1705360.png" alt="" >
        <img class="mr-3 rounded logo-x48" src="imgs/md-logo2.png" alt="" >
        <div>
        
        </div>
        
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Bootstrap DataTable JQuery and Material Design Icons</h6>
          <small>Learning Purpouses</small>
        </div>
      </div>

      <div class="card">
       <h5 class="card-header">Featured</h5>
           <div class="card-body">
             <div id="dTable"></div>
           </div>
       </div>


      
      </div>
    </main>

    
  </body>
</html>
<script>
  $(document).ready(function(){
     $('#dTable').load("table.php");
  })
</script>
