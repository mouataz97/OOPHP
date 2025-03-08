<!DOCTYPE html>
<?php
define('STORAGE', __DIR__ . '/storage.txt');

$todos = file_get_contents(STORAGE);
$todos = explode(PHP_EOL, $todos);
$todos = array_filter($todos);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['todo'])) {
    $newTodo = $_POST['todo'];
    file_put_contents(STORAGE, PHP_EOL . $newTodo, FILE_APPEND);
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['DELETE'])) {
    $key = (int)$_POST['key'];
    unset($todos[$key]);
    file_put_contents(STORAGE, implode(PHP_EOL, $todos));
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['edit'])) {
    $key = (int)$_POST['key'];
    if (isset($_POST['todo'])) {
        $newTodo = $_POST['todo'];
        $todos[$key] = $newTodo;
        file_put_contents(STORAGE, implode(PHP_EOL, $todos));
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <label for="todo">Insert a message:</label>
    <input type="text" name="todo" id="todo" required>
    <button type="submit">Add</button>
</form>

<div>
    <table>
        <thead>
        <tr>
            <th>Remove</th>
            <th>Update</th>
            <th>Todo List</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($todos as $key => $todo): ?>
            <tr>
                <td>
                    <!-- Delete Button -->
                    <form action="index.php" method="POST">
                        <input type="hidden" name="DELETE" value="delete">
                        <input type="hidden" name="key" value="<?= $key ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <!-- Edit Button (Optional) -->
                    <form action="index.php" method="POST">
                        <input type="hidden" name="edit" value="edit">
                        <input type="hidden" name="key" value="<?= $key ?>">
                        <button type="submit">Edit</button>
                    </form>
                </td>
                <td><?= htmlspecialchars($todo) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>