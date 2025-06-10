@extends("layouts.app")
@push("skrip")
    <script>
    // Preview image when selected
    document.getElementById('profileUpload').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('profilePicture').src = e.target.result;
        }
        reader.readAsDataURL(file);
      }
    });
  </script>
@endpush
@push("style")
     <style>
    .profile-picture {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .profile-picture-container {
      position: relative;
      display: inline-block;
      margin-bottom: 20px;
    }
    .profile-picture-edit {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background: #6c5ce7;
      color: white;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }
    .card-header {
      background-color: #6c5ce7;
      color: white;
      border-radius: 15px 15px 0 0 !important;
    }
    .btn-primary {
      background-color: #6c5ce7;
      border-color: #6c5ce7;
    }
    .btn-primary:hover {
      background-color: #5649c0;
      border-color: #5649c0;
    }
  </style>
@endpush

@section("content")
 <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0"><i class="fas fa-user-edit me-2"></i>Edit Profile</h4>
          </div>
          <div class="card-body p-4">
            <form action="{{ route("myProfile.update",auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="text-center mb-4">
                <div class="profile-picture-container">
                  <img src="{{ asset("storage") }}/{{ auth()->user()->foto }}" alt="Profile Picture" class="profile-picture" id="profilePicture">
                  <div class="profile-picture-edit" onclick="document.getElementById('profileUpload').click()">
                    <i class="fas fa-camera"></i>
                  </div>
                  <input type="file" id="profileUpload" accept="image/*" name="foto" style="display: none;">
                </div>
                <h5 class="mt-3">Ubah Foto Profil</h5>
              </div>

              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" value="{{ auth()->user()->name }}" name="name">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" name="email">
              </div>

              <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <select class="form-control"  name="jabatan_id" id="jabatan">
                  <option selected disabled>Pilih Jabatan</option>
                    @foreach ($jabatan as $j)
                    <option value="{{ $j->id }}" {{ auth()->user()->jabatan_id == $j->id ? "selected" : "" }}>{{ $j->nm_jabatan }}</option>
                    @endforeach
                </select>
              </div>

              <div class="mb-4">
                <label for="telepon" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" value="{{ auth()->user()->telepon }}">
              </div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-secondary me-md-2">
                  <i class="fas fa-times me-1"></i> Batal
                </button>
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-save me-1"></i> Simpan Perubahan
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

