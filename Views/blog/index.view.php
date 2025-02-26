<!-- views/blog/index.view.php -->
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi ieraksti</title>
</head>
<body>
    <h1>Visi bloga ieraksti</h1>
    <a href="/blog/create">Add New Post</a>
    <ul>
        <?php foreach($posts as $post): ?>
            <li>
                <?= htmlspecialchars($post['content']) ?>
                <a href="/blog/show?id=<?= $post['id'] ?>">View</a>
                <a href="/blog/edit?id=<?= $post['id'] ?>">Edit</a>
                <a href="/blog/destroy?id=<?= $post['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

