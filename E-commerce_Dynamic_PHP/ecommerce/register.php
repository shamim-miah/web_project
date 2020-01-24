<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Web technology & programming project (Trojan Horses)</title>
</head>
<body>

<section>
    <div class="form_section">
        <div class="container">
            <div class="row">
                    
                <div class="form">
                    <div class="title">
                        <div class="acc_icon"><i class="fa fa-user-o" aria-hidden="true"></i></div>
                        <h2>Create an account</h2>
                    </div>
                    <form action="action.php" method="POST" autocomplete="on">
                        <div class="form-group">
                          <label for="user">Username</label>
                          <input type="text" name="username" id="user" class="form-control" autocomplete="off" required="required">
                        </div>
                        <div class="form-group">
                          <label for="email">E-mail</label>
                          <input type="email" name="email" id="email" class="form-control" autocomplete="off" required="required">
                        </div>
                         
                        <div class="form-group">
                          <label for="pass">Password</label>
                          <input type="password" name="password"  id="pass" class="form-control" autocomplete="off" required="required">
                        </div>
                        <div class="form-group text-center" >
                          <input type="submit" name="login" value="Register" class="btn btn-color btn-lg" required="required">
                        </div>
          
                      </form>
                </div>
            </div>
        
            </div>

    </div>
    
</section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
		integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous">
	</script>
</body>
</html>