{{-- resources/views/layouts/guest.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts (optional) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body { font-family: "Figtree", sans-serif; }
        .auth-wrapper{
            min-height: 100vh;
            background: #f8f9fa; /* light gray */
        }
        .auth-card{
            border: 0;
            border-radius: .5rem;
        }
    </style>
</head>

<body class="bg-light">
    <div class="auth-wrapper d-flex align-items-center justify-content-center py-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-sm-10 col-md-7 col-lg-5">

                    <div class="text-center mb-4">
                        <a href="/" class="d-inline-block">
                            <x-application-logo class="d-block mx-auto" style="width:80px;height:80px;" />
                        </a>
                    </div>

                    <div class="card shadow-sm auth-card">
                        <div class="card-body p-4">
                            {{ $slot }}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
