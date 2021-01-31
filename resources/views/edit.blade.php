<h1>Update Product</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <label for="examplename">Title</label><br>
    <input type="text" name="title" value="{{$data['title']}}"><br><br>
    <label for="examplename">Subtitle</label><br>
    <input type="text" name="subtitle" value="{{$data['subtitle']}}"><br><br>
    <label for="examplename">Image</label><br>
    <input type="text" name="gallery" value="{{$data['gallery']}}"><br><br>
    <button type="submit">Update</button>

</form>

<a href="/admin">Admin Page</a>
    