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
       require_once "table.php";
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
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
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
        <img class="mr-3" src="libs/bootstrap/bootstrap-outline.svg" alt="" width="48" height="48">
        <img class="mr-3 bg-light rounded" src="imgs/jquery-vertical.svg" alt="" width="48" height="48">
        <img class="mr-3" src="imgs/datatable-2021940-1705360.png" alt="" width="48" height="48">
        <img class="mr-3 rounded" src="imgs/md-logo2.png" alt="" width="48" height="48">
        <div>
        
        </div>
        
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Bootstrap DataTable JQuery and Material Design Icons</h6>
          <small>Learning Purpouses</small>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            
           
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
          </p>
          <br/>
          <span>
              Show: <select id="pages" >
                       <option value="10">10</option>
                       <option value="20">20</option>
                       <option value="30">30</option>
                       <option value="50">40</option>
                    </select>
                    
            </span>
        </div>
        <br/>
        <?php 

             echo $tb;
        ?>
      </div>

      
      </div>
    </main>

    
  </body>
</html>
