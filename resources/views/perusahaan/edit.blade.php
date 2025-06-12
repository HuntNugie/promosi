@extends("layouts.app")

@push("style")
    <style>
          .logo-preview {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #dee2e6;
    }
    </style>
@endpush
@push("skrip")
     <script>
    const logoInput = document.getElementById('logo');
    const previewLogo = document.getElementById('preview-logo');

    logoInput.addEventListener('change', function () {
      const file = this.files[0];
      if (file) {
        previewLogo.src = URL.createObjectURL(file);
      }
    });
  </script>
@endpush

@section("content")
 <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <div class="card shadow-lg border-0">
          <div class="card-body px-4 py-5">
            <h4 class="mb-4 text-primary fw-bold text-center">Edit Profil Perusahaan</h4>

            <form action="{{ route("perusahaan.update",$perusahaan->slug) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <!-- Nama Perusahaan -->
              <div class="mb-3">
                <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" id="nama_perusahaan" placeholder="Contoh: PT. Maju Jaya" name="nm_perusahaan" value="{{ $perusahaan->nm_perusahaan }}">
              </div>

              <!-- Tentang Perusahaan -->
              <div class="mb-3">
                <label for="tentang" class="form-label">Tentang Perusahaan</label>
                <textarea class="form-control" name="tentang" id="tentang" rows="5" placeholder="Tulis deskripsi perusahaan...">{{ $perusahaan->tentang }}</textarea>
              </div>

              <!-- Logo Saat Ini -->
              <div class="mb-3 text-center">
                <label class="form-label">Logo Saat Ini</label>
                <div>
                  <img id="preview-logo" src="{{ asset("storage") }}/{{ $perusahaan->foto }}" alt="Logo" class="logo-preview shadow-sm">
                </div>
              </div>

              <!-- Upload Logo Baru -->
              <div class="mb-4">
                <label for="logo" class="form-label">Upload Logo Baru (Opsional)</label>
                <input type="file" class="form-control" name="foto" id="logo" accept="image/*">
              </div>

              <!-- Tombol Simpan -->
              <div class="d-grid">
                <button type="submit" class="btn btn-success">
                  <i class="bi bi-save"></i> Simpan Perubahan
                </button>
              </div>

            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
