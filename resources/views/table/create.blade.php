<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
   
<h1>Crea una mesa</h1>

<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Capacidad:
    <br>
    <input type="text" name="capacity">
</label>
<br>
<br>
<button type="submit">Crear</button>
</form>
</body>
</html>