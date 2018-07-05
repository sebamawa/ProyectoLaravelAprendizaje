<!DOCTYPE>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Home</title>
</head>
<body>
    <h3>Vista home personalizada. Se retorna desde controlador TaskController.home</h3>

    @foreach($nombres as $nombre)
        <p>{{ $nombre }}</p>
    @endforeach
</body>
</html>