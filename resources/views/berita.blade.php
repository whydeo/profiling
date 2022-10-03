@extends('layouts.backend')

@section('title', 'berita')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@section('content')
<div class="card">
    <div class="card-header">
        <h4>berita</h4>
    </div>
  <div class="card-body">
    <div class="panel-header panel-header-sm">
        </div>
        
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">KATEGORI BERITA</h4>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus"></i> 
  tambah berita
</button>

</div>

<div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        JUDUL BERITA
                      </th>
                      <th class="text-center">
                        PENULIS
                      </th>
                      <th class="text-center">
                       KATEGORI
                      </th>
                       <th class="text-center">
                        TANGGAL
                      </th>
                       <th class="text-center">
                        AKSI
                      </th>
                    </thead>
                    <tbody>
                    @foreach($data as $d)
                    <tr>
                      <td>{{$d->judul}}</td>
                      <td>{{$d->penulis}}</td>
                      <td>{{$d->kategori->nama}}</td>
                      <td>{{$d->tanggal}}</td>
                      <td>
                        <a href="{{route('berita.delete',$d->id)}}" class="btn btn-warning btn-sm" onclick="return confirm('Hapus data..??')" >delet</a>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#largeModal-{{$d->id}}">show</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2-{{$d->id}}">edit 
                        
                        </button>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('berita.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="modal-body">
              <div class="form-group">
                <label for="judul">JUDUL BERITA</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="masukkan judul">
              </div>
              <div class="form-group">
                <label for="penulis">PENULIS BERITA</label>
                <input type="text" class="form-control" name="penulis" id="penulis" placeholder="masukkan judul">
              </div>
              
              <div class="form-group">
                <label>MASUKAN KATEGORI</label>
                <select name="kategori" class="form-control">
                  @foreach($datak as $d)
                  <option value="{{$d->id}}">{{$d->nama}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>MASUKAN JENIS BERITA</label>
                <select name="jenis" class="form-control">
                  @foreach($jns as $jes)
                  <option value="{{$jes->id_jns}}">{{$jes->nama}}</option>
                  @endforeach
                </select>
              </div>
                <div class="form-group">
		<label>MASUKAN ISI BERITA</label>
		<textarea class="form-control" name="isi" required=""></textarea>
	</div>
       <div class="form-group">
		<label>MASUKAN FOTO</label>
		<input type="file" name="foto" class="form-control" required="">
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">simpan</button>
      </div>
  </div>
      </form>
  </div>
</div>
</div>




  {{-- modal buatt detaill --}}
 @foreach ($data as $d)
 <div id="largeModal-{{$d->id}}" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Detail Berita</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
         
            <div class="modal-body">
              <div class="card mb-3" style="max-width: 780px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img style="width: 200px;height:200px" src="{{asset('foto/'.$d->foto)}}">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$d->judul}}</h5>
                      <p class="card-text">{{$d->isi}}</p>
                      <p class="card-text"><small class="text-muted">ditulis oleh : {{$d->penulis}}</small></p>
                      <p class="card-text"><small class="text-muted">{{$d->tanggal}}</small></p>
                    </div>
                  </div>
                </div>
              </div>
             {{-- <div class="card">
              <div class="card-body">
               <tr>
                 <td>
                  <p><img style="width: 200px;height:200px" src="{{asset('foto/'.$d->foto)}}"></p>
                  <b> {{$d->judul}}</b>
                  <br>
                  <b> {{$d->tanggal}}</b>
                </td>
           
               </tr>
              </div>
              </div> --}}
             </div>
        

          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             
          </div>
      </div>
  </div>
</div>
 @endforeach



 {{-- modal buat edit --}}
@foreach ($data as $d)
  
<div class="modal fade" id="staticBackdrop2-{{$d->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Berita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('berita.edit',$d->id)}}" method="GET" enctype="multipart/form-data">
              @csrf
            <div class="modal-body">
              <div class="form-group">
                <label for="judul">JUDUL BERITA</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="masukkan judul" value="{{$d->judul}}">
              </div>
              <div class="form-group">
                <label for="penulis">PENULIS BERITA</label>
                <input type="text" class="form-control" name="penulis" id="penulis" placeholder="masukkan penulis" value="{{$d->penulis}}">
              </div>
              <div class="form-group">
                <label>MASUKAN KATEGORI</label>
                <select name="kategori" class="form-control">
                  <option value="{{$d->kategori->id}}">{{$d->kategori->nama}}</option>
                  @foreach($datak as $da)
                  <option value="{{$da->id}}">{{$da->nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>MASUKAN KATEGORI</label>
                <select name="status" class="form-control">
                  <option value="{{$d->status}}">{{$d->status}}</option>
                <option value="aktif">aktif</option>
                <option value="nonaktif">nonaktif</option>
                </select>
              </div>
              
              
          <div class="form-group">
            <label>MASUKAN ISI BERITA</label>
            <textarea class="form-control"  name="isi" required=""> {{$d->isi}} </textarea>
          </div>
                        <div class="form-group">
            <label>MASUKAN FOTO</label>
            <input type="file" name="foto" class="form-control" >
            <img style="width: 200px;height:200px" src="{{asset('foto/'.$d->foto)}}">

          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">simpan</button>
      </div>
    </div>
      </form>
  </div>
</div>
</div>

@endforeach

       
      </div>
</div>
@endsection