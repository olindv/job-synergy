{% from './data.njk' import data as modules %}

<section class="teachers">


    <div class="container teachers__container">
        <div class="teachers__wrap">
            <div class="teachers__top">

                <h2 class="teachers__title">У кого вы хотели бы учиться?</h2>
                <div class="teachers__block teachers__block_tabs owl-carousel owl-theme" data-owl-options='{ "items": 3, "autoWidth": true, "slideBy": 1, "nav": true, "margin":0, "dots":false, "mouseDrag":false, "responsive": {"0":{"items": 1, "nav": false}, "575":{"items": 2, "nav": false}, "992":{"items": 3, "slideBy": 3}, "1200":{"items": 5, "slideBy": 5}, "1440":{"items": 9, "slideBy": 9}} }'>
                    {% set index = 0 %}
                    {% for item in modules %}
                    {% set index = loop.index %}
                    <div class="teachers__theme {{'active' if index === 1}}" data-filtered={{item.hash}}>
                        <div class="teachers__theme_name">{{item.title | safe}}</div>
                    </div>

                    {% endfor %}


                </div>
            </div>

            <div class="teachers__bottom">
                {% set index = 0 %}
                {% for item in modules %}
                {% set index = loop.index %}
                <div class="teachers__block teachers__block_person owl-carousel owl-theme {{'invisible' if index !== 1}}" data-filtered={{item.hash}} data-owl-options='{ "items": 3, "slideBy": 1, "nav": true, "margin":0, "dots":true, "responsive": {"0":{"items": 2, "center": true, "nav": false, "loop": true}, "575":{"items": 3, "center": true, "nav": false, "loop": true}, "767":{"items": 4, "center": true, "nav": false, "loop": true}, "992":{"items": 3, "slideBy": 3}, "1200":{"items": 5, "slideBy": 5}, "1441":{"items": 7, "slideBy": 7}} }'>
                    {% for speaker in item.speakers %}
                    <a href="#" class="teachers__box">
                        <div class="teachers__speaker">
                            <div class="teachers__speaker_name">{{speaker.name | safe}}</div>
                            <div class="teachers__speaker_desc">{{speaker.desc | safe}}</div>
                            <div class="teachers__speaker_img"><img class="owl-lazy" data-src="img/teachers/{{speaker.id | safe}}.png" alt=""></div>
                        </div>
                    </a>
                    {% endfor %}
                </div>
                {% endfor %}
            </div>

        </div>
    </div>
</section>