
{% macro header_desc() %}
<div class="price__header">
  <div class="price__desc price__desc_1">
    <div class="price__item">
      <div class="price__item-title before-plane">Более 15&nbsp;онлайн-событий в&nbsp;месяц</div>
      <div class="price__item-subtitle">Форумы, мастер-классы, вебинары</div>
    </div>
    <div class="price__item">
      <div class="price__item-title before-zipper">Более 1000 часов видеозаписей </div>
      <div class="price__item-subtitle">База знаний лучших выступлений</div>
    </div>
    <div class="price__item">
      <div class="price__item-title before-star">Лучшие спикеры со&nbsp;всего мира</div>
      <div class="price__item-subtitle">Знания и&nbsp;опыт более 500 спикеров планеты</div>
    </div>
    <div class="price__item">
      <div class="price__item-title before-tv">Синергия ТВ</div>
      <div class="price__item-subtitle">Круглосуточное вещание на&nbsp;актуальные темы</div>
    </div>
  </div>
  <!-- <a href="#price__desc_2" class="price__header-button button scroll">Подробнее о подписке</a> -->
</div><!-- price__header -->
{% endmacro %}

{% macro base() %}
	<div class="payments__wrapper payments__wrapper_1" id="payments__wrapper_1">
    <div class="price-payment__title">Базовая подписка</div>
    
    <div class="price__tabs tabs d-sm-none">         
      <div class="price__tabs-link active" data-href="#1_month">
        <span>месяц</span>
      </div>
      <div class="price__tabs-link" data-href="#6_month">
        <span>6 месяцев</span>
        <span class="price__tabs-discount">-30%</span>
      </div>
      <div class="price__tabs-link" data-href="#12_month">
        <span>год</span>
        <span class="price__tabs-discount">-50%</span>
      </div>
    </div>
		{{ cards_base(item) }}
	</div><!-- payments__wrapper -->
{% endmacro %}

{% macro extended() %}
	<div class="payments__wrapper payments__wrapper_2">
		<div class="price-payment__title">Расширенные подписки</div>
		<div class="price-payment__subtitle">
			<span>Все преимущества базовой подписки</span> 
			<svg width="35" height="37" viewBox="0 0 35 37" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M35 20.8758H20.4167V37H14.5833V20.8758H0V15.5789H14.5833V0H20.4167V15.5789H35V20.8758Z" fill="#F8006B"/>
			</svg>
			<span>бизнес-обучение</span>
    </div>
    	
		{{ cards_vip(item) }}

	</div><!-- payments__wrapper -->
{% endmacro %}



{% macro cards_base(card_count=1,card_class, item1, item2, item3, item1_val, item2_val, item3_val) %}

  {% for i in range(0, card_count) -%}
  

  <div class="price-card active" id="1_month">
    <div class="price-card__header">
        <div class="price-card__header-name">месяц</div>
        <span class="price-card__discount"></span>
    </div>    
    <div class="price-card__body">
      <div class="price-card__cost" data-price="">1 500 <span class="rouble">₽</span></div>
      <div class="price-card__cost-desc"><span class="rouble"></span></div>
      <a href="#popup-price" class="price-card__button button button_red" data-fancybox>Подписаться</a>
    </div>
  </div>

  <div class="price-card price-card_sale" id="6_month">
    <div class="price-card__header">
      <div class="price-card__header-name">6 месяцев</div>
      <span class="price-card__discount">-30%</span>
    </div>    
    <div class="price-card__body">
      <div class="price-card__cost" data-price="">6 000 <span class="rouble">₽</span></div>
      <div class="price-card__cost-desc" >1 000 <span class="rouble">₽</span> в месяц</div>
      <a href="#popup-price" class="price-card__button button button_red" data-fancybox>Подписаться</a>
    </div>
  </div>

  <div class="price-card price-card_sale" id="12_month">
    <div class="price-card__header">
      <div class="price-card__header-name">год</div>
      <span class="price-card__discount">-50%</span>
    </div>    
    <div class="price-card__body">
      <div class="price-card__cost" data-price="">9 000 <span class="rouble">₽</span></div>
      <div class="price-card__cost-desc" >750 <span class="rouble">₽</span> в месяц</div>
      <a href="#popup-price" class="price-card__button button button_red" data-fancybox>Подписаться</a>
    </div>
  </div>
  {% endfor -%}
{% endmacro %}

{% macro cards_vip() %}
  <div class="payments__slider swiper-container">
    <div class="payments__slider-wrap">

      <div class="swiper-slide price-card price-card_silver" id="price-subs-silver">
        <div class="price-card__header">
          <div class="price-card__header-name">Серебрянная</div>
        </div>

        <div class="price-card__body">
          <div class="price-card__box">
            <div class="price-card__item">
              <div class="price-card__item-title">Базовая подписка</div>
              <div class="price-card__item-subtitle price-ca" data-popup-text>3 месяца</div>
            </div>
            <div class="price-card__item">
              <div class="price-card__item-title bold">Онлайн практикумы</div>
              <div class="price-card__item-subtitle small">24 программы обучения</div>
            </div>
          </div>
          <div class="price-card__cost price-card__cost-size" data-price="">15 000 <span class="rouble">₽</span></div>
          <div class="price-card__cost-desc" >5 000 <span class="rouble">₽</span> в месяц</div>
          <a class="price-card__button button button_red" href="#popup-price" data-fancybox>Подписаться</a>
        </div>
      </div>

      <div class="swiper-slide price-card price-card_gold price-card_longer" id="price-subs-gold" >
        <div class="price-card__header">
          <div class="price-card__header-name">Золотая</div>
        </div>

        <div class="price-card__body">
          <div class="price-card__box">
            <div class="price-card__item">
              <div class="price-card__item-title">Базовая подписка</div>
              <div class="price-card__item-subtitle" data-popup-text>6 месяцев</div>
            </div>
            <div class="price-card__item">
              <div class="price-card__item-title bold">MBA Mini</div>
              <div class="price-card__item-subtitle small">Диплом о&nbsp;переподготовке</div>
            </div>
          </div>
          <div class="price-card__cost price-card__cost-size" data-price="">25 000 <span class="rouble">₽</span></div>
          <div class="price-card__cost-desc" >4 150 <span class="rouble">₽</span> в месяц</div>
          <a class="price-card__button button button_red" href="#popup-price" data-fancybox>Подписаться</a>
        </div>
      </div>

      <div class="swiper-slide price-card price-card_platinum" id="price-subs-platinum">
        <div class="price-card__header">
          <div class="price-card__header-name">Платиновая</div>
        </div>

        <div class="price-card__body">
          <div class="price-card__box">
            <div class="price-card__item">
              <div class="price-card__item-title">Базовая подписка</div>
              <div class="price-card__item-subtitle" data-popup-text>12 месяцев</div>
            </div>
            <div class="price-card__item">
              <div class="price-card__item-title bold">MBA Online</div>
              <div class="price-card__item-subtitle small">Диплом и&nbsp;сертификат AMBA</div>
            </div>
          </div>
          <div class="price-card__cost price-card__cost-size" data-price="">90 000 <span class="rouble">₽</span></div>
          <div class="price-card__cost-desc" >7 500 <span class="rouble">₽</span> в месяц</div>
          <a class="price-card__button button button_red" href="#popup-price" data-fancybox>Подписаться</a>
        </div>
      </div>

    </div>
  </div>

{% endmacro %}


