<!DOCTYPE html>
<html>
<head>
    <title>PDF Milay</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>Bonjour Kaloina mety aminao ve ohatra pdf otranzao?</p>
  
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nom</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->idpersonne }}</td>
                <td>{{ $user->nom }}</td>
            </tr>  
        @endforeach
    </table>
</body>
</html>
                        