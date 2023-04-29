<?php

// костиль щоб десь зберігати доступні путівки

include_once 'entities/travel.php';
class Storage {
    public function getTravels(): array {
        return array(
            1 => new Travel(
                1,
                "Сакура Японії - весни чарівність",
                "日本の桜 - 春の魅力",
                "<p><b>Авторський тур в Японію на сакуру 2023 - </b>найкращі місця милування сакурою</p>
                <br>
                <p>Переваги подорожі:</p>
                <ul>
                    <li>міні-група не більше 10 осіб;</li>
                    <li>унікальний авторський маршрут;</li>
                    <li>6 екскурсій у супроводі україномовних гідів;</li>
                    <li>2 ночівлі в Кіото і 1 ніч в рьокані в одному з найстаріших онсенів в Японії;</li>
                    <li>9 сніданків, 3 обіди, 1 вечеря в стилі кайсекі рьорі;</li>
                    <li>увага кожному туристу, путівник Японією і тепла атмосфера гарантовані!</li>
                </ul>
                <div class='travel-info travel-info-black'>
                    <img src='images/home.svg' alt='Home'>
                    <span>10 днів</span>
                    <img src='images/calendar.svg' alt='Home'>
                    <span>28 березня - 7 квітня</span>
                </div>",
                ["Токіо", "Осака", "Хіросіма", "Кіото"],
                true,
                "/images/sakura.png",
                "/images/sakura-big.png",
                new DateTime("2023-03-28"),
                new DateTime("2023-04-07"),
                111800
            )
        );
    }
}