<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
   
<h1>Crear orden</h1>

<form action="{{ route('dish.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name" required minlength="5" maxlength="45">
    </label>
    <br>
    <label>
        Descripcion:
        <br>
        <input type="text" name="descrpition" required>
    </label>
    <br>
    <label>
        Precio:
        <br>
        <input type="number" name="price" required>
    </label>
    <br>
    <label>
        categoria:
        <br>
        <select name="category_id" required>
            <option value="" disabled selected>Seleccione una categotia</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->color}}</option>
            @endforeach
        </select>
    </label>
    <br>
    <button type="submit">Crear</button>
</form>

</body>
</html>
