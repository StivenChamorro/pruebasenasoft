<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('category.update', $author)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Capacidad:
        <br>
        <input name="capacity" type="number" value="{{old('capacity',$table->capacity) }}">
        <br>
        </label>
        <br>
       
        <button  type="submit">Actualizar</button>
       
    </form>
   
</body>
</html>