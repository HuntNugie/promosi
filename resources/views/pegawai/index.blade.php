@extends("layouts.app")

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
                          <th>Konfirmasi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Ahmad Santoso</td>
                          <td class="table-avatar"><img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Foto"></td>
                          <td>Admin</td>
                          <td><label class="badge badge-success">Aktif</label></td>
                          <td><label class="badge badge-primary">Terkonfirmasi</label></td>
                          <td>
                            <button class="btn btn-info btn-sm">Detail</button>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>Indah Lestari</td>
                          <td class="table-avatar"><img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Foto"></td>
                          <td>Staff</td>
                          <td><label class="badge badge-warning">Nonaktif</label></td>
                          <td><label class="badge badge-secondary">Belum</label></td>
                          <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>Budi Hartono</td>
                          <td class="table-avatar"><img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Foto"></td>
                          <td>Manager</td>
                          <td><label class="badge badge-success">Aktif</label></td>
                          <td><label class="badge badge-primary">Terkonfirmasi</label></td>
                          <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
