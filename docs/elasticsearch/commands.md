# Przydatne polecenia

## Wejście w bash kontenera z Redis

Używając terminala sprawdź nazwę kontenera:

```bash
docker ps
```

Wejście w bash redisa

```bash
docker exec -ti magento246_redis bash
```

## Dostępne narzędzia

Redis oferuje tryb monitorowania, który pozwala zobaczyć wszystkie polecenia przychodzące do serwera w czasie rzeczywistym:
    
```bash
redis-cli monitor
```

Uruchom tę komendę i przeglądaj stronę Magento. Powinieneś zobaczyć aktywność Redis, co oznacza, że Magento korzysta z Redis do cache'owania.

