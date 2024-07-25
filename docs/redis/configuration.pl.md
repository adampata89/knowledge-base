# Konfiguracja

## docker_compose.yml
W swoim pliku `docker_compose.yml` dodaj Redis jako usługę.

??? "Przykład konfiguracji pliku `docker_compose.yml`"
    === "YML"
        ```yml linenums="1" hl_lines="3-10 13"
        --8<-- "docs/redis/code/docker_compose.yml"
        ```

## app/etc/env.php
Skonfiguruj Magento aby używało Redis poprzez edycję pliku `app/etc/env.php`.

??? "Przykład konfiguracji pliku `app/etc/env.php`"
    === "PHP"
        ```php linenums="1" hl_lines="12-19 24-35 75-83"
        --8<-- "docs/redis/code/env.php"
        ```
