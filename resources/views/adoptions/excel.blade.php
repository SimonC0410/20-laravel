<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Adoptions</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID Adoption</th>
                <th>Full Name User</th>
                <th>Name Pet</th>
                <th>Photo User</th>
                <th>Photo Pet</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $adopt->id }}</td>
                <td>{{ $adopt->user->fullname }}</td>
                <td>{{ $adopt->pet->name }}</td>
                <td>
                    <img src="{{ public_path().'/images/'.$adopt->user->photo }}" width="50px">
                </td>
                <td>
                    <img src="{{ public_path().'/images/'.$adopt->pet->image }}" width="50px">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>