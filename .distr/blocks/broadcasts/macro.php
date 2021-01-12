


{% macro slider_tmpl(class) %}
<div class="broadcasts__slider broadcasts__slider-{{class}}">
    <div class="swiper-wrapper">
        {% for item in data %}
        <a href="#" class="swiper-slide swiper-lazy broadcasts__slide broadcasts__slide_{{class}} {{item.class1 | safe}}" data-background="../img/broadcasts/speakers/{{ item.id }}.jpg" style="">
            <div class="broadcasts__item shadowed">

                {% if item.id %}
                {#<!-- <div class="broadcasts__photo">
                    <img data-src="img/broadcasts/speakers/{{ item.id | safe }}.png" class="swiper-lazy" alt="{{ item.name | safe }}">
                    <div class="swiper-lazy-preloader"></div>
                </div> --> #}
                {% endif %}

                <div class="broadcasts__info">
                    {% if not item.date %}
                    <div class="broadcasts__live">
                        <div class="broadcasts__live-icon">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 16.5C13.6421 16.5 17 13.1421 17 9C17 4.85786 13.6421 1.5 9.5 1.5C5.35786 1.5 2 4.85786 2 9C2 13.1421 5.35786 16.5 9.5 16.5Z" stroke="#EF4276" stroke-width="1.61947" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.5 13.5C11.9853 13.5 14 11.4853 14 9C14 6.51472 11.9853 4.5 9.5 4.5C7.01472 4.5 5 6.51472 5 9C5 11.4853 7.01472 13.5 9.5 13.5Z" stroke="#EF4276" stroke-width="1.61947" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.5 10.5C10.3284 10.5 11 9.82843 11 9C11 8.17157 10.3284 7.5 9.5 7.5C8.67157 7.5 8 8.17157 8 9C8 9.82843 8.67157 10.5 9.5 10.5Z" stroke="#EF4276" stroke-width="1.61947" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>         
                        <div class="broadcasts__live-text">В эфире</div>           
                    </div>   
                    {% endif %}                     
                    <div class="broadcasts__date">{{ item.date | safe }}</div>
                    <div class="broadcasts__name">{{ item.name | safe }}</div>
                    <div class="broadcasts__desc">{{ item.desc | safe }}</div>
                </div>
            </div>
        </a>
        {% endfor %}
    </div>
    <div class="swiper-nav">
        <div class="swiper__btn-prev swiper-button-prev swiper-prev"></div>
        <div class="swiper__btn-next swiper-button-next swiper-next"></div>
    </div><!-- swiper-nav -->
</div>
{% endmacro %}

{% macro slider_mk() %}
{% from './data.php' import data as data %}
{{ slider_tmpl('mk') }}
{% endmacro %}

{% macro slider_owners() %}
{% from './data.php' import data_owners as data %}
{{ slider_tmpl('owners') }}
{% endmacro %}

{% macro slider_forums() %}
{% from './data.php' import data_forums as data %}
{{ slider_tmpl('forums') }}
{% endmacro %}