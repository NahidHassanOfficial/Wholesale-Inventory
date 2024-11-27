<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}" />
    <link rel="stylesheet" href="{{ asset('css/loading-overlay.css') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @inertiaHead
    @routes
</head>

<body>
    <div id="loader" class="LoadingOverlay hidden">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    @inertia
</body>

</html>
