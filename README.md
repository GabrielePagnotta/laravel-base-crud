## Iniziare progetto laravel 7 da zero

1. Aprire vs code, entrare nella cartella dove lanciare il progetto e lanciare da terminale il comando:
```composer create-project --prefer-dist laravel/laravel:^7.0 [NOME PROGETTO]```
2. Entriamo nella cartella progetto e lanciamo i comandi per creare la repository:
   1. Creare una Repository direttamente sul profilo personale di Github
   2. Aprire il terminale preferito e spostarsi nella cartella di lavoro che si vuole inizializzare come repository
   3. Utilizzare il comando ``` git init ```
   4. Poi il comando ```git add -A ```
   5. Poi il comando ```git commit -m " Testo del commit " ```
   6. Poi il comando: ```git branch -M main```
   7. Poi il comando ```git remote add origin .........URL DELLA REPO........```
   8. Poi il secondo comando ```git push -u origin main```
3. Se vogliamo utilizzare Sass:
    1. Lanciamo da terminale il comando: ```npm i```
    2. Poi il comando: ```npm run dev```
    3. Poi il comando: ```npm run watch```
    4. Per gestire gli url delle immagini caricate in sass, modificare il file 📃 webpack.mix.js aggiungendo le options in questo modo:
    ```
    mix.js('resources/js/app.js', 'public/js')
        .sass('resources/sass/app.scss', 'public/css')
        .options({
        processCssUrls: false});
    ```
4. Per attivare il progetto lanciare il comando: ```php artisan serve```

## Clonazione Progetto Laravel Già avviato

1. Clonare sul pc il progetto da github
2. Apriamo il progetto con VS Code
3. Creiamo dentro il progetto un nuovo file 📃 .env
4. Copiamo e incolliamo dentro il file 📃 .env il contenuto di .env.example
5. Apriamo il terminale nel progetto e lanciamo il comando: ```composer install``` ( Se escono errori passiamo al comando: ```composer update``` )
6. Lanciamo poi il comando: ```php artisan key:generate```
7. Installiamo le dipendenze di Node con il comando: ```npm install```
8. Al termine possiamo attivare il server con il comando: ```php artisan serve```
## importare bootstrap 5 in laravel 7
A. Lanciare il comando se non ancora fatto: ```npm i```
1. Lanciare il comando da terminale: ```npm install bootstrap```
2. Lanciare il comando da terminale: ```npm i @popperjs/core```
3. Aprire il file 📃app.scss e inserire:
```
@import '~bootstrap/dist/css/bootstrap.min.css';
```
4. Andare nel file app.js nella cartella resources e inserire:
```
import '../../node_modules/@popperjs/core/dist/umd/popper.min.js';
import 'bootstrap/js/dist/dropdown';
```
5. Lanciare da terminale il comando (per generare files css e js nella cartella public): ```npm run dev```
6. Creare nella view del layout il collegamento ai file compilati da webpack.mix.js:
```
<link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

<script src=" {{ asset('js/app.js') }} "></script>
```
7. Rilanciare d azero il comando da terminale: ```npm run watch```
8. Usare le classi di bootstrap 5 nelle views

## Installare node_modules per usare dipendenze NPM
1. Lanciare il comando da terminale: ```npm install```

## Creare la tabella con le rotte create in laravel
1. Lanciamo il comando da terminale: ```php artisan route:list```

## creare un model
Deve essere scritto in PascalCase e al singolare e deve essere la versione singolare del nome della tabella del DB in inglese
1. aprire il terminale e lanciare il comando: ```php artisan make:model Models/NomeModello```

## creare un controller
Deve essere scritto in PascalCase e al singolare
1. aprire il terminale e lanciare il comando: ```php artisan make:controller NomeController```

## Query per estrarre tutti i dati della tabella
1. nella public function del controller scrivere:
```
    public function index(){

        // 'select * from books'
        $all_books = Book::all();

        return view('welcome', compact('all_books') );
    }
```

## struttura per filtrare i record della tabella Where
1. nella public function del controller scrivere:
```
    public function index(){

        //filtraggio elementi
        $books_filtered = Book::where('title', 'Like', 'L%')->get();

        return view('welcome', compact('books_filtered') );
    }
```

## Active nel menu
1. Nelle voci del menu bisogna realizzare un ternario che legge il "name" delle diverse rotte associate alle voci del menu:
```
<header>
        <ul>
            <li>
                <a class="{{ Request::route()->getName() == 'all_books' ? 'active' : '' }}" href="{{route('all_books')}}">Home</a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}" href="{{route('about')}}">About</a>
            </li>
        </ul>
</header>
```

## Show di un solo record della tabella
1. creo un rotta in web.php dedicata:
```
Route::get('/prodotti/{key}', function($key){

    $pasta = config('pasta');

    if( is_numeric($key) && $key >= 0 && $key < count($pasta) ){
        $prodotto_singolo = $pasta[$key];
    } else {
        abort(404);
    }

    // dd($prodotto_singolo);

     return view('pages.pasta.show', compact('prodotto_singolo'));
})->name('show.pasta');
```
2. Per ogni elemento stampato dal ciclo foreach, creo un link che richiami la rotta della singola pagina e che passi il dato univoco che permetterà di recuperare il record:
```
<a href="{{ route('show.pasta', compact('key') ) }}">
```
3. creo la view che stamperà i dati del singolo record creato:
```
@extends('layouts.app')

@section('page-title', "la molisana - singolo prodotto")

@section('main-content')
    <h2>Prodotto: {{ $prodotto_singolo['titolo'] }}</h2>
@endsection
```

## creazione Migration
1. Lancio da terminale il comando: ```php artisan make:migration create_NomeTabellaPlurale_table```
2. Compilo il file generato nella cartella 📁database>migrations con le rispettive colonne di cui avrò bisogno al suo interno, facendo attenzione al tipo di dato che sceglierò di utilizzare in fase di riempimento
3. terminata la compilazione lancio il comando ```php artisan migrate``` per migrare le tabella dentro phpmyadmin

## Tornare indietro di un passaggio con le migration
1. Lancio il comando ```php artisan migrate:rollback```

## Ricarico da zero tutte le migration svuotandole
1. Lancio il comando da terminale ```php artisan migrate:refresh```

## Creare un seeder
1. lancio da terminale il comando: ```php artisan make:seeder HousesTableSeeder```
2. Compila la funzione interna "run" con ad esempio un array multidimensionale che ciclerò per creare diverse istanze in base a quanti dati fittizi ho creato all'interno dell'array multidimensionale

## Lanciare il seeder
1. Metodo 1: ```php artisan db:seed --class=HousesTableSeeder```
2. Metodo 2: Compilo il file DatabaseSeeder con il nome del file seeder che ho creato e compilato e poi lancio il comando da terminale: ```php artisan db:seed```
