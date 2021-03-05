<?php require('partials/head.php'); ?>

<h1>Plans for day</h1>
<ul>
    <?php foreach ($tasksFromDb as $task) : ?>
        <li>

            <?php if ($task->complated) : ?>

                <s><?= $task->description; ?></s>

            <?php else : ?>

                <?= $task->description; ?>

            <?php endif; ?>

        </li>
    <?php endforeach ?>
</ul>
<?php require('partials/footer.php'); ?>