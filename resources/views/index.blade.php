<html>
 
<body>
 
    <table style="border: 1px solid black;">
        <th>
        <td>ID</td>
        <td>NAMA</td>
        <td>UMUR</td>
        <td>EDIT</td>
        <td>HAPUS</td>
        </th>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->umur }}</td>
                <td><a href="{{ route('crud.edit', ['crud' => $item->id]) }}">Edit ID: {{ $item->id }}</a></td>
                <td>
 
                    <form action='{{ url("/crud/$item->id") }}' method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete ID: {{ $item->id }}</button>
                    </form>
 
                </td>
            </tr>
        @endforeach
 
    </table>
 
</body>
 
</html>