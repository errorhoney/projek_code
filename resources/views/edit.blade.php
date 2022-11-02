<html>
    <body>

        <form action='{{ route('crud.update', ['crud' => $item->id]) }}' method="POST">
        
            @csrf
            @method('PUT')
            <input type="text" name="form_nama" id="nama" placeholder="Nama" value="{{$item->nama}}">
            <input type="text" name="form_umur" id="umur" placeholder="Umur" value="{{$item->umur}}">

            <button type="submit">Simpan</button>
        </form>
    </body>
</html>