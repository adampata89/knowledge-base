# Pluginy

Aby rozszerzyć działanie klasy, możesz użyć pluginów. Pluginy to klasy, które modyfikują zachowanie innych klas.
W Magento 2 pluginy są wykorzystywane do modyfikacji zachowania metod publicznych.

Przy użyciu `di.xml` zdefiniujesz pluginy dla klas. `sortOrder` określa kolejność wywoływania. 
Możesz także wyłączyć plugin poprzez użycie parametru `disabled`.

```xml
        --8<-- "docs/di/code/plugins/di.xml"
```

Więcej informacji o pluginach znajdziesz w [dokumentacji](https://developer.adobe.com/commerce/php/development/components/plugins/) Magento.
