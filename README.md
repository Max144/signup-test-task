<h2> Project set up: </h2>

<ol>
    <li>
        composer install
    </li>
    <li>
        cp .env.example .env
    </li>
    <li>
        php artisan key:generate
    </li>
    <li>
        Add database, inforu, email service environment variables in .env
    </li>
    <li>
        php artisan migrate
    </li>
    <li>
        npm install
    </li>
    <li>
        npm run build
    </li>
    <li>
        php artisan:serve
    </li>
    <li>
        Open <a href="http://127.0.0.1:8000"> http://127.0.0.1:8000 </a>
    </li>
</ol>

