<html>

<head><title>Bloggers</title>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>    
    
    <body>
            <div class="wrapper">
            
                <h2 class="hdtxt"><?=strtoupper($username)?>  Dashboard  <span style="float:right;"><a href="logout">Logout</a></span></h2>
                
                <div class="container">
				
				<p><a href=""> Create Blog</a>  </p>
				<p><a> Edit Blog</a>  </p>
				<p><a href="showallblogs">show All Blog</a>  </p>
				
				</div>
				
				
				<form name="frmcreateblog" action="createblog" method="POST">
							<div>
							
									<p> Blog Header <input type="text" name="blog_head"  placeholder="Mximum 255 Characters" style="width:100%;" > </p>
									
							</div>
							
							<div>
							
									<p> Blog Content <br>
									
									<textarea name="blog_content" placeholder="Describe Your Blog" style="width:100%;height:400px;" ></textarea>
									</p>
									
							</div>
							{{ csrf_field() }}
							<div>
							
									<input type="submit" value="Post Your Blog" class="btn btn-success">
									
							</div>
				</form>			
			</div>

	</body>
</head>

</html>	