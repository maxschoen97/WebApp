
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form class="form-container" method="POST" action="/product" >
    <h1 class="text-center">Product Upload</h1>
    @csrf
    <label for="name">ID</label>
    <input class="form-input" type="number" name="id" ><br>


    <label for="name">Name</label>
    <input class="form-input"  type="text" name="name" ><br>

    <label for="description_txt">Description</label>
    <input  class="form-input"  type="text" name="description_txt" ><br>

    <label for="price">Price</label>
    <input class="form-input"  type="number" step="any" name="price" ><br>

    <label for="image_path">Image Path</label>
    <input class="form-input"  type="text" name="image_path" value="storage/images/arancino_ragu.jpg"><br>
    <button class="form-button" type="submit">Save</button>

    <button class="form-button"  href="https://example.com" target="_blank">See Image</button>

</form>
