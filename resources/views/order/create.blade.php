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

<form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        categoria:
        <br>
        <select name="category_id" required>
            <option value="" disabled selected>Seleccione una categoria</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->color}}</option>
            @endforeach
        </select>
        
    </label>
    <br>
    <label>
        plato:
        <br>
        <select name="dish_id" required>
            <option value="" disabled selected>Seleccione un plato</option>
            @foreach($dishes as $dish)
                <option value="{{ $dish->id }}">{{ $dish->name}}</option>
            @endforeach
        </select>
    </label>
    <br>
    <label>
        Mesa:
        <br>
        <select name="table_id" required>
            <option value="" disabled selected>Seleccione una mesa</option>
            @foreach($tables as $table)
                <option value="{{ $table->id }}">{{ $table->capacity}}</option>
            @endforeach
        </select>
    </label>
    <br>
    <button type="submit">Crear</button>
</form>

</body>
</html>
