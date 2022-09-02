@extends('layouts.backend')

@section('title', 'kategori')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>kategori</h4>
    </div>
    <div class="card-body">
        PAGE KATEGORI 
        
        @if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>
@endif
<br>
        <!-- modal -->



        <div class="panel-header panel-header-sm">
        </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">KATEGORI BERITA</h4>
                <button class="btn btn-primary" id="btn-Tambah-meja" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fas fa-plus"></i> Tambah Kategori</button>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nama Kategori
                      </th>
                      <th class="text-center">
                        keterangan
                      </th>
                      <th class="text-center">
                        Status
                      </th>
                      <th class="text-center">
                        Tanggal
                      </th>
                      <th class="text-center">
                        Status
                      </th>
                    </thead>
                    <tbody>
                   
                    @foreach($data as $key=>$d)
	<tr>
		<td >{{$d->nama}}</td>
		<td class="text-center">{{$d->keterangan}}</td>
		<td class="text-center">{{$d->status}}</td>
		<td class="text-center">{{$d->tanggal}}</td>
		<td>
					<a href="{{route('delete',$d->id)}}" onclick="return confirm('Hapus Data.?')" class="btn btn-warning btn-sm">HAPUS</a>
          <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter2-{{$d->id}}"> </i> edit</button>
   
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
<!-- modal insert -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="title-modal"></h5>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           
            
        <form action="{{route('store')}}" method="POST">
              @csrf
            <div class="modal-body">
              <div class="form-group">
                <label for="kategori">Nama Kategori</label>
                <input type="text" class="form-control" name="nama" id="kategori" placeholder="masukkan nama kategori">
              </div>
              <div class="form-group">
                <label for="keterangan">keterangan</label>
                <textarea rows="4", cols="54" id="keterangan" name="keterangan" style="resize:none, "></textarea>
              </div>
              
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary tutup-modal" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
@foreach ($data as $key=>$d)
    <!-- modal edit -->
    <div class="modal fade" id="exampleModalCenter2-{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="title-modal"></h5>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           
            
        <form action="{{route('edit',$d->id)}}" method="GET">
              @csrf
            <div class="modal-body">
              <div class="form-group">
                <label for="kategori">Nama Kategori</label>
                <input type="text" class="form-control" name="nama" id="kategori" placeholder="masukkan nama kategori" value="{{$d->nama}}">
              </div>
              <div class="form-group">
                <label for="keterangan">keterangan</label>
                <textarea rows="4", cols="54" id="keterangan" name="keterangan" style="resize:none, " >{{$d->keterangan}}</textarea>
              </div>
              <div class="form-group">
                <label for="status">status</label>
                <input type="text" class="form-control" name="status" id="status" placeholder="masukkan status" value="{{$d->status}}">
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary tutup-modal" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">update</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
@endforeach
</div>  
</div>  
</div>  
 </div>
</div>
@endsection