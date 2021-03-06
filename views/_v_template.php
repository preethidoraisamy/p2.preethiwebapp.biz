<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- JS/CSS File we want on every page -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>				
										
	<!-- Controller Specific JS/CSS -->
	<link rel="stylesheet" href="/css/MyCss.css" type="text/css">
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
		
</head>

<body>	

	<nav>
		<menu>
				
			<!-- /Menu Item -->
			<!-- when logged in -->	
			<?php if($user): ?>
				<li><a href='/users/profile'>Home</a></li>
				<li><a href='/posts/add'>Add Post</a></li>
				<li><a href='/posts/'>Others Posts</a></li>
				<li><a href='/posts/mypost'>My Posts</a></li>
				<li><a href='/posts/users'>Follow Users</a></li>
				<li><a href='/users/reset'>Change password</a></li>
				<li><a href='/users/logout'>Logout</a></li>
			<!-- When not logged in -->
			<?php else: ?>
				<li><a href='/'>Home</a></li>
				<li><a href='/users/signup'>Sign Up</a></li>
				<li><a href='/users/login'>Log In</a></li>
			<?php endif; ?>
		</menu>
	</nav>
	
	<!-- When the uesr is Logged in display the Name -->
	<?php if($user): ?>
		You are logged in as <?=$user->first_name?> <?=$user->last_name?><br>
	<?php endif; ?>
	
		
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>