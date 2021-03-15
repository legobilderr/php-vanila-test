<?php require('partials/head.php'); ?>


<table class="table-hover">
    <thead>
        <tr>
            <th class='nameTabs' colspan="4" scope="colgroup">All members</th>
        </tr>
    </thead>
    <tbody>
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
                    <li><a href="mailto:<?= $user->Email; ?>">send mail</a></li>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require('partials/footer.php'); ?>