<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <title>To Do list</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="/controllers/contact.php">Contact us</a></li>
            <li><a href="/controllers/about.php">About us</a></li>
        </ul>
    </nav>

    <h1>My Tasks</h1>

    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
                <strong>Title: </strong>

                <?php if ($task->completed): ?>
                    <span style="text-decoration: line-through;">
                <?php endif ?>

                <?=$task->description;?>

                <?php if ($task->completed): ?>
                    </span>
                <?php endif ?>

            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>