# Konfiguracja życia obiektu

Styl życia obiektu określa liczbę instancji, które mogą istnieć dla tego obiektu.

Możesz skonfigurować zależności, aby mieć następujący styl życia:

- Singleton (domyślnie) — istnieje jedna instancja tej klasy. Menedżer obiektu tworzy go na pierwsze żądanie. Ponowne żądanie klasy zwraca tę samą instancję. Usunięcie lub zakończenie zarejestrowanego w nim kontenera zwalnia instancję.
- Przejściowe — menedżer obiektów tworzy nową instancję klasy dla każdego żądania.

`shared` określa styl życia dla `type` oraz `argument`.

```xml
    --8<-- "docs/di/code/shared/di.xml"
```
