<div>
    <a href="{{ route('post.create') }}" class="btn btn-md btn-success mb-3">Tambah Post</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Konten</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td class="text-center">
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button wire:click="destroy({{ $post->id }})" class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>