<!DOCTYPE html>
<?php
define('STORAGE', __DIR__ . '/storage.txt');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['todo'])) {
    file_put_contents(STORAGE, PHP_EOL, FILE_APPEND);
    file_put_contents(STORAGE, $_POST['todo'], FILE_APPEND);
}

$todos = file_get_contents(STORAGE);
$todos = explode(PHP_EOL, $todos);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="">insert a message</label>
        <input type="text" name="todo">
        <button type="submit">Add</button>
    </form>
    <div>
    <?php
        echo "<ul>";
        foreach ($todos as $key => $todo) {
            echo "<li style='margin-top: 10px'>";
            echo '<form action="index.php" method="POST">';
            echo '<input type="hidden" name="delete" value="'. $key .'">';
            echo '<button type="submit"> X </button>';
            echo " $todo";
            echo "</form>";
            echo "</li>";
        }
        echo "</ul>";
        ?>
    </div>
</body>
</html>