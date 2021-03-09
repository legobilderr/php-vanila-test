<?php require('partials/head.php'); ?>

<h1>Submit Your Name</h1>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->Name; ?></li>
    <?php endforeach; ?>
</ul>

<form method="POST" action="/users">
    <input name='name'></input>
    <button type='submit'>Submit</button>

</form>

<?php require('partials/footer.php'); ?>