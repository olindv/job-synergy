
{% macro cards(triple_count=1, preload_count=0, card_class='') %}
{% from './data.php' import data as data %}

  {% for item in data %}
      
      <div class="videocard videocard_red videocard_{{card_class}}">
        <a href="#" class="videocard__inner">
          <div class="videocard__name">{{ item.name | safe }}</div>
          <div class="videocard__theme">{{ item.theme | safe }}</div>
          <!-- <div class="videocard__date">31 октября 2019</div> -->
          <span class="videocard__duration">00:00</span>
          <div class="videocard__bg">
            {{ item.bg | safe }}
          </div>
          <div class="videocard__photo"><img src="img/knowledge/{{ item.img | safe }}.png" alt=""></div>
          <!-- <div class="videocard__chosen">
            <svg width="14" height="18" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.8333 16.5L6.99999 12.3333L1.16666 16.5V3.16667C1.16666 2.72464 1.34225 2.30072 1.65481 1.98816C1.96737 1.67559 2.3913 1.5 2.83332 1.5H11.1667C11.6087 1.5 12.0326 1.67559 12.3452 1.98816C12.6577 2.30072 12.8333 2.72464 12.8333 3.16667V16.5Z" stroke="#E70C6A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div> -->
        </a>
        <a href="#" class="videocard__bottom" style="color: {{ item.color | safe }}">
          <span class="videocard__forum-name" >Synergy Online Forum</span>
          <!-- <span class="videocard__watch">
            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.749939 6.99998C0.749939 6.99998 3.74994 2.33331 8.99994 2.33331C14.2499 2.33331 17.2499 6.99998 17.2499 6.99998C17.2499 6.99998 14.2499 11.6666 8.99994 11.6666C3.74994 11.6666 0.749939 6.99998 0.749939 6.99998Z" fill="#BCC7D3" stroke="#BCC7D3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 8.75C10.2426 8.75 11.25 7.9665 11.25 7C11.25 6.0335 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.0335 6.75 7C6.75 7.9665 7.75736 8.75 9 8.75Z" fill="#BCC7D3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>0000</span>
          </span> -->
        </a>
      </div>

  {% endfor %}

{% endmacro %}