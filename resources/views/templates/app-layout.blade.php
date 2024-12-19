<!-- resources/views/templates/app-layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{isset($title) ? $title : "Page en cours"}}</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <!-- par défaut on charge ces css/js -->
    <!-- on peut étendre cette section, voir la vue test-vite.blade.php -->

        @vite(["resources/css/normalize.css", 'resources/css/app.css', 'resources/js/app.js'])
        @yield('style')

</head>
<body>
<header>@include('components.menu')</header>

<main>
    @yield('content')
</main>

@include('components.footer')


</body>
</html>
