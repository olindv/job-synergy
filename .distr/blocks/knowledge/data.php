<?php
{%
  set data = [

    {
      img: 'baskakov',
      name: 'Кирилл Баскаков',
      theme: 'Искусственный интеллект как инструмент...',
      color: '#E70C6A',
      bg: '
        <svg width="171" height="72" viewBox="0 0 171 72" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.6" d="M15.4092 43.7709C15.4092 40.7827 17.8316 38.3604 20.8197 38.3604H170.511V66.3456C170.511 69.3338 168.089 71.7562 165.101 71.7562H15.4092V43.7709Z" fill="#E70C6A"/>
        <path opacity="0.6" d="M44.2651 27.0729C44.2651 24.0847 46.6875 21.6624 49.6757 21.6624H170.511V66.3456C170.511 69.3337 168.089 71.7561 165.101 71.7561H44.2651V27.0729Z" fill="#C91260"/>
        </svg>
      '
    }
    ,
    {
      img: 'forbs',
      name: 'Стив Форбс',
      theme: 'Почему нужно постоянно напоминать себе о&nbsp;цели',
      color: '#00A3FF',
      bg: '
        <svg width="171" height="72" viewBox="0 0 171 72" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.6" d="M15.4092 43.7709C15.4092 40.7827 17.8316 38.3604 20.8197 38.3604H170.511V66.3456C170.511 69.3338 168.089 71.7562 165.101 71.7562H15.4092V43.7709Z" fill="#00A3FF"/>
        <path opacity="0.6" d="M44.2651 27.0729C44.2651 24.0847 46.6875 21.6624 49.6757 21.6624H170.511V66.3456C170.511 69.3337 168.089 71.7561 165.101 71.7561H44.2651V27.0729Z" fill="#00A3FF"/>
        </svg>
      '
    }
    ,
    {
      img: 'besson',
      name: 'Люк Бессон',
      theme: 'Как найти вдохновение для создания шедевра',
      color: '#632D97',
      bg: '
        <svg width="171" height="93" viewBox="0 0 171 93" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="1" width="167" height="92">
        <rect x="4.19775" y="1.85327" width="165.923" height="90.1757" fill="#632D97"/>
        </mask>
        <g mask="url(#mask0)"><ellipse opacity="0.6" cx="81.4972" cy="76.6884" rx="77.1403" ry="74.8352" fill="#632D97"/></g>
        <path opacity="0.6" d="M16.8223 53.8204C16.8223 51.0171 19.0948 48.7446 21.898 48.7446H170.121V86.9532C170.121 89.7564 167.848 92.0289 165.045 92.0289H16.8223V53.8204Z" fill="#632D97"/>
        </svg>
      '
    }
    ,
    {
      img: 'taleb',
      name: 'Нассим Николас Талеб',
      theme: 'Почему мы&nbsp;не&nbsp;можем прогнозировать будущее',
      color: '#004BBC',
      bg: '
        <svg width="171" height="93" viewBox="0 0 171 93" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="1" width="167" height="92">
        <rect x="4.19775" y="1.85327" width="165.923" height="90.1757" fill="#004BBC"/>
        </mask>
        <g mask="url(#mask0)"><ellipse opacity="0.6" cx="81.4972" cy="76.6884" rx="77.1403" ry="74.8352" fill="#004BBC"/></g>
        <path opacity="0.6" d="M16.8223 53.8204C16.8223 51.0171 19.0948 48.7446 21.898 48.7446H170.121V86.9532C170.121 89.7564 167.848 92.0289 165.045 92.0289H16.8223V53.8204Z" fill="#004BBC"/>
        </svg>
      '
    }
    ,
    {
      img: 'harari',
      name: 'Юваль Ной Харари',
      theme: 'Каким будет мир после пандемии',
      color: '#E70C6A',
      bg: '
        <svg width="171" height="93" viewBox="0 0 171 93" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="1" width="167" height="92">
        <rect x="4.19775" y="1.85327" width="165.923" height="90.1757" fill="#E70C6A"/>
        </mask>
        <g mask="url(#mask0)"><ellipse opacity="0.6" cx="81.4972" cy="76.6884" rx="77.1403" ry="74.8352" fill="#E70C6A"/></g>
        <path opacity="0.6" d="M16.8223 53.8204C16.8223 51.0171 19.0948 48.7446 21.898 48.7446H170.121V86.9532C170.121 89.7564 167.848 92.0289 165.045 92.0289H16.8223V53.8204Z" fill="#E70C6A"/>
        </svg>
      '
    }
    ,
    {
      img: 'kotler',
      name: 'Филип Котлер',
      theme: 'Как восстановиться после кризиса',
      color: '#632D97',
      bg: '
        <svg width="171" height="72" viewBox="0 0 171 72" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.6" d="M15.4092 43.7709C15.4092 40.7827 17.8316 38.3604 20.8197 38.3604H170.511V66.3456C170.511 69.3338 168.089 71.7562 165.101 71.7562H15.4092V43.7709Z" fill="#632D97"/>
        <path opacity="0.6" d="M44.2651 27.0729C44.2651 24.0847 46.6875 21.6624 49.6757 21.6624H170.511V66.3456C170.511 69.3337 168.089 71.7561 165.101 71.7561H44.2651V27.0729Z" fill="#632D97"/>
        </svg>
      '
    }
    ,
    {
      img: 'norris',
      name: 'Чак Норрис',
      theme: 'Как быть победителем в&nbsp;любом деле',
      color: '#E70C6A',
      bg: '
        <svg width="171" height="93" viewBox="0 0 171 93" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="1" width="167" height="92">
        <rect x="4.19775" y="1.85327" width="165.923" height="90.1757" fill="#C4C4C4"/>
        </mask>
        <g mask="url(#mask0)"><ellipse opacity="0.6" cx="81.4972" cy="76.6884" rx="77.1403" ry="74.8352" fill="#E70C6A"/></g>
        <path opacity="0.6" d="M16.8223 53.8204C16.8223 51.0171 19.0948 48.7446 21.898 48.7446H170.121V86.9532C170.121 89.7564 167.848 92.0289 165.045 92.0289H16.8223V53.8204Z" fill="#E70C6A"/>
        </svg>
      '
    }
    ,
    {
      img: 'nurmagomedov',
      name: 'Хабиб Нурмагомедов',
      theme: 'Как оставаться непобежденным',
      color: '#E70C6A',
      bg: '
        <svg width="171" height="93" viewBox="0 0 171 93" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="1" width="167" height="92">
        <rect x="4.19775" y="1.85327" width="165.923" height="90.1757" fill="#C4C4C4"/>
        </mask>
        <g mask="url(#mask0)"><ellipse opacity="0.6" cx="81.4972" cy="76.6884" rx="77.1403" ry="74.8352" fill="#E70C6A"/></g>
        <path opacity="0.6" d="M16.8223 53.8204C16.8223 51.0171 19.0948 48.7446 21.898 48.7446H170.121V86.9532C170.121 89.7564 167.848 92.0289 165.045 92.0289H16.8223V53.8204Z" fill="#E70C6A"/>
        </svg>
      '
    }
    ,
    {
      img: 'tayson',
      name: 'Майк Тайсон',
      theme: 'Как не&nbsp;сдаваться и&nbsp;быть сильнее своей судьбы',
      color: '#0082BC',
      bg: '
        <svg width="171" height="93" viewBox="0 0 171 93" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="1" width="167" height="92">
        <rect x="4.19775" y="1.85327" width="165.923" height="90.1757" fill="#0082BC"/>
        </mask>
        <g mask="url(#mask0)"><ellipse opacity="0.6" cx="81.4972" cy="76.6884" rx="77.1403" ry="74.8352" fill="#0082BC"/></g>
        <path opacity="0.6" d="M16.8223 53.8204C16.8223 51.0171 19.0948 48.7446 21.898 48.7446H170.121V86.9532C170.121 89.7564 167.848 92.0289 165.045 92.0289H16.8223V53.8204Z" fill="#0082BC"/>
        </svg>
      '
    }


  ]
%}