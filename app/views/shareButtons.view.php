<?php

use App\Core\App;

?>

<div class='charePage' id='share'>
    <div class="row share">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= App::get('config')['link'] ?>" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
            <img src="/public/img/fb.png" alt="facebook" width="80" height='80'>
        </a>
        <a href="http://twitter.com/share?&url=<?= App::get('config')['link'] ?>&text=<?= App::get('config')['text'] ?>" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
            <img src="/public/img/tw.png" alt="twitter" width="80" height='80'>
        </a>
    </div>
    <div class="row">
        <div class="col">
            <a href="/users" class="float-right">All members</a>
        </div>
    </div>
</div>