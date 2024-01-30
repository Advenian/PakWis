@extends('admin.index')
@section('content')
    <div class="main" id="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">user List</h5>

                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            {{-- <th>Slug</th> --}}
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            {{-- <th>Featured Event</th> --}}
                            {{-- <th>Language</th> --}}
                            {{-- <th>Foods</th> --}}
                            {{-- <th>Departure Date</th>
                            <th>Duration</th>
                            <th>Type</th> --}}
                            {{-- <th>Price</th> --}}
                            {{-- <th>About</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                {{-- <td>{{ $user->title }}</td> --}}
                                {{-- <td>{{ $user->slug }}</td> --}}
                                {{-- <td>{{ $user->location }}</td> --}}
                                {{-- <td>{{ $user->featured_event }}</td> --}}
                                {{-- <td>{{ $user->language }}</td> --}}
                                {{-- <td>{{ $user->foods }}</td> --}}
                                {{-- <td>{{ $user->departure_date }}</td>
                                <td>{{ $user->duration }}</td>
                                <td>{{ $user->type }}</td> --}}
                                {{-- <td>{{ $user->price }}</td> --}}
                                {{-- <td>{{ $user->about }}</td> --}}
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
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
