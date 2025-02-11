<?php 
    include('includes/header.php');
    ?>


<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body class="center">
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Contact Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label >Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label >Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
           
           
              <div class="form-group">
                <label for="number">Queries</label>
                <textarea
                  type="text"
                  class="form-control"
                  id="number"
                  name="number"
                ></textarea>
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
       
        </div>
      </div>
    </div>
   
  </body>
</html>
<?php 
    include('includes/footer.php');
    ?>