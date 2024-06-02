### README

# Todo List con Versionamento del Database

Questo progetto è un'applicazione To-Do List basata su PHP con funzionalità di versionamento del database utilizzando Phinx. Questa guida fornisce una panoramica delle modifiche apportate, come utilizzare il sistema di versionamento e i comandi utili per gestire le migrazioni del database con Phinx.

## Panoramica

### Funzionalità
- Aggiungere, aggiornare ed eliminare task.
- Tracciare e gestire le modifiche allo schema del database utilizzando le migrazioni di Phinx.

### Modifiche
- Implementato il versionamento del database con Phinx.
- Creata una migrazione per aggiungere una colonna `description` alla tabella `task_table`.
- Modificata la colonna `task_name` per aumentare la lunghezza da 300 a 500 caratteri.

## Prerequisiti
- PHP installato sul tuo sistema.
- Composer installato sul tuo sistema.
- MySQL installato e in esecuzione.

## Installazione

1. **Clona il Repository**:
   ```bash
   git clone https://github.com/TUO_NOME_UTENTE_GITHUB/Todo-list-with-php.git
   cd Todo-list-with-php
   ```

2. **Installa le Dipendenze**:
   ```bash
   composer install
   ```

3. **Configura il Database**:
   - Crea un database chiamato `todo`.
   - Importa lo schema del database iniziale dal file `todo.sql`.

4. **Configura Phinx**:
   - Assicurati che `phinx.php` sia configurato con i dettagli del tuo database.

## Utilizzo

### Esecuzione dell'Applicazione

1. **Avvia il Server Web Integrato di PHP**:
   ```bash
   php -S localhost:8000
   ```
   - Apri il browser e vai a `http://localhost:8000/index.php`.

### Comandi Utili di Phinx

1. **Creare una Nuova Migrazione**:
   ```bash
   vendor/bin/phinx create NomeMigrazione
   ```
   - Crea un nuovo file di migrazione nella directory configurata.

2. **Eseguire le Migrazioni**:
   ```bash
   vendor/bin/phinx migrate
   ```
   - Applica tutte le migrazioni non ancora eseguite.

3. **Rollback delle Migrazioni**:
   ```bash
   vendor/bin/phinx rollback
   ```
   - Annulla l'ultima migrazione eseguita.

4. **Verificare lo Stato delle Migrazioni**:
   ```bash
   vendor/bin/phinx status
   ```
   - Mostra lo stato attuale delle migrazioni.

5. **Creare una Classe Seed**:
   ```bash
   vendor/bin/phinx seed:create NomeSeeder
   ```
   - Crea un nuovo file di seed per popolare il database con dati iniziali.

6. **Eseguire i Seeder**:
   ```bash
   vendor/bin/phinx seed:run
   ```
   - Esegue tutti i seeder disponibili o un seeder specifico con l'opzione `-s`.

### Modifiche Applicate

- **20240602003630_add_description_to_task_table.php**: Questa migrazione aggiunge una nuova colonna `description` di tipo `text` alla tabella `task_table`.
- **20240602003706_modify_task_name_in_task_table.php**: Questa migrazione modifica la colonna `task_name` nella tabella `task_table`, aumentando la lunghezza del campo da 300 a 500 caratteri.

## Conclusione

Con queste modifiche, ho implementato un sistema di versionamento del database per il progetto To-Do List. Questo sistema consente di tracciare le modifiche allo schema del database e di gestire facilmente le migrazioni.
