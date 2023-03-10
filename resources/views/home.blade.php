@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" style="overflow-x:auto;">
                            <table class="table  bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Position</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                                    style="width: 45px; height: 45px; margin-right: 10px"
                                                    class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">John Doe</p>
                                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Software engineer</p>
                                            <p class="text-muted mb-0">IT department</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>

                                            <button type="button" class="btn btn-warning rounded-pill mb-2">Edit</button>
                                            <button type="button" class="btn btn-danger rounded-pill mb-2">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                                    class="rounded-circle" alt=""
                                                    style="width: 45px; height: 45px; margin-right: 10px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Alex Ray</p>
                                                    <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Consultant</p>
                                            <p class="text-muted mb-0">Finance</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                                        </td>
                                        <td>Junior</td>
                                        <td>
                                            <button type="button" class="btn btn-warning rounded-pill mb-2">Edit</button>
                                            <button type="button" class="btn btn-danger rounded-pill mb-2">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                                    class="rounded-circle" alt=""
                                                    style="width: 45px; height: 45px; margin-right: 10px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Kate Hunington</p>
                                                    <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Designer</p>
                                            <p class="text-muted mb-0">UI/UX</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-warning rounded-pill mb-2">Edit</button>
                                            <button type="button" class="btn btn-danger rounded-pill mb-2">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                                    style="width: 45px; height: 45px; margin-right: 10px"
                                                    class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">John Doe</p>
                                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Software engineer</p>
                                            <p class="text-muted mb-0">IT department</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                                        </td>
                                        <td>Senior</td>
                                        <td class="btn-action">

                                            <button type="button" class="btn btn-warning rounded-pill mb-2">Edit</button>
                                            <button type="button" class="btn btn-danger rounded-pill mb-2">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                                    class="rounded-circle" alt=""
                                                    style="width: 45px; height: 45px; margin-right: 10px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Alex Ray</p>
                                                    <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Consultant</p>
                                            <p class="text-muted mb-0">Finance</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                                        </td>
                                        <td>Junior</td>
                                        <td>
                                            <button type="button" class="btn btn-warning rounded-pill mb-2">Edit</button>
                                            <button type="button" class="btn btn-danger rounded-pill mb-2">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                                    class="rounded-circle" alt=""
                                                    style="width: 45px; height: 45px; margin-right: 10px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">Kate Hunington</p>
                                                    <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Designer</p>
                                            <p class="text-muted mb-0">UI/UX</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-warning rounded-pill mb-2">Edit</button>
                                            <button type="button" class="btn btn-danger rounded-pill mb-2">Delete</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
