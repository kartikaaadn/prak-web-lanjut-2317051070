<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjIS5WRaRU9OFepRpok6YCtnYmDr5pNlYt2BrjXh0JHmjY6hW+ALEwIH" 
          crossorigin="anonymous">
</head>
<body>
    
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-VpycrYf0tY31Hb6BNNxmXc59fDVZLESAAA5SNDzOxhy9GkcIds1klEN7J6jIEhZ" 
            crossorigin="anonymous"></script>
</body>
</html>
