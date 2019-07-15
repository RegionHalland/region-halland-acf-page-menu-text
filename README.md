# Skapa en textruta med plats för menu text på en sida

## Hur man använder Region Hallands plugin "region-halland-acf-page-menu-text"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-page-menu-text".


## Användningsområde

Denna plugin skapar en textruta med plats för menu text på en sida


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell på:
```sh
A) Gnu.org (https://www.gnu.org/licenses/gpl-3.0.html)
B) Wikipedia (https://sv.wikipedia.org/wiki/GNU_General_Public_License)
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-page-menu-text.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-page-menu-text.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-page-menu-text": "1.0.0"
},
```


## Visa navigation-texten på en sida via "Blade"

OBS! Notera att man i en meny även måste ange ID för den post man vill visa 

```sh
<div>
  {{ get_region_halland_acf_page_menu_text(28) }}
</div>
```

## Versionhistorik

### 1.1.0
- Uppdaterat information om licensmodell

### 1.0.0
- Första version