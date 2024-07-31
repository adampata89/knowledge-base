# Informacje o konfiguracji DI

Użyj polecenia `dev:di:info`, aby pobrać informacje o konfiguracji wstrzykiwania zależności dla klasy. Poniższy przykład pobiera informacje o konfiguracji wstrzykiwania zależności dla klasy `Magento\Quote\Model\Quote\Item\ToOrderItem`:

```bash
    --8<-- "docs/di/code/di_info/command.bash"
```

??? tip "Polecenie nie działa?"
    Jeżeli po zapytaniu otrzymałeś komunikat:
    ```bash
    --8<-- "docs/di/code/di_info/error.bash"
    ```
    W zależności od środowiska może być konieczne użycie większej liczby backslashy.
    ```bash
        --8<-- "docs/di/code/di_info/command_2.bash"
    ```

Przykład odpowiedzi:

```
    --8<-- "docs/di/code/di_info/response.bash"
```
