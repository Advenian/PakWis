@extends('admin.index')
@section('content')
    <div class="main" id="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create a Package!</h5>

                <!-- Vertical Form -->
                <form class="row g-3" method="post" action="{{ route('travel-package-store') }}">
                    @csrf
                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="col-12">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" required>
                    </div>
                    <div class="col-12">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="col-12">
                        <label for="featured_event" class="form-label">Featured Event</label>
                        <input type="text" class="form-control" id="featured_event" name="featured_event" required>
                    </div>
                    <div class="col-12">
                        <label for="language" class="form-label">Language</label>
                        <input type="text" class="form-control" id="language" name="language" required>
                    </div>
                    <div class="col-12">
                        <label for="foods" class="form-label">Foods</label>
                        <input type="text" class="form-control" id="foods" name="foods" required>
                    </div>
                    <div class="col-12">
                        <label for="departure_date" class="form-label">Departure Date</label>
                        <input type="date" class="form-control" id="departure_date" name="departure_date" required>
                    </div>
                    <div class="col-12">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration" required>
                    </div>
                    <div class="col-12">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" required>
                    </div>
                    <div class="col-12">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="col-12">
                        <label for="about" class="form-label">About</label>
                        <textarea class="form-control" id="about" name="about" rows="4" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->


            </div>
        </div>
    </div>
@endsection
