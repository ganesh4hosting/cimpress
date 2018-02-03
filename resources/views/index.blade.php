<html>

<head><title>Bloggers</title>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>    
    
    <body>
            <div class="wrapper">
            
                <h2 class="hdtxt">Login</h2>
                
                <div class="container">
  
                      <form action="checklogin"  method="POST">
                        <div class="form-group">
                          <label for="username">Username:</label>
                          <input type="username" class="form-control" id="username" placeholder="Enter Username" name="username">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                        </div>
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default">Submit</button>
                        @if($isvalid == false)
							<p style="color:red;">Wrong Username Or Password</p>
                        @endif
                      </form>
                </div>

                
            </div>
    </body>
    
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</html>
