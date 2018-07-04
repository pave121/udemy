<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
   @include('inc.navbar')
    <div class="container">
       @include('inc.messages')
        @yield('content')
        
    </div>
    <footer id="footer">
        <p class="text-center">Copyright &copy; 2018 TodoList</p>
    </footer>

</body>
</html>