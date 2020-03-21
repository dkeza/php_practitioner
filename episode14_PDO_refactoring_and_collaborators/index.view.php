<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <header>
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
    </header>
</body>
</html>