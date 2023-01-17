@extends('layouts.app')

@section('content')
    <div class="d-flex">
        @include('admin.partials.navbar')

        <main class="ms-sm-auto col-lg-5 px-md-4">

            <div class="table-responsive-sm">
                <table class="table table-warning">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($technologies as $tech)
                            <tr class="">
                                <td scope="row">{{ $tech->id }}</td>
                                <td>{{ $tech->name }}</td>
                                <td>
                                    <form action="{{ route('admin.technologies.destroy', $tech->id) }}" method="post">
                                        @csrf
                                        @method('destory')
                                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h3>Not technologies found</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>


        </main>
    </div>
@endsection
