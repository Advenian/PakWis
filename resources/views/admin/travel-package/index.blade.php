@extends('admin.index')
@section('content')
    <div class="main" id="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Package List</h5>

                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            {{-- <th>Slug</th> --}}
                            <th>Location</th>
                            {{-- <th>Featured Event</th> --}}
                            {{-- <th>Language</th> --}}
                            {{-- <th>Foods</th> --}}
                            <th>Departure Date</th>
                            <th>Duration</th>
                            <th>Type</th>
                            {{-- <th>Price</th> --}}
                            {{-- <th>About</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($travelPackages as $package)
                            <tr>
                                <td>{{ $package->title }}</td>
                                {{-- <td>{{ $package->slug }}</td> --}}
                                <td>{{ $package->location }}</td>
                                {{-- <td>{{ $package->featured_event }}</td> --}}
                                {{-- <td>{{ $package->language }}</td> --}}
                                {{-- <td>{{ $package->foods }}</td> --}}
                                <td>{{ $package->departure_date }}</td>
                                <td>{{ $package->duration }}</td>
                                <td>{{ $package->type }}</td>
                                {{-- <td>{{ $package->price }}</td> --}}
                                {{-- <td>{{ $package->about }}</td> --}}
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0" type="button" id="actionDropdown"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-list"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                            <li><a class="dropdown-item" href="#">Detail</a></li>
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
