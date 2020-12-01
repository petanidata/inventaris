@extends('layouts.app')
  @section('content')
    <div class="py-4 d-flex justify-content-end align-items-center">
        <h2 class="mr-auto">Detail {{$barang->nama_barang}}</h2>
        <a href="{{route('barangs.edit', ['barang'=>$barang->id])}}" class="btn btn-primary">
          Edit Barang
        </a>

        <form action="{{route('barangs.delete', ['barang'=>$barang->id])}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
    </div>
    
    <ul>
        <li>Kode Barang : {{$barang->kode_barang}}</li>
        <li>Nama Barang : {{$barang->nama_barang}}</li>
        <li>Stok Barang : {{$barang->stok}}</li>
        <li>Diinput pada : {{$barang->created_at}}</li>
        <li>Diupdate pada : {{$barang->update_at}}</li>
    </ul>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  @endsection
</html>