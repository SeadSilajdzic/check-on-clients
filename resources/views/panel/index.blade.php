@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(auth()->user()->role_id === 1)
                        <div class="card-header">{{ __('Welcome to panel') }}</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#newCustomerModal">Add new customer</a>

                                <!-- Modal -->
                                <div class="modal fade" id="newCustomerModal" tabindex="-1" role="dialog" aria-labelledby="newCustomerModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add new customer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('client.store') }}" method="post">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" name="name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" name="email" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <input type="number" name="phone" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="company_name">Company name</label>
                                                                <input type="text" name="company_name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input type="text" name="address" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="password" name="password" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="password_confirmation">Confirm password</label>
                                                                <input type="password" name="password_confirmation" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" name="btn-add-new-customer" class="btn btn-success btn-block">Add new customer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end modal -->

                                <table id="display-customers" class="table table-hover mt-4">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Company name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->company_name }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @include('partials.error')
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
