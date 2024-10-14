<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css&quot; rel="stylesheet">
    <title>Tambah Produk</title>
  </head>
  <body>
    <div class="container mt-4">
      <h1>Tambah Produk</h1>

      <!-- Form untuk menambah produk -->
      <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Judul Produk</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Deskripsi Produk</label>
          <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Harga Produk</label>
          <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
          <label for="stock" class="form-label">Stok Produk</label>
          <input type="number" class="form-control" id="stock" name="stock" required>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Gambar Produk</label>
          <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <button type="submit" class="btn btn-primary m-3">SIMPAN</button>
        <button type="reset" class="btn btn-warning m-3">RESET</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script&gt;
  </body>
</html>
