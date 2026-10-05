<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>

    @can('edit-post', $post)
        <h1>Edit Post</h1>

        <p>Judul: {{ $post->title }}</p>
        <p>Isi: {{ $post->content }}</p>

        <p>Anda memiliki izin untuk mengedit post ini.</p>
    @else
        <h1>Akses Ditolak</h1>

        <p>Anda tidak memiliki izin untuk mengedit post ini.</p>
    @endcan

</body>
</html>
