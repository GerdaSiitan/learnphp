<?php include 'views/paritals/header.php'; ?>

<main class="container">
<a href="/admin/posts/create" class="btn btn-primary">New post</a>
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $post->id ?></td>
                    <td><?= $post->title ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a type="button" class="btn btn-info">show</a>
                            <a type="button" class="btn btn-warning">edit</a>
                            <a type="button" class="btn btn-danger">delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>

<?php include 'views/paritals/footer.php'; ?>