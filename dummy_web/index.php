<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$demo_username = 'admin';
$demo_password = 'P@ssw0rd123!';
$web_root = __DIR__;
$requested_file = isset($_GET['file']) ? $_GET['file'] : '';
$file_output = '';

if ($requested_file !== '') {
    $candidate = $web_root . '/' . $requested_file;

    if (is_file($candidate) && is_readable($candidate)) {
        $file_output = '<div class="box"><h3>File contents</h3><pre>' . htmlspecialchars(file_get_contents($candidate)) . '</pre></div>';
    } else {
        $file_output = '<div class="box warning"><h3>File read failed</h3><p>Requested path could not be read. This demonstrates a weak file access control check.</p></div>';
    }
}

$login_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $posted_user = isset($_POST['username']) ? $_POST['username'] : '';
    $posted_pass = isset($_POST['password']) ? $_POST['password'] : '';

    if ($posted_user === $demo_username && $posted_pass === $demo_password) {
        $login_message = '<div class="box success"><h3>Login successful</h3><p>This demo accepts the hardcoded credentials. Use it to test credential stuffing or source-code discovery.</p></div>';
    } else {
        $login_message = '<div class="box warning"><h3>Login failed</h3><p>That username or password is incorrect.</p></div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Pentest Homepage</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; background: #0f172a; color: #e2e8f0; }
        h1, h2 { color: #93c5fd; }
        .grid { display: grid; gap: 1.5rem; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); }
        .box { background: #111827; border: 1px solid #334155; border-radius: 12px; padding: 1rem; margin-bottom: 1rem; }
        .warning { border-color: #f59e0b; }
        .success { border-color: #34d399; }
        code { background: #1e293b; padding: 0.1rem 0.3rem; border-radius: 4px; }
        form { margin-top: 0.75rem; }
        label { display: block; margin-bottom: 0.35rem; }
        input[type="text"], input[type="password"], input[type="search"] { width: 100%; padding: 0.6rem; margin-bottom: 0.75rem; box-sizing: border-box; }
        button { background: #2563eb; color: white; border: 0; padding: 0.7rem 1rem; border-radius: 8px; cursor: pointer; }
        ul { padding-left: 1.1rem; }
        pre { white-space: pre-wrap; word-break: break-word; }
    </style>
</head>
<body>
    <h1>Demo Pentest Homepage</h1>
    <p>This page is intentionally insecure so you can test a pentesting tool for common web and file disclosure issues.</p>

    <div class="grid">
        <section class="box">
            <h2>Vulnerable file read demo</h2>
            <p>Use the query string below to read files from the web root without any path validation.</p>
            <ul>
                <li><code>?file=hidden/credentials.txt</code></li>
                <li><code>?file=../secret.txt</code></li>
                <li><code>?file=hidden/backup.txt</code></li>
            </ul>
            <form method="get">
                <label for="file">File path</label>
                <input type="search" id="file" name="file" value="<?= htmlspecialchars($requested_file) ?>">
                <button type="submit">Read file</button>
            </form>
            <?= $file_output ?>
        </section>

        <section class="box">
            <h2>Insecure login demo</h2>
            <p>The administrator credentials are hardcoded and can be found with source discovery or by brute force.</p>
            <form method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="admin">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="P@ssw0rd123!">
                <button type="submit">Login</button>
            </form>
            <?= $login_message ?>
            <p>Hint: the demo credentials are <strong>admin / P@ssw0rd123!</strong>.</p>
        </section>

        <section class="box">
            <h2>Discovery hints</h2>
            <p>The following paths are intentionally exposed as part of the demo:</p>
            <ul>
                <li><code>/dummy_web/hidden/credentials.txt</code></li>
                <li><code>/dummy_web/hidden/backup.txt</code></li>
                <li><code>/secret.txt</code></li>
            </ul>
            <p>Web root for this demo: <code><?= htmlspecialchars($web_root) ?></code></p>
            <p>Source file: <code><?= htmlspecialchars(__FILE__) ?></code></p>
        </section>
    </div>
</body>
</html>
