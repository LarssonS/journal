<!doctype html>
<html lang="en">
<head>
	<?php require_once('partials/head.php'); ?>
</head>
<body>
	<?php require_once('partials/navbar.php'); ?>
	
	<div class="container">
		<?php if(!isset($_SESSION['userID'])): ?> 

			<h1 class="h2 mt-3">Latest posts</h1>

			<div class="card">
				<div class="card-body">
					<h3 class="h5">Title here</h3>
					<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab praesentium aliquam sed ipsa vel earum dolore maxime eveniet ut. Nam repellendus reprehenderit, fugiat rerum expedita laboriosam voluptate obcaecati pariatur minima.</p>
				</div>
			</div>
		
		<?php else:
			require_once('partials/blog-post-form.php'); 
			require_once('partials/blog-post-list.php');
		endif;?>
	
	</div>

	<?php require_once('partials/footer.php'); ?>
</body>
</html>