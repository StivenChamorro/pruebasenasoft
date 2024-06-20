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
        Nombre:
        <br>
        <input name="name" type="text" value="{{old('name',$category->name) }}">
        <br>
        </label>
        <br>
        <label>
        Color:
        <br>
        <input name="color" type="text" value="{{old('color',$category->color)}}">
        <br>
        </label>
        <br>
       
        <button  type="submit">Actualizar</button>
       
    </form>
   
</body>
</html>