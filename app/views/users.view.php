<?php require('partials/head.php'); ?>

<h1>All users</h1>
<table class="table-hover">
    <tr>
        <th>avatar</th>
        <th>FullName</th>
        <th>ReportSubject</th>
        <th>email</th>

    </tr>
    <?php foreach ($users as $user) : ?>

        <tr>
            <td>
                <img src="<?= $user->avatar; ?>" width="80" height='60' alt="avatar">
            </td>
            <td class='Fullname'>
                <li><?= $user->FirstName; ?></li>
                <li><?= $user->LastName; ?></li>
            </td>
            <td>
                <li><?= $user->ReportSubject; ?></li>
            </td>
            <td>
                <li><?= $user->Email; ?></li>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<!-- @if($paginator->total()>$paginator->count())
<br>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                {{$paginator->links()}}
            </div>
        </div>
    </div>
</div>

@endif -->

<?php require('partials/footer.php'); ?>