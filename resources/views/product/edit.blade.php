@extends("layouts.app")

@section("content")
  <div class="col-12 grid-margin stretch-card mt-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit data Produk</h4>
                  <p class="card-description">
                    Mengedit data produk yang sedang di promosikan
                  </p>
                  <form class="forms-sample" action="{{ route("produk.update",$produk->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="nm_produk">Nama Produk</label>
                      <input type="text" class="form-control" name="nm_produk" id="nm_produk" placeholder="Name" value="{{ $produk->nm_produk }}">
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga Produk</label>
                      <input type="number" class="form-control" name="harga" id="harga" placeholder="30000" value="{{ $produk->harga }}">
                    </div>
                    <div class="form-group">
                 <label for="deskripsi">Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4">{{ $produk->deskripsi }}</textarea>
                      </div>
                      <img class="border border-1" src="{{ asset("storage") }}/{{ $produk->foto }}" height="250px" width="250px" alt="">
                    <div class="form-group">
                      <label>Foto Produk</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="file" name="foto" class="form-control file-upload-info" accept="image" >
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Foto</button>
                        </span>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-rounded btn-fw">Submit</button>
                    <button class="btn btn-secondary btn-rounded btn-fw" type="reset">Reset</button>
                  </form>
                </div>
              </div>
            </div>
            @endsection
