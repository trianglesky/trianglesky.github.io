---
layout: page
title: "carl garbanzo"
permalink: "/carl-garbanzo/"
---

<ul>
  {% for garbanzo in site.garbanzo %}
    <li>
      <a href="{{ garbanzo.url }}">{{ garbanzo.title }}</a>
      {{ garbanzo.headline }}
    </li>
  {% endfor %}
</ul>