<!DOCTYPE html>
<html>
<head>
    <title>All blog posts</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <h1>All Posts</h1>

    <!-- ✅ Show "New Post" button once -->
    <div style="margin-bottom: 20px;">
        <a href="/posts/create" class="newpost">
            + New Post
        </a>
    </div>

    <!-- ✅ Single loop to show all posts with edit & delete -->
    @foreach($posts as $post)
        <div class="post-box">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>

            <a href="/posts/{{ $post->id }}/edit" class="edit">Edit</a>

            <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="del">Delete</button>
            </form>
        </div>
    @endforeach
</body>
</html>
