# PHP-Dev-Server

## Installation

Folgende Dateien kopieren und ggf. anpassen:

```shell
cp .env.example .env
cp data.yaml.example data.yaml
```

Installation:

```shell
bin/install
```

Start:

## Start

```shell
bin/start
```

## Erster Aufruf

http://localhost/index.php

Sollte folgendes ausliefern:

```
Bitte über den GET-Paramter 'view' ein Template angeben.
```

## Data-View-Logik

Beispielhaft für die View "foo":

* Eigener Abschnitt in `data.yaml`, der auf erster Ebene einen Key `data` enthält
* Template in `views/foo.phtml`

Aufruf:

http://localhost/index.php?view=foo