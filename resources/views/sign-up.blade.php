<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>sts</title>
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
    </head>
    <body>
        <div id="app">
            <div id="v-app" class="v-application">
                <signupform></signupform>
            </div>
        </div>

    </body>
</html>
