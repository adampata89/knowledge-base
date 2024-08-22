# Konfigurowanie typów

Typ konfiguracji opisuje styl życia obiektu i sposób jego instancjonowania.

Możesz skonfigurować typ w węźle konfiguracji di.xml w następujący sposób:

```xml
    --8<-- "docs/di/code/type_configuration/di.xml"
```

#### Typy wirtualne
Typ wirtualny umożliwia zmianę konkretnych argumentów zależności, które można wstrzykiwać, a także zachowania określonej klasy.
W rezultacie można używać dostosowanej klasy bez wpływu na inne klasy, które są zależne od oryginału.

Przykład tworzy typ wirtualny dla `Magento\Core\Model\Config` i identyfikuje system jako argument konstruktora dla typu.
