@extends('layouts.app')
  @section('content')
    <div class="py-4 d-flex justify-content-end align-items-center">
      <h2 class="mr-auto">Data Barang</h2>
      <a href="{{route('barangs.create')}}" class="btn btn-primary">
        Tambah Barang
      </a>
    </div>
    <!-- baris program untuk menampilkan pesan berhasil-->
    @if (session()->has('pesan'))
      <div class = "alert alert-success">
        {{session()->get('pesan')}}
      </div>
    @endif
      
    <!-- silakan cari pada template table Striped rows (atau boleh yang lain)-->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($barangs as $barang)
                <tr>
                  <th>{{$loop->iteration}}</th>
                  <td><a href="{{route('barangs.detail',['barang'=>$barang->id])}}">
                    {{$barang->kode_barang}}</a></td>
                  <td>{{$barang->nama_barang}}</td>
                  <td>{{$barang->stok}}</td>
                </tr>
                @empty
                    <td colspan="4" class="text-center"> Data Barang Tidak Ada...</td>
            @endforelse
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  @endsection
</html>