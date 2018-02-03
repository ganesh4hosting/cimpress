<html>

<head><title>Bloggers</title>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>    
    
    <body>
            <div class="wrapper">
            
                <h2 class="hdtxt"><?=strtoupper($username)?>  Dashboard  <span style="float:right;"><a href="logout">Logout</a></span></h2>
                
                <div class="container">
				
				 All Blogs Posted
				</div>
				
				<?php foreach($response as $val) {  ?>
				
				
				<div style="border:1px solid #999;padding:20px;"><span>Created By - </span> <?=$val['createdby'];?> <br> 
				<a target="_blank" href="showblogs/<?=$val['blogid'];?>">  <?=$val['blog_header']; ?></a></p>
				<?php if($val['useredit'] == 1) { echo "<a target='_blank' href='editblog/".$val['blogid']."'> Edit Blog</a>";    } ?>
				
				</div>
				
				<?php } ?>
				
			

	</body>
</head>

</html>	