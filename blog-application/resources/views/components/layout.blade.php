<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My web application</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main>
        @session('success')
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endsession

        {{ $slot }}
    </main>
</body>

</html>
