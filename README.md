<!-- # Passi da fare per poter utilizzare il template di Laravel

0. Creo la repository a partire dal template e mi clono la repository appena creata

1. Copio il file .env.example e lo rinomino in .env

2. Apro il terminale ed eseguo il comando composer install

3. Sempre nel terminale, al termine del comando composer install, eseguo il comando php artisan key:generate

4. Sempre nel terminale, al termine dell'esecuzione di php artisan key:generate, eseguiamo il comando npm install (oppure, npm i)

5. Sempre nel terminale, al termine di npm install, eseguire il comando npm run build
- Al posto di npm run build, potreste eseguire npm run dev e lasciarlo attivo

6. Aprire un altro terminale ed eseguire il comando php artisan serve -->

Ciao ragazzi,
oggi create un nuovo progetto Laravel 10 per gestire un archivio di fumetti.

Milestone 1
Tramite gli appositi comandi artisan create un model, una migration e un resource controller.

Milestone 2
Iniziate a definire le prime operazioni CRUD con le relative view:
- index()
- show()
- create()
- store()

Bonus:
Creare il seeder per la tabella comics utilizzando il file in allegato.

<!-- ------------------------------------------------------------------------------- -->

1. Inseriamo i parametri corretti nel file .env per connetterci al database di interesse

2. Creiamo la migration relativa alla risorsa. Il nome della migration sarà: 
create_NOME_RISORSA_IN_INGLESE_IN_SNAKE_CASE_AL_PLURALE_table 
(ad es., se la risorsa è libro, il nome della migration sarà create_books_table)

3. Creiamo il model relativo alla risorsa. Il nome del model sarà: 
NomeRisorsaInIngleseInPascalCaseAlSingolare 
(ad es., se la risorsa è libro, il nome del model sarà Book)

4. Creiamo il seeder relativo alla risorsa. Il nome del seeder sarà:
- NomeDellaTabellaDellaRisorsaInPascalCaseTableSeeder
- Oppure, NomeDelModelSeeder 
(quindi, ad es., se la mia risorsa è libro, il nome del seeder sarà o BooksTableSeeder, oppure BookSeeder)

5. Creiamo il controller relativo alla risorsa. Il nome del controller sarà: 
NomeDelModelController (ad es., se la risorsa è libro, il nome del controller sarà BookController).
 Sarebbe ancora meglio creare il controller aggiungendo al comando il flag --resource, 
 in modo da pre-popolare il controller con la definizione di tutte e 7 le funzioni che 
 ci serviranno per le CRUD (cioè, il comando da eseguire sarà: php artisan make:controller NomeController --resource)

6. Definiamo le rotte relative alle funzioni del controller (quindi, 7 rotte). 
Sarebbe ancora meglio definirle tramite la chiamata al metodo resource di Route 
(cioè, se voglio definire le rotte relative alla risorsa libro, scriverò: Route::resource('books', BookController::class))

7. Creiamo le view relative alla risorsa. Nello specifico, dobbiamo creare 4 view:
- Una per l'index
- Una per lo show
- Una per il create
- Una per l'edit Tutte queste 4 view, saranno messe in una cartella dentro views, 
nominata come la risorsa al plurale in kebab case 
(ad es., se la risorsa è mio libro, il nome della cartella sarà my-books). 
I nomi delle 4 view, solitamente, corrisponderanno al nome della funzione che le restituisce (quindi, index.blade.php per index, show.blade.php per show, create.blade.php per create e edit.blade.php per edit)

<!-- ------------------------------------------------------------------------------- -->

Ciao ragazzi,
oggi lavorate sulla stessa repo di ieri e completate le operazioni CRUD.

Bonus:
tramite javascript, quando l'utente clicca sul pulsante "delete", chiedere conferma della cancellazione, prima di eliminare l'elemento.