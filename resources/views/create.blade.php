<!DOCTYPE html>
<html>
    <head>
        <title>Create New Posts</title>
    </head>
    <body>
        @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <h1> Add New Posts</h1>
        <form action="/posts" method="POST">
            @csrf
            <label>Title:</label><br>
            <input type="text" name="title"><br><br>
            <label>Body</label><br>
            <textarea name="body" rows="5"></textarea><br><br>
            <button type="submit">Save Posts</button>
        </form>
    </body>
</html>