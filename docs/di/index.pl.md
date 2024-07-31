# Czym jest Dependency Injection w Magento 2?

Dependency Injection (DI) to wzorzec projektowy, który polega na dostarczaniu obiektom zależności zamiast pozwalania im na ich tworzenie. W praktyce oznacza to, że obiekty nie tworzą swoich zależności, ale otrzymują je od zewnętrznego źródła. W ten sposób obiekty są od siebie odizolowane i mogą być łatwo testowane.

Każdy moduł może mieć globalny i specyficzny dla obszaru plik `di.xml`. Aplikacja odczytuje wszystkie pliki konfiguracyjne `di.xml` zadeklarowane w systemie i łączy je wszystkie razem, dodając wszystkie węzły.

Aplikacja wczytuje konfigurację w następujących etapach:

   - Initial (app/etc/di.xml)
   - Global (<moduleDir>/etc/di.xml)
   - Area-specific (<moduleDir>/etc/<area>/di.xml)

Mamy do dyspozycji następujące obszary:

   - adminhtml
   - frontend
   - graphql
   - webapi_rest
   - webapi_soap
   - crontab
