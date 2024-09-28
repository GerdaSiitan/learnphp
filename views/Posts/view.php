<?php include __DIR__ . '/../partials/header.php'  ?>

<main class="container mt-4">
    <article class="border rounded p-4">
        <h2>Post Details</h2>
        
        <div class="mb-3">
         <strong>Title:</strong> <?= isset($post) ? $post->title : 'ID not found'; ?>
        </div>
        
        <div class="mb-3">
            <strong>Content:</strong> <?= isset($post) ? $post->body : 'ID not found'; ?>
        </div>
        
        <div class="mb-3">
            <strong>ID:</strong> <?= isset($post) ? $post->id : 'ID not found'; ?>
        </div>
        
        <div class="mb-3">
            <strong>Published at:</strong> <?= isset($post) ? $post->created_at : 'Date not found'; ?>
        </div>

        <div class="mb-3">
            <a href="/admin/posts" class="btn btn-secondary">Back to Posts</a>
        </div>
    </article>
</main>

<?php include __DIR__ . '/../partials/footer.php'  ?>
