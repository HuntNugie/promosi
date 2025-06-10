@extends("layouts.app")
@push("style")
    <style>
          .profile-container {
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
    }

    .profile-sidebar {
      text-align: center;
      border-right: 1px solid #e0e0e0;
    }

    .profile-sidebar img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #ccc;
    }

    .profile-sidebar h4 {
      margin-top: 15px;
      color: #343a40;
    }

    .info-label {
      font-weight: 600;
      color: #495057;
    }

    .info-value {
      color: #6c757d;
    }

    .badge-status {
      padding: 5px 12px;
      font-size: 13px;
      border-radius: 20px;
    }

    .btn-group-profile {
      margin-top: 20px;
    }

    .info-group {
      margin-bottom: 15px;
    }
    </style>
@endpush
@section("content")
    <div class="content-wrapper pt-5">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="row profile-container">
                <!-- Sidebar kiri -->
                <div class="col-md-4 profile-sidebar">
                  <img src="{{ asset("storage") }}/{{ auth()->user()->foto }}" alt="User Photo">
                  <h4>{{ auth()->user()->name }}</h4>
                  <span class="badge badge-success badge-status">Aktif</span>
                  <div class="btn-group-profile">
                    <a href="{{ route("myProfile.edit") }}" class="btn btn-sm btn-primary">Edit Profil</a>
                  </div>
                </div>

                <!-- Informasi kanan -->
                <div class="col-md-8">
                  <div class="info-group row">
                    <div class="col-sm-4 info-label">Email</div>
                    <div class="col-sm-8 info-value">{{ auth()->user()->email }}</div>
                  </div>
                  <div class="info-group row">
                    <div class="col-sm-4 info-label">Jabatan</div>
                    <div class="col-sm-8 info-value">{{ auth()->user()->jabatan->nm_jabatan }}</div>
                  </div>
                  <div class="info-group row">
                    <div class="col-sm-4 info-label">Gaji</div>
                    <div class="col-sm-8 info-value">{{ Number::currency(auth()->user()->gaji ?? 0,"IDR") }}</div>
                  </div>
                  <div class="info-group row">
                    <div class="col-sm-4 info-label">Telepon</div>
                    <div class="col-sm-8 info-value">{{ auth()->user()->telepon }}</div>
                  </div>
                  <div class="info-group row">
                    <div class="col-sm-4 info-label">Role</div>
                    <div class="col-sm-8 info-value">{{ auth()->user()->role }}</div>
                  </div>
                  <div class="info-group row">
                    <div class="col-sm-4 info-label">Status</div>
                    <div class="col-sm-8 info-value"><span class="badge badge-{{ auth()->user()->status == "active" ? 'success' : 'warning' }}">{{ auth()->user()->status }}</span></div>
                  </div>
                </div>
              </div>
            </div>
@endsection
