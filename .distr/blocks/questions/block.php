{% from './data.njk' import data as items %}
<section class="questions" id="questions">
    <div class="container">
        <h2 class="questions__title">Популярные вопросы</h2>
        <div class="questions__block">
            {% for item in items %}
            <div class="questions__item">
                <div class="questions__item-head">
                    <p class="questions__item-title">{{ item.title | safe }}</p>
                    <div class="questions__item-arrow">
                        <img src="img/questions/arrow.svg" alt="" class="">
                    </div>
                </div>
                <div class="questions__item-content">
                    <p class="questions__item-description">{{ item.description | safe }}</p>
                </div>
            </div>
            {% endfor %}   
        </div>
    </div>
</section>