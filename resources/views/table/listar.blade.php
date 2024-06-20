<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
 
    <h1>Mesas disponibles</h1>

    <table>

        @foreach ($tables as $table)
        {{-- creo una fila --}}
        <tr>
            <td>{{$table->id}}</td>
            <td>{{$table->capacity}}</td>
            <td><a href="{{route('table.show',$table->id)}}">Mostrar más</a></td>
            <td><a href="{{route('table.edit',$table->id)}}">Editar</a></td>
            <td>
                <form action="{{route('table.destroy',$table->id)}}" method="POST">
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