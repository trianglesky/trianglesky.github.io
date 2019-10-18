---
layout: page
title: "mandalas"
permalink: "/mandalas/"
---

<ul>
  {% for mandalas in site.mandalas %}
    <li>
      <a href="{{ mandalas.url }}">{{ mandalas.title }}</a>
      {{ mandalas.headline }}
    </li>
  {% endfor %}
</ul>