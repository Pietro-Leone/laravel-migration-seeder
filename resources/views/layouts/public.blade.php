<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
    <title>@yield('title')</title>

    @vite(["resources/js/app.js", "resources/scss/app.scss"])
</head>
<body>
    <main>
        @yield("content")
    </main>
</body>
</html>
