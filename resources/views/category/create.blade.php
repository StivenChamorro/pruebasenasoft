<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
   
<h1>Crea una categoria</h1>

<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Color:
    <br>
    <input type="text" name="color">
</label>
<br>
<br>
<button type="submit">Crear</button>
</form>
</body>
</html>