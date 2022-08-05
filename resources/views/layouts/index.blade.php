<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
                <!-- Boxicons CDN Link -->
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>

        <title>{{ $title }}</title>
      </head>
   
</head>
<body>
    @include('properti.header')
    <main>
        <div class="container">
            @yield('container')
        </div>
    </main>

    @include('properti.footer')
</body>
</html>