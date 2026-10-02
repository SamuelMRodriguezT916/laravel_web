<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        //cada que esl usuario entre a guardar, lo va a enviar a la tura book. store para crear un registor
        <form action="{{route('books.store')}}" method="post">
            @csrf
            <input type="text" name="nombre" id="">
            <input type="date" name="fecha" id="">
            <input type="number" name="precio" id="">
            
            <button type="submit">Guardar</button>
        </form>
    </div>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Precio</th>
        </thead>
        <tbody>
            

            @foreach ($books as $book)
            <tr>
                <td>{{$book->name}}</td>
                <td>{{$book->date}}</td>
                <td>{{$book->price}}</td>
            </tr>
            <tr></tr>
            <tr></tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>