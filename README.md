# full-presto-project
Progetto finale del bootcamp di coding Hackademy 48 offerto da Aulab srl. 

## Deployment

### Installazione delle dipendenze

```bash
cp .env.example .env
composer install 
php artisan key:generate
npm install 
```

### Settaggio Database
Nel progetto è stato utilizzato un database locale con mysql. Si ricorda di impostare password e nome del database nel file .env.

Una volta creato il database:

```bash
php artisan migrate
php artisan db:seed --class=CategorySeeder
```

### Collegamento tra storage e public

```bash
php artisan storage:link
```

## Development

### Avvia l'applicazione

```bash
php artisan serve
```
e fare ctrl + click sul link fornito.

### Compiles and hot-reloads frontend and server 

```bash
npm run dev
```

### Queued jobs

```bash
php artisan queue:work
```

### API Google
Le API di Google sono disattivate, ma sono visibili nei job.

### Mail
Per il progetto, ci siamo appoggiati al servizio Mailtrap.

## Contributors

- [Francesca Mancini](https://github.com/framcesca)
- [Filippo Della Rupa](https://github.com/Kamina92)
- [Tommaso Simone](https://github.com/Tommaso-tms)
- [Vasile Dario Coman](https://github.com/darioc25)
- [Marco Cassarino](https://github.com/makiumjs)

## Laravel

### Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

### Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
