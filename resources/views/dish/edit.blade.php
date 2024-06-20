<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('book.update', $book)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Nombre:
        <br>
        <input name="name" type="text" value="{{old('name',$dish->name) }}">
        <br>
        </label>
        <br>
        <label>
        Descripcion:
        <br>
        <input name="description" type="text" value="{{old('description',$dish->description)}}">
        <br>
        </label>
        <label>
        Precio:
        <br>
        <input name="price" type="number" value="{{old('price',$dish->price)}}">
        <br>
        </label>
        <br>
       
        <button  type="submit">Actualizar</button>
       
    </form>
   
</body>
</html>