@props(['users'])

<div class="card card-formal overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle table-formal mb-0">
            <thead>
                <tr>
                    <th scope="col" class="text-center py-3" style="width: 8%;">No</th>
                    <th scope="col" class="py-3">Nama Lengkap</th>
                    <th scope="col" class="py-3">NPM</th>
                    <th scope="col" class="py-3">Kelas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $index => $user)
                    <tr>
                        <td class="text-center text-secondary fw-semibold">{{ $index + 1 }}</td>
                        <td class="fw-medium text-dark">{{ $user->nama }}</td>
                        <td>
                            <span class="badge bg-light text-dark border font-monospace fw-normal px-2 py-1">{{ $user->npm }}</span>
                        </td>
                        <td>
                            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1">Kelas {{ $user->nama_kelas }}</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">
                            Tidak ada data pengguna yang ditemukan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>