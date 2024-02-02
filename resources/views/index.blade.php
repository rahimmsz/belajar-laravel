<table border="1">
    <tr>
        <td>Nama </td>
        <td>Email</td>
    </tr>
    @foreach ($data as $value => $key)
        <tr>
            <td>{{ $key->name }}</td>
            <td>{{ $key->email }}</td>
            <td></td>
        </tr>
    @endforeach
</table>
