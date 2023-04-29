<?php

class Travel {

    private const MONTHS = array(
        "січня",
        "лютого",
        "березня",
        "квітня",
        "травня",
        "червня",
        "липня",
        "серпня",
        "вересня",
        "жовтня",
        "листопада",
        "грудня",
    );

    public int $id;
    public string $name, $nameJapanese;
    private string $description;
    private array $cities;
    private bool $isPremiere;
    private string $cardImageUrl, $pageImageUrl;
    private DateTime $startDate, $endDate;
    private int $price;

    public function __construct(int      $id,
                                string   $name,
                                string   $nameJapanese,
                                string   $description,
                                array    $cities,
                                bool     $isPremiere,
                                string   $cardImageUrl,
                                string   $pageImageUrl,
                                DateTime $startDate,
                                DateTime $endDate,
                                int      $price) {
        $this->id = $id;
        $this->name = $name;
        $this->nameJapanese = $nameJapanese;
        $this->description = $description;
        $this->cities = $cities;
        $this->isPremiere = $isPremiere;
        $this->cardImageUrl = $cardImageUrl;
        $this->pageImageUrl = $pageImageUrl;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->price = $price;
    }
    public function getCardHtml(): string {
        $premiereHtml = $this->isPremiere ?
            "<div class='premiere'>
                <span>Прем'єра</span>
            </div>" : "";

        return
            "<a href='/travel.php?id={$this->id}' class='travel-link'>
                <div class='travel-item'>
                    <h3 class='travel-name'>• {$this->name}</h3>
                    <p class='travel-cities'>{$this->getCitiesString()}</p>
                    <div class='travel-image-container'>
                        {$premiereHtml}
                        <img src='{$this->cardImageUrl}' class='travel-image' alt='Sakura'>
                    </div>
                    <div class='travel-info'>
                        <img src='/images/home.svg' alt='Home'>
                        <span>{$this->getDatesIntervalDays()} днів</span>
                        <img src='/images/calendar.svg' alt='Home'>
                        <span>{$this->getDatesString()}</span>
                    </div>
                    <h3>{$this->price} грн</h3>
                </div>
            </a>";
    }

    public function getPageHtml(): string {
        $daysCount = $this->getDatesIntervalDays();
        $nightsCount = $daysCount - 1;

        return
            "<div class='center-container' style='height: auto'>
                <h1>{$this->nameJapanese}</h1>
                <h2 class='center-container-subtitle'>({$this->name})</h2>
                <div class='big-travel-image-container'>
                    <img src='{$this->pageImageUrl}' class='big-travel-image' alt='Travel image'>
                </div>
                <div class='travel-details-and-map'>
                    <div class='travel-details'>
                        <p>Маршрут: {$this->getCitiesString()}</p>
                        <p><b>Тривалість: </b>{$daysCount} днів / {$nightsCount} ночей</p>
                        {$this->description}
                        <h3>{$this->price}</h3>
                        <a href='/order.php?id={$this->id}' class='order-button-light'><span>Замовити</span></a>
                </div>
                    <div class='travel-map'>
                        <img src='images/sakura-route.png'>
                    </div>
                </div>
            </div>";
    }

    private function getCitiesString(): string {
        return implode(' • ', $this->cities);
    }

    private static function dateToString(DateTime $dateTime): string {
        return $dateTime->format("d") . " " . Travel::MONTHS[$dateTime->format("m") - 1];
    }

    private function getDatesString(): string {
        $startDateString = $this::dateToString($this->startDate);
        $endDateString = $this::dateToString($this->endDate);
        return "{$startDateString} - {$endDateString}";
    }

    private function getDatesIntervalDays(): int {
        return $this->endDate->diff($this->startDate)->days;
    }
}