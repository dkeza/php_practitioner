<?php require('views/partials/head.php'); ?>

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

<?php require('views/partials/footer.php'); ?>