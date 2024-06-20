<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
 
    <h1>Categorias disponibles</h1>

    <table>

        @foreach ($categories as $category)
        {{-- creo una fila --}}
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->color}}</td>
            <td><a href="{{route('category.show',$category->id)}}">Mostrar más</a></td>
            <td><a href="{{route('category.edit',$category->id)}}">Editar</a></td>
            <td>
                <form action="{{route('category.destroy',$category->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>