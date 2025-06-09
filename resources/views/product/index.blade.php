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
                        @foreach ($produks as $pro)

                        <tr class="table-info">
                            <td>
                            {{ $loop->iteration }}
                          </td>
                          <td>
                              {{ $pro->nm_produk }}
                          </td>
                          <td>
                           <a href="{{ asset("storage") }}/{{ $pro->foto }}" >
                         <img src="{{ asset("storage") }}/{{ $pro->foto }}"  alt=""></a>
                          </td>
                          <td>
                            {{ Number::currency($pro->harga,"IDR") }}
                          </td>
                          <td>
                            {{ $pro->deskripsi }}
                          </td>
                          <td>
                              <a href="{{ route("produk.edit",$pro->id) }}" class="btn btn-warning" >Edit</a>
                              <form action="{{ route("produk.destroy",$pro->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                              <button class="btn btn-danger" type="submit">delete</button>

                              </form>
                            </td>
                        </tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
