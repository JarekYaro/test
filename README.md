# yatel-contao Website

## Contao-Grundinstallation

**contao/managed-edition**: <https://contao.org>


## Installationsbedingung für lokale VM

**PHP Version**: PHP 7.4

**Projekt-Url**: <https://yatel-contao.lndo.site>


### Installation
1. Projekt aus dem Git in den Ordner auschecken.
2. `lando start` ausführen, um das Projekt zu starten.
3. `lando db-import xxxx.sql.gz` ausführen, um ein Backup in die Datenbank einzuspielen.
    - alternativ: direkt `lando sync -p2l` rufen, um den Live-Stand zu laden
3. `lando app-init` ausführen, um die Abhängigkeiten zu installieren.
5. `lando migrate -n` ausführen, um die Datenbank zu aktualisieren - alternativ im Browser den Contao-Installer aufrufen <https://yatel-contao.lndo.site/contao/install>

### Theme-Entwicklung

Das Theme verwendet das Nutshell Base Framework und wurde mit dem Starterkit aufgesetzt:

**URL**: <https://github.com/ErdmannFreunde/euf_nutshell_kit/tree/4.9>

Um lokal die SCSS- und JS-Dateien in `files/theme/src/` mit Watcher zu kompilieren und gleichzeitig den Browser-Sync zu verwenden, ist Folgendes zu tun:
1. `lando gulp` ausführen und geöffnet lassen (führt den Standard-Task mit Watcher aus)
2. Browser über spezielle Sync-URL öffnen: <https://yatel-contao-dev.lndo.site>

### Contao-Manager + Contao-Backend - Zugang

Im Gitlab-CI-Prozess wird kein Manager ausgespielt, d.h. er muss manuell heruntergeladen werden (https://download.contao.org/contao-manager.phar) und für das aktuelle Release in den Ordner `web` abgelegt werden!

Für Lando wird der Manager beim ersten Start automatisch heruntergeladen und ist dann unter folgender URL erreichbar:

**URL**: <https://yatel-contao.lndo.site/contao-manager.phar.php>

> Um den Cache zu leeren, kann man bequem den Contao Manager nutzen oder `lando ccp` bzw. `lando ccd`

### app_dev.php lokal nutzen

Leider überschreibt die contao-managed-edition bei jedem composer update sämtliche Änderungen (erlaubte IPs etc.) an der <https://yatel-contao.lndo.site/app_dev.php>,
deshalb haben wir eine Kopie unter <https://yatel-contao.lndo.site/dev.php> angelegt!
