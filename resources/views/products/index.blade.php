<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-4">
      <h1>Data Produk</h1>

      <!-- Tombol Tambah Produk -->
      <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

      <!-- Tabel Produk -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($products as $product)
          <tr>
            <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="img-thumbnail" width="100"></td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>
              <button type="button" class="btn btn-success">Edit</button>
              <button type="button" class="btn btn-warning">Detail</button>
              <button type="button" class="btn btn-danger">Hapus</button>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="text-center">Data produk tidak tersedia.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>