@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

@section('content')
    <div class="col-8">
        <input type="text" name="merk" class="form-control" placeholder="masukan nama merek">
        
            <div class="mb-3">
              <label for="exampleInputMerkBarang" class="form-label">Merk Barang</label>
              <input type="text" class="form-control" id="merk" aria-describedby="emailHelp" name="merk">
             
            
            <button type="submit" class="btn btn-primary">Submit</button>
          <form action="{{ route('merk.store') }}" method="POST" enctype="multipart/form-data">
    
    </div>
@endsection()
