
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
    <label for="name">ID(Starter (0-99), Main (100-999), Dessert(1000+)</label>
    <input class="form-input" type="number" name="id" ><br>


    <label for="name">Name</label>
    <input class="form-input"  type="text" name="name" ><br>

    <label for="description_txt">Description</label>
    <input  class="form-input"  type="text" name="description_txt" ><br>

    <label for="price">Price</label>
    <input class="form-input"  type="number" step="any" name="price" ><br>

    <label for="image_path">Image Path(Upload the Image first)</label>
    <input class="form-input"  type="text" name="image_path" value="/images/image_name.jpg"><br>
    <button class="form-button" type="submit">Save</button>

    <button class="form-button"  target="_blank">See Image</button>

</form>
