<html>
    <body>

        <form action="{{route('crud.store')}}" method="POST">
            @csrf

            <input type="text" name="form_nama" id="nama" placeholder="Nama">
            <input type="text" name="form_umur" id="umur" placeholder="Umur">

            <button type="submit">Simpan</button>
        </form>
    </body>
</html>