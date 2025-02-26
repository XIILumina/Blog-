<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form method="POST" action="/blog/update">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <textarea name="content" required><?= htmlspecialchars($post['content']) ?></textarea>
        <button type="submit">Update</button>
    </form>
    <a href="/blog">Back</a>
</body>
</html>