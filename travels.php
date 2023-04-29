<?php include 'html/top.html'; ?>

<div class="center-container" style="height: 50vh;">
    <h1>チケットを選ぶ</h1>
    <h2 class="center-container-subtitle">(Вибрати квиток на екскурсію)</h2>
</div>
<div class="travels-horizontal-array">

    <?php

    include_once "storage.php";

    $travels = (new Storage())->getTravels();
    foreach ($travels as $travel) {
        echo $travel->getCardHtml();
    }

    ?>

</div>

<?php include 'html/bottom.html'; ?>
