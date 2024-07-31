# Konfigurowanie argumentów konstruktora

Argumenty konstruktora klas można skonfigurować w pliku `di.xml` w węźle `arguments`.
Argumenty te mogą zostać wprowadzone do klasy przez menedżera obiektów podczas tworzenia.
Należy pamiętać, że nazwa argumentu konfigurowanego w pliku XML musi odpowiadać nazwie parametru znajdującego się w konstruktorze konfigurowanej klasy.


```xml
    --8<-- "docs/di/code/constructor/di.xml"
```

### Typy argumentów

#### object
```xml
    --8<-- "docs/di/code/constructor/object.xml"
```

```xml
    --8<-- "docs/di/code/constructor/object_shared.xml"
```

Tworzy instancję typu typeName i przekazuje ją jako argument. Możesz przekazać dowolną nazwę klasy, nazwę interfejsu lub typ wirtualny jako typeName.

Styl życia utworzonej instancji jest zdefiniowany, gdy ustawisz właściwość shared. Więcej szczegółów znajdziesz [tutaj](../shared).

---

#### string
```xml
    --8<-- "docs/di/code/constructor/string.xml"
```

---

#### boolean
```xml
    --8<-- "docs/di/code/constructor/bool.xml"
```

Aplikacja konwertuje dowolną wartość dla tego węzła argumentu na wartość logiczną według poniższej tabeli:

Input type | Data    | Bolean value
---------- |---------| ------------
Boolean    | true    | true
Boolean    | false   | false
String     | 'true'  | true
String     | 'false' | false
String     | '1'     | true
String     | '0'     | false
Integer    | 1       | true
Integer    | 0       | false

---

#### number
```xml
    --8<-- "docs/di/code/constructor/number.xml"
```

Akceptowalne wartości dla tego typu to liczby całkowite, zmiennoprzecinkowe lub ciągi znaków numerycznych.

---

#### init_parameter
```xml
    --8<-- "docs/di/code/constructor/init_parameter.xml"
```

---

#### const
```xml
    --8<-- "docs/di/code/constructor/const.xml"
```

---

#### null
```xml
    --8<-- "docs/di/code/constructor/null.xml"
```

---

#### array
```xml
    --8<-- "docs/di/code/constructor/array.xml"
```

---

### Przykłady
```xml
    --8<-- "docs/di/code/constructor/example.xml"
```

### Implementacja interfejsów

Menedżer obiektów używa mapowań abstrakcji-implementacji, gdy podpis konstruktora klasy żąda obiektu przez jej interfejs.
Menedżer obiektów używa tych mapowań, aby określić, jaka jest domyślna implementacja tej klasy dla określonego zakresu.

Węzeł `preference` określa domyślną implementację:

```xml
    --8<-- "docs/di/code/constructor/preference.xml"
```

### Nadpisywanie preferencji

Jeśli chcesz zastąpić metodę publiczną lub chronioną z klasy podstawowej, użyj węzła `preference` z pliku `di.xml`, aby to osiągnąć.

Oto przykład zastąpienia metody z pliku podstawowego:

```xml
    --8<-- "docs/di/code/constructor/override.xml"
```

### Dziedziczenie konfiguracji parametrów

Parametry skonfigurowane dla typu klasy przekazują jego konfigurację do klas potomnych.
Każdy potomek może zastąpić parametry skonfigurowane dla jego nadtypu; to znaczy klasa nadrzędna lub interfejs:

```xml
    --8<-- "docs/di/code/constructor/inheritance.xml"
```

W powyższym przykładzie `Magento\Backend\Block\Context` jest potomkiem `Magento\Framework\View\Element\Context`.

Pierwszy wpis konfiguruje wszystkie instancje `Magento\Framework\View\Element\Context`, a także jego dzieci, aby przekazać `Magento\Framework\Url` jako `$urlBuilder` w swoich konstruktorach.

Drugi wpis zastępuje to i konfiguruje wszystkie instancje `Magento\Backend\Block\Context` tak, aby zamiast tego używały `Magento\Backend\Model\Url` jako `$urlBuilder`.

