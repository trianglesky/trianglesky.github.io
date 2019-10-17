---
layout: page
title: "carl garbanzo collection"
permalink: "/carl-garbanzo/"
---

<ul>
  {% for carl_garbanzo in site.carl_garbanzo %}
    <li>
      <a href="{{ carl_garbanzo.url }}">{{ carl_garbanzo.title }}</a>
      - {{ carl_garbanzo.headline }}
    </li>
  {% endfor %}
</ul>