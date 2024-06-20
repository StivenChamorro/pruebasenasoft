<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
 
    <h1>Platos disponibles</h1>

    <table>

        @foreach ($dishes as $dish)
        {{-- creo una fila --}}
        <tr>
            <td>{{$dish->id}}</td>
            <td>{{$dish->name}}</td>
            <td>{{$dish->description}}</td>
            <td>{{$dish->price}}</td>
            <td>{{$dish->category_id}}</td>
            <td><a href="{{route('dish.show',$dish->id)}}">Mostrar más</a></td>
            <td><a href="{{route('dish.edit',$dish->id)}}">Editar</a></td>
            <td>
                <form action="{{route('dish.destroy',$dish->id)}}" method="POST">
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