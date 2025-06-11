@extends("layouts.app")

@section("content")
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card shadow-lg border-0" style="background: #f4f6f9;">
        <div class="card-body text-center px-4 py-5">

          {{-- Logo Perusahaan --}}
          <div class="mb-4">
            <img src="https://img.freepik.com/premium-vector/creative-elegant-abstract-minimalistic-logo-design-vector-any-brand-company_1253202-136614.jpg?semt=ais_hybrid&w=740"
                 class="rounded-circle shadow"
                 alt="Logo Perusahaan"
                 style="width: 160px; height: 160px; object-fit: cover; border: 5px solid #fff;">
          </div>

          {{-- Nama Perusahaan --}}
          <h3 class="fw-bold text-dark">NGK Company</h3>

          {{-- Tentang Perusahaan --}}
          <div class="mt-4 text-start">
            <h5 class="text-primary fw-semibold mb-2">Tentang Perusahaan</h5>
            <p class="text-body" style="font-size: 16px; line-height: 1.7;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias in hic, suscipit animi libero recusandae enim rerum deleniti. Itaque eaque ducimus perferendis architecto, totam ea dignissimos fugiat impedit sapiente possimus.
            </p>
          </div>

          {{-- Tombol Edit --}}
          <a href="#" class="btn btn-primary btn-icon-text mt-4 px-4">
            <i class="mdi mdi-pencil btn-icon-prepend"></i>
            Edit Profil Perusahaan
          </a>
        </div>
      </div>

    </div>
  </div>
</div>


@endsection
