# Czym jest Redis?
W Magento Redis jest używany głównie do trzech celów:

1. **Caching (buforowanie):**

    Redis jest używany jako backend do różnych typów pamięci podręcznych w Magento, takich jak pamięć podręczna stron, bloków, układów, tłumaczeń i pamięci podręcznej kolekcji. Użycie Redis jako systemu buforowania zwiększa wydajność witryny, redukując liczbę żądań do bazy danych i czasu ładowania strony. Redis jest szczególnie efektywny, ponieważ przechowuje dane w pamięci (RAM), co umożliwia szybki dostęp do danych.

2. **Session Storage (przechowywanie sesji):**

    Magento używa Redis do przechowywania sesji użytkowników. W przypadku aplikacji internetowych z dużym ruchem, zarządzanie sesjami jest kluczowe dla skalowalności i wydajności. Redis oferuje szybki dostęp do danych sesji i umożliwia łatwe skalowanie, co jest ważne w przypadku rozproszonego środowiska serwerowego.

3. **Full Page Cache (FPC):**

    Redis może być używany jako backend dla pełnej pamięci podręcznej stron (FPC) w Magento. FPC przechowuje pełne renderowane strony HTML w pamięci podręcznej, dzięki czemu nie trzeba ich generować od zera przy każdym żądaniu. To znacząco poprawia szybkość ładowania stron dla użytkowników, zwłaszcza przy dużym ruchu.
