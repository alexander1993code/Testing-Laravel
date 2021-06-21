<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Listado de etiquetas</h4>
    <table>
        @forelse($tags as $tag)
            <tr>
                <td> {{ $tag->name }} </td>
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