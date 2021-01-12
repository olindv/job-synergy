{% import './macro.php' as videocard %}

<section class="knowledge" id="knowledge">
    <div class="container">
        <h2 class="knowledge__title section__title">Безграничная база знаний</h2>
        <div class="knowledge__subtitle">2000+ часов записей выступлений, презентации и&nbsp;подкасты. Без рекламы, в&nbsp;хорошем качестве, с&nbsp;переводом или в&nbsp;оригинале.</div>
    </div>

    <div class="knowledge__box knowledge__box_1" >
        {{ videocard.cards(3,3, card_class='state_page') }}
    </div>
    <div class="knowledge__box knowledge__box_2" data-delayBeforeStart="2500">
        {{ videocard.cards(3,3, card_class='state_page') }} 
    </div>
</section>