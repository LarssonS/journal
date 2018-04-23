<a href="edit-post.php?entryID=<?= $post["entryID"]?>" class="btn btn-primary btn-sm">Edit</a>

<form action="partials/remove-blog-post.php" class="d-inline-flex" method="POST">
    <input type="hidden" name="entryID" value="<?= $post["entryID"] ?>">
    <button class="btn btn-danger btn-sm" type="submit">Remove</button>
</form>

