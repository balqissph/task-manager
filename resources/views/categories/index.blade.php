<x-app-layout>
    <div class="py-12" style="padding: 0 20px;">
        <h2 style="text-align: center; margin-bottom: 20px;">Daftar Kategori</h2>

        <!-- Tabel Kategori -->
        @if ($categories->isEmpty())
            <p style="text-align: center;">Tidak ada kategori yang tersedia.</p>
        @else
            <table border="1" style="width: 100%; border-collapse: collapse; margin: 0 auto;">
                <thead>
                    <tr>
                        <th style="padding: 10px;">ID</th>
                        <th style="padding: 10px;">Nama</th>
                        <th style="padding: 10px;">Slug</th>
                        <th style="padding: 10px;">Deskripsi</th>
                        <th style="padding: 10px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td style="text-align: center; padding: 10px;">{{ $category->id }}</td>
                            <td style="padding: 10px;">{{ $category->name }}</td>
                            <td style="padding: 10px;">{{ $category->slug }}</td>
                            <td style="padding: 10px;">{{ $category->description }}</td>
                            <td style="text-align: center; padding: 10px;">
                                <a href="{{ route('categories.show', $category->id) }}">Lihat</a> | 
                                <a href="{{ route('categories.edit', $category->id) }}">Edit</a> | 
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: none; border: none; color: red; cursor: pointer;" onclick="return confirm('Hapus kategori ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div style="margin-top: 20px; text-align: center;">
                {{ $categories->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
