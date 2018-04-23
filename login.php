<!doctype html>
<html lang="en">
<head>
	<?php require_once('partials/head.php'); ?>
</head>
<body>
	<?php require_once('partials/navbar.php'); ?>
	
    <div class="container">
		<h1 class="h2 mt-3">Sign in using existing account</h1>

        <div class="row">
            <form class="col-6" action="partials/login-controller.php" method="POST">
                <?php require_once('partials/auth-form.php'); ?>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form> 
        </div>   
	</div>

	<?php require_once('partials/footer.php'); ?>
</body>
</html>