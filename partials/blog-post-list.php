<?php

require_once('partials/entry-controller.php');

$posts = $entry->getBlogPosts($userID);

foreach($posts as $post):
?>

<div class="card mt-3">
	<div class="card-body">
	  	<h3 class="h5"><?= $post['title'] ?></h3>
		<div class="row">
			<div class="col-8">
				<p class="mb-0"><?= $post['content'] ?></p>
			</div>
			<div class="col-4 text-right">
				<?php require('partials/blog-post-form-buttons.php'); ?>		
			</div>
		</div>
	</div>
</div>

<?php endforeach; ?>
