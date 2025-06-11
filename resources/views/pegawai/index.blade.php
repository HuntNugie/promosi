@extends("layouts.app")

@push("skrip")
      <script>
       function tanya(){
         const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger"
  },
  buttonsStyling: false
});
swalWithBootstrapButtons.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel!",
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {

  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire({
      title: "Cancelled",
      text: "Your imaginary file is safe :)",
      icon: "error"
    });
  }
});
       }
    </script>
@endpush
@section("content")
 <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Pegawai</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Foto</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pegawai as $p)

                        <tr>
                            <td>{{ $p->name }}</td>
                          <td class="table-avatar"><img src="{{ asset("storage")."/$p->foto" }}" alt="Foto"></td>
                          <td>{{ $p->role }}</td>
                          <td><label class="badge badge-{{ $p->status !== "active" ? "warning" : "success" }}">{{ $p->status }}</label></td>
                          <td>

                          <div class="d-flex gap-2">
                            <div class="ms-2">
                              <button class="btn btn-info btn-sm">Detail</button>

                            </div>
                            <div class="ms-2">
                            <button class="btn btn-warning btn-sm">Edit gaji pegawai</button>

                            </div>
                            <div class="ms-2">
                                 <form action="" method="post">

                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                            </div>

                            @if ($p->status !== "active")
                            <div class="ms-2">
                                <button class="btn btn-primary">Aktifkan status</button>
                            </div>
                            @else
                                <div class="ms-2">
                                <button class="btn btn-danger">Non active status</button>
                            </div>
                            @endif
                          </div>
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
