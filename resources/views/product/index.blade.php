@extends("layouts.app")
@section("content")
     <div class="col-lg-12 stretch-card mt-2">
              <div class="card bg-light">
                <div class="card-body">
                  <h4 class="card-title">Tabel daftar produk</h4>
                  <p class="card-description">
                    Disini merupakan table produk yang produknya sedang di promosikan -> <a class="text-primary fs-4 fw-bold" href="{{ route("index") }}" >WEBSITE</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th>
                            NO
                          </th>
                          <th>
                           Nama Produk
                          </th>
                          <th>
                            Foto
                          </th>
                          <th>
                            Harga
                          </th>
                          <th>
                            Deskripsi
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td>
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            Photoshop
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
