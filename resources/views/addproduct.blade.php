<h1>Add Products</h1>
<form action="addproduct" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="examplename">Title</label><br>
    <input type="text" name="title" placeholder="Enter Title"><br><br>
    <label for="examplename">Subtitle</label><br>
    <input type="text" name="subtitle" placeholder="Enter Title"><br><br>
    <label for="examplename">Image</label>
    <!input type="text" name="gallery" placeholder="Enter Image Link"><br><br>
    <div class="input-group">
        <input type="file" name="gallery" class="custom-file-input">   
    </div>
    <button type="submit">Add Product</button>

</form>

<a href="/admin">Admin Page</a>
    
