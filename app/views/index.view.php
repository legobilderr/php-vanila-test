<?php require('partials/head.php'); ?>
<?php require('map.view.php'); ?>

<div class="container">
    <div class="step-row">
        <div id="progress"></div>
        <div class="step-col"><small>Step1</small></div>
        <div class="step-col"><small>Step2</small></div>
    </div>


    <?php require('form/form1.view.php'); ?>

    <?php require('form/form2.view.php'); ?>

    <?php require('shareButtons.view.php'); ?>




</div>
<script src="/public/js/main.js"></script>
<script src="/public/js/ajax.js"></script>
<?php require('partials/footer.php'); ?>