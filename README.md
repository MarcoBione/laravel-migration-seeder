<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Preparazione file

```php

#apriamo la cartella parent
cd your parent_folder_path

#creiamo il progetto
composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

#entriamo nella cartella del progetto da terminale di vscode
cd your_project_name

#apriamo la cartella in vscode
code . -r 

#installiamo il pacchetto di inizializzazione ui con bootstrap
composer require pacificdev/laravel_9_preset

#installiamo il pacchetto 
php artisan preset:ui bootstrap

#lanciamo npm install
npm install

#installiamo fonawesome se serve
npm install --save @fortawesome/fontawesome-free

#modifichiamo vite.config.js per aggiungere alias fontawesome
...
 '~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),
...
#creiamo le cartelle e i file necessari
#dentro resources:
fonts
img

#dentro resources>views:
layouts > layout.blade.php
partials > header.blade.php e footer.blade.php

#dentro resources>scss:
partials
(inseriamo dentro partials almeno un file _varaibles.scss) 

#copiamo la cartella dei webfont di fontawesome dentro fonts

#editiamo il file app.scss
@use './partials/variables' as *;

$fa-font-path: "../fonts/webfonts" !default;

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

@import "~bootstrap/scss/bootstrap";

# verifica funzionamento:
npm run dev
php artisan serve

#installiamo per la modifica dei campi nel DB il pacchetto doctrine/dbal:
- composer require dectrine/dbal


```

#publicare su Github

```php
#create project on github and follow instruction
#add composer.lock and package.json to .gitignore

#commands:
git init
git add .
git commit -m "scaffolding"
git branch -M main
git remote add origin your_git_url
git push -u origin main

```

## creo migration e seeder

- creo database da phpmyadmin
- aggiungo configurazione a file .env

## creata migration

```php
#comando:
- php artisan make:migration create_nometabella_table

#dentro il file migration:
- definisco una funzione up()

- definisco una funzione down()

#per lanciare la migration:
- php artisan migration

#controllo su phpmyadmin

```

## creo un model per popolare la tabella
```php
- php artisan make:model Nometabellasingolare
```
## aggiungo un seeder
```php
- php artisan make:seeder NometabellaTableSeeder 'in PacalCase'

#apro il seeder e all'interno trovo la funzione run()

#controllo phpmyadmin per verificare che i dati sono stati inseriti correttamente

#creo successivamente il controller e correggo il file route per la rotta.. dopo stampo la pagina con le view

```



### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
