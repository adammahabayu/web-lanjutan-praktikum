<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   <style type="text/css">
       body {
           font-family: Arial, sans-serif;
           margin: 0;
           padding: 0;
       }
   
       header, footer {
           background-color: #f8f9fa;
           padding: 20px;
           text-align: center;
       }
   
       nav ul {
           list-style: none;
           padding: 0;
       }
   
       nav ul li {
           display: inline;
           margin: 0 15px;
       }
   
       nav ul li a {
           text-decoration: none;
           color: #007bff;
       }
   </style>
</head>
<body>
   @include('partials.header')
   
   <main>
       @yield('content')
   </main>
   
   @include('partials.footer')
</body>
</html>
