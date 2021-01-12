{% import './macro.php' as price %}

<section class="price" id="price">
    <div class="container">
        <h2 class="price__title section__title">Подпишитесь на знания</h2>
        <div class="price__subtitle">Откройте полный доступ ко&nbsp;всем возможностям платформы</div>

        {{ price.header_desc() }}
        {{ price.base() }}
    </div>
    <div class="container price__container">
        {{ price.extended() }}
    </div>
</section>