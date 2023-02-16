<form method="POST" action="/product" >
    @csrf
    <label for="name">Id</label>
    <input type="text" name="id"><br>


    <label for="name">Name</label>
    <input type="text" name="name"><br>

    <label for="description_txt">Description</label>
    <input type="text" name="description_txt"><br>

    <label for="price">Price</label>
    <input type="number" step="any" name="price"><br>

    <label for="image_path">Image Path</label>
    <input type="text" name="image_path"><br>

    <button type="submit">Save</button>
</form>

