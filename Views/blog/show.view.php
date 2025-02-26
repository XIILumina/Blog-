<!DOCTYPE html>
<html>
<head>
    <title>View Post</title>
</head>
<body>
    <h1>Post</h1>
    <p><?= htmlspecialchars($post['content']) ?></p>
    <a href="/blog">Back</a>
</body>
</html>