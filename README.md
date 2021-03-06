# petrol_stations
Projekt grupowy

## Laravel 5.5

# Jak postawic u siebie projekt:
1. Musimy mieć na naszym środowisku postawiony serwer, baze danych oraz interpreter php - najlepiej pobrac
xampp'a, który posiada wszystkie ww. rzeczy
https://www.apachefriends.org/pl/download.html
2. Potrzebny nam będzie również git aby pobrać repozytorium i pracować z resztą zesołu
https://git-scm.com/downloads
3. Musimy również pobrać composera aby postawić u siebie laravela
https://getcomposer.org/download/
4. Włączamy xampp'a i w panelu kontrolnym aktywujemy moduł Apache oraz MySQL
5. Jeśli zainstalowaliśmy xampp'a w domyślnej ścieżce, przechodziy do `C/xampp/htdocs` (jest to folder, w którym domyślnie przechowywane są nasze aplikacje -> stąd czyta localhost)
6. Teraz klonujemy projekt
`git clone https://github.com/Drodevbar/petrol_stations.git`
7. Nasz projekt znajduje się teraz w katalogu `petrol_stations`
9. Przechodzimy do owego katalogu i z poziomu lini komend robimy `composer install`
10. Teraz generujemy klucz aplikacji `php artisan key:generate`
11. W celu odpalenia projektu przechodzimy pod adres `localhost/petrol_stations/public`

# Integracja z bazą danych:
1. Najpierw musimy utworzyć baze danych, w tym celu przechodzimy pod adres
`localhost/phpmyadmin` (domyśle dane logowania do modułu phpmyadmin to `root/''`), po lewej stronie klikamy `Nowa`
2. Naszą bazę danych nazywamy `petrol_stations`, a jako metodę porównywania napisów wybieramy `utf8_polish_ci`
4. Struktura tabel w naszej bazie danych znajduje się w katalogu `database/migrations` (nas interesuje tylko migracja z jedną tableą -> `...create_stations_table` -> reszta jest domyślnie generowana przez laravela)
5. Model, który odpowiada za tabele, to `app/Station`
6. **Aby automatycznie utworzyć u siebie wszystkie potrzebne tabele wystarczy z poziomu konsoli (aktualnie bedac w katalogu projektu) wpisać polecenie `php artisan migrate` - spowoduje to powstanie tabel w bazie `petrol_stations`**

# Zasiewanie bazy danych
1. Abyśmy wszyscy mogli pracować na wspólnych danych należy *zasiać* swoją bazę danymi dostępnymi w owym projekcie
    * ścieżka do pliku z danymi `config/stationsdata`
    * ścieżka do stacjowego seedera `database\seeds\StationsTableSeeder`
    * odpalenie seedera jest w `database\seeds\DatabaseSeeder`
2. **Jedyne co należy zrobić, aby dodać dane do swojej bazy danych, to z poziomu konsoli wpisać polecenie `php artisan db:seed`**

