
    <!-- Container (Contact Section)
    <form method="POST" action="/store-info">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    -->
    <div id="contact" class="form-container">
        <h1 class="text-center" style="margin-top: 50px">Image Upload</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
            <img src="{{ asset('images/'.Session::get('image')) }}" />
        @endif

        <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" class="form-input"   name="image" />

            <button type="submit" class="form-button">Upload</button>
        </form>

    </div>

