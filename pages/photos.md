---
layout: page
title: "photos"
permalink: "/photos/"
---

<ul>
  {% for photos in site.photos %}
    <li>
      <a href="{{ photos.url }}">{{ photos.title }}</a>
      {{ photos.headline }}
    </li>
  {% endfor %}
</ul>