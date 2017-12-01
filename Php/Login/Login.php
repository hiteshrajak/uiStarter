<!doctype html>
<html>

<head>
    <title>
      Login Form
    </title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

</head>

<body>
    <div class="container">
      <form action="http://localhost/php/Loginsuccessful.php" class="form-horizontal"method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Usre Name</label>
          <div class="col-sm-8">
            <input type="Text" class="form-control" name="U_name" placeholder="User Name">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" name="Password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-8">
            <div class="checkbox">
              <label>
                <input type="checkbox"name="checkbox"> Remember me
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-4">
            <button type="submit" class="btn btn-default">Sign in</button>
          </div>
          <div class=" col-sm-4">
          <a class="btn-link"href">Sign up</button> 
          </div>
        </div>
      </form>
      <script>
    function visitPage(){
        window.location='file:///E:/xampp-win32-5.6.12-0-VC11/xampp/htdocs/Php/Signup.html';
    }
</script>

          
      </div>
    
</body>

</html>