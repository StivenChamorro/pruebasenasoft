<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
 
    <h1>Ordenes</h1>

    <table>

        @foreach ($orders as $order)
        {{-- creo una fila --}}
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->category_id}}</td>
            <td>{{$order->dish_id}}</td>
            <td>{{$order->table_id}}</td>
            <td><a href="{{route('order.show',$order->id)}}">Mostrar más</a></td>
            <input name="check" type="checkbox" />marcar orden
            <td>
                <form action="{{route('order.destroy',$order->id)}}" method="POST">
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