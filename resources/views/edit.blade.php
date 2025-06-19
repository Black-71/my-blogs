<!DOCTYPE html>
<html>
    <body>
        <h2>Edit Post</h2>

        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')

            <label>Title</label><br>
            <input type="text" name="title" value="{{ $post->title }}"><br><br>

            <label>Body</label><br>
            <textarea name="body">{{ $post->body }}</textarea><br><br>

            <button type="submit">Update</button>
        </form>
    </body>
</html>
