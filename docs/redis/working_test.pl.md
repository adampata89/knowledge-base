# Sprawdzenie działania

Zlokalizuj nazwę kontenera z Redisem:

```bash
docker ps
```

W wejdź do kontenera z redisem:

```bash
docker exec -ti magento246_redis bash
```

Upewnij się, że Redis działa i Magento może się z nim połączyć. Możesz użyć narzędzia redis-cli:

```bash
redis-cli ping
```

Oczekiwany wynik to `PONG`, co oznacza, że Redis działa poprawnie.
