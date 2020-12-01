@extends('layouts.app')
  @section('content')
    <h1>Tambah Data Barang</h1>
    <form action="{{route('barangs.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <div>
                <input type="text" class="form-control
                    @error('kode_barang') is-invalid @enderror" id="kode_barang" name="kode_barang" value="{{old('kode_barang')}}">
                    @error('kode_barang')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <div>
                <input type="text" class="form-control
                    @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" value="{{old('nama_barang')}}">
                @error('nama_barang')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <div>
                <input type="number" class="form-control
                @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{old('stok')}}">
                @error('stok')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  @endsection
</html>