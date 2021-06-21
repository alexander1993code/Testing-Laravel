<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tags" method="POST">
        @csrf 
        <input type="text" name="name">
        <input type="submit" value="Agregar">
    </form>
    <h4>Listado de etiquetas</h4>
    <table>
        @forelse($tags as $tag)
            <tr>
                <td> {{ $tag->name }} </td>
                <td>
                    <form action="tags/{{ $tag->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Delete">

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>
                    <p>No hay etiquetas</p>
                </td>
            </tr>

        @endforelse
    </table>
</body>
</html>