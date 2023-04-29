<?php

include_once "storage.php";

$travels = (new Storage())->getTravels();

$travel_id = $_GET["id"];
if (!$travels[$travel_id]) {
    header("Location: /index.php");
}

include "html/top.html";
?>

<div class="order-container">
    <form action="/save_order.php" method="post">
        <h2 class="order-title">Заповніть форму, щоб перейти до оплати</h2>
        <p>Заповніть форму нижче:</p>
        <h3 class="order-text">
            Привіт! Мене звуть
            <input name="name" type="text" class="order-input order-input-name" placeholder="Введіть своє ім'я*">
            і я хочу відвідати Японію.
            <br class="desktop-only">
            Я обрав путівку
            <select name="travel_id" class="order-input" style="width: auto">
                <?php

                foreach ($travels as $travel) {
                    echo "<option value='{$travel->id}'>{$travel->name}</option>";
                }

                ?>
            </select>
            і з нетерпінням чекаю на початок подорожі.
            <br class="desktop-only">
            Ви можете зв'язатись зі мною за номером
            <input name="phone" type="text" class="order-input" placeholder="Ваш номер телефону*">
            та еmail
            <input name="email" type="email" class="order-input" placeholder="Ваш email*">
        </h3>
        <button type="submit" class="order-button-light order-submit"><span>Надіслати</span></button>
    </form>
</div>

<?php
include "html/bottom.html";