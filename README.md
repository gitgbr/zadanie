#Rozwiązanie zadania
Aplikacja napisana w Frameworku Laravel 9
Posiada dwa endpointy:  
1)GET posts  
zwracający:
```json
[
  {
    "userId": 1,
    "id": 1,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
  },
  {
    "userId": 1,
    "id": 2,
    "title": "qui est esse",
    "body": "est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla"
  },
  ...
]
```
2) GET posts/:id  
zwracający:

```json
{
  "userId": 1,
  "id": 1,
  "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
  "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
}
```
## Instalacja i uruchomienie aplikacji:
Po pobraniu repozytorium trzeba zainstalować niezbędne pakiety poleceniem:  
```console
composer update
```
serwer uruchamiamy następującym poleceniem:
```console
php artisan serve
```
testy automatyczne uruchomiamy poleceniem:
```console
php artisan test
```
