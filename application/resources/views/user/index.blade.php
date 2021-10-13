<h1>hello!</h1>

<table border="1">
    <tr>
        <th>名前</th>
        <th>Eメール</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach
</table>