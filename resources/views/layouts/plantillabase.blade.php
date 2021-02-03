<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('css')

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style type="text/css">
        
        body {
            background-color: #000;
        }

        h1 {
            background: #016E8A;
            font-family:courier,arial,helvética;
        }

        h2 {
            color: #95CFDE;
        }

        h4 {
            color: #016E8A;
        }

        .btn_agregar {
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: #ffffff;
            background-color: #016E8A;
            border-radius: 6px;
            border: 2px solid #016E8A;
            margin-top: 100px;
        }

        label {
            color: #ffffff;
        }
        
    </style>

  </head>
  
  <body>

    <div class="container">
        @yield('contenido')
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    @yield('js')
  </body>
</html>