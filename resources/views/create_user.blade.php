@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card border-0 shadow-sm rounded-3 p-4 bg-white position-relative">
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">Add user</h4>
                <a href="{{ route('user.index') }}" class="text-decoration-none text-muted fs-4 lh-1" title="Batal">&times;</a>
            </div>

            <form action="{{ route('user.store') }}" method="POST">
                @csrf
              
                <div class="mb-3">
                    <label for="nama" class="form-label fw-bold text-uppercase text-secondary small mb-1" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                        NAMA <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control form-control-sm py-2 px-3 border-secondary-subtle rounded-2" id="nama" name="nama" placeholder="Masukkan nama" required>
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-bold text-uppercase text-secondary small mb-1" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                        NPM <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control form-control-sm py-2 px-3 border-secondary-subtle rounded-2" id="npm" name="npm" placeholder="Masukkan NPM" required>
                </div>
                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-bold text-uppercase text-secondary small mb-1" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                        KELAS <span class="text-danger">*</span>
                    </label>
                    <select name="kelas_id" id="kelas_id" class="form-select form-select-sm py-2 px-3 border-secondary-subtle rounded-2" required>
                        <option value="" disabled selected>-- Pilih Kelas --</option>
                       @foreach ($kelas as $kelasItem)
    <option value="{{ $kelasItem->id }}">
        {{ $kelasItem->nama_kelas ?? $kelasItem->nama }}
    </option>
@endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-end gap-2 pt-2 border-top">
                    <a href="{{ route('user.index') }}" class="btn btn-light btn-sm px-3 fw-medium text-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-navy btn-sm px-4 fw-medium">
                        Save
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection