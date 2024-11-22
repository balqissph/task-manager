<x-app-layout>
    <div class="py-12" style="padding: 0 20px;">
        <h2 style="text-align: center; margin-bottom: 20px;">Daftar Tugas</h2>

        <!-- Filter Status -->
        <form method="GET" action="{{ route('tasks.index') }}" style="margin-bottom: 20px; text-align: center;">
            <label for="status">Filter Status:</label>
            <select name="status" id="status" onchange="this.form.submit()" style="padding: 5px; margin-left: 10px;">
                <option value="" {{ request('status') === '' ? 'selected' : '' }}>Semua</option>
                <option value="Tugas Belum Selesai" {{ request('status') == 'Tugas Belum Selesai' ? 'selected' : '' }}>Tugas Belum Selesai</option>
                <option value="Sedang Dikerjakan" {{ request('status') == 'Sedang Dikerjakan' ? 'selected' : '' }}>Sedang Dikerjakan</option>
                <option value="Tugas Selesai" {{ request('status') == 'Tugas Selesai' ? 'selected' : '' }}>Tugas Selesai</option>
            </select>
        </form>

        <!-- Tabel Tugas -->
        @if ($tasks->isEmpty())
            <p style="text-align: center;">Tidak ada tugas yang tersedia.</p>
        @else
            <table border="1" style="width: 100%; border-collapse: collapse; margin: 0 auto;">
                <thead>
                    <tr>
                        <th style="padding: 10px; text-align: center;">ID</th>
                        <th style="padding: 10px;">Judul</th>
                        <th style="padding: 10px; text-align: center;">Status</th>
                        <th style="padding: 10px; text-align: center;">Tanggal Selesai</th>
                        <th style="padding: 10px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td style="text-align: center; padding: 10px;">{{ $task->id }}</td>
                            <td style="padding: 10px;">{{ $task->title }}</td>
                            <td style="text-align: center; padding: 10px;">{{ $task->status }}</td>
                            <td style="text-align: center; padding: 10px;">
                                {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('d M Y') : 'Belum Selesai' }}
                            </td>
                            <td style="text-align: center; padding: 10px;">
                                <a href="{{ route('tasks.show', $task->id) }}" style="text-decoration: none; color: blue;">Lihat</a> | 
                                <a href="{{ route('tasks.edit', $task->id) }}" style="text-decoration: none; color: orange;">Edit</a> | 
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: none; border: none; color: red; cursor: pointer;" onclick="return confirm('Hapus tugas ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div style="margin-top: 20px; text-align: center;">
                {{ $tasks->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
