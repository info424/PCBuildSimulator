## Cafenea App

Cream aplicatia cu comanda:
 - ``composer crate-project laravel/laravel cafenea``

Pornim aplicatia cu:
 - intai deschidem terminal si mergem in directorul cafenea:
   - ``cd cafenea``
 - ``php artisan serve``
 - intram in browser pe url: http://localhost:8000

Am create migrari (clase care ajuta la crearea tabelelor in DB)
 - putem crea o migrare cu comanda ``php artisan make:migration``
 - dupa ce cream migrarea, o editam pentru a adauga coloanele dorite si schimba numele tabelei (asta daca nu s-a creat automat)
 - dupa ce am creat o migrare sau mai multe trebuie sa executam migrarile cu comanda ``php artisan migrate``
 - daca am gresit o migrare ne putem intoarce la pasul anterior cu comanda ``php artisan migrate:rollback``
 - vezi suport curs 26

Am creat rute in routes/web.php
 - Route::get('/produs-formular', [ProduseController::class, 'creareProdusFormular'])
   - primul parametru in metoda GET este numele rutei '/produs-formular', pe asta il scrieti in browser dupa url-ul de mai sus
   - al doilea parametru este un array in care primul element este clasa ProduseController iar al doilea element este metoda din controller 'creareProdusFormular'
 - vezi suport curs 22

Am creat controllere in app/Http/Controllers
 - putem creat controlere cu comanda ``php artisan make:controller`` sau creat de mana din PhpStorm
 - ProduseController in care cream metodele pe care le folosim in rute (vezi routes mai sus)
 - vezi suport curs 28

Am creat view-uri in resources/views
 - putem crea view-uri cu comanda ``php arisan make:view`` sau de mana prin PhpStorm
 - in view-uri putem folosi variabile: {{ $nume_variabila }} pe care o trimitem din controller
 - in view-uri putem folosi si logica
   - structuri decizionale (if, else, switch) -> vezi suport curs 23
   - structuri repetitive (for, foreach)-> vezi suport curs 23
 - vezi suport curs 23 si 24

Am creat modele in app/Models
 - putem crea modele cu comanda ``php artisan make:model`` sau de mana prin PhpStorm
 - in clasa Model (ex. Produs) am suprascris:
   - $table = 'produse' cu numele tabelei noastre
   - $fillable = ['nume'....] cu proprietatile pe care le putem scrie direct cand cream obiectul Produs
 - modelul nostru este mapat automat prin Eloquent ORM (Object Relational Mapper) cu tabela noastra din baza de date
 - putem apela proprietatile modelului exact cum sunt numele coloanelor (ex. $produs->nume, $produs->created_at ...)
- vezi suport curs 27
