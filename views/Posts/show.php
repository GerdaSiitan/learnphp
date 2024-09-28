<?php include(__DIR__ . '/../partials/header.php'); ?>

<main class="container">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" value="<?=$post->title?>">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea name="body" class="form-control" id="body" rows="3"><?=$post->body?></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Edit">
        </div>
</main>

<?php include(__DIR__ . '/../partials/footer.php'); ?>
