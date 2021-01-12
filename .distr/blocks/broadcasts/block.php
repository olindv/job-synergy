
{% import './macro.php' as slider %}

<section class="broadcasts" id="broadcasts">
    <div class="container">
        <h2 class="broadcasts__title section__title">Смотрите <br><span> прямые трансляции</span></h2>
        <div class="broadcasts__subtitle">Форумы по&nbsp;самым актуальным темам</div>        
    </div>
    {{ slider.slider_forums() }}
    <div class="container">
        <div class="broadcasts__subtitle">Мастер-классы с&nbsp;ведущими экспертами</div>        
    </div>
    {{ slider.slider_mk() }}
    <div class="container">
        <div class="broadcasts__subtitle">Интервью у&nbsp;владельцев крупных компаний</div>        
    </div>
    {{ slider.slider_owners() }}
</section>