@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Service</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Service Add Table Section Start -->
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title">Service</h3>
                <button type="submit" class="btn btn-default float-right" data-toggle="modal" data-target="#addServices"><i
                        class="fa fa-plus mx-2"></i>Add
                    Service</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="example1_info">
                                <thead>
                                    <th>SL#</th>
                                    <th>Service Name</th>
                                    <th>Service Icon</th>
                                    <th>Service Sort Description</th>
                                    <th>Service Long Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Update</th>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($servicesData as $servicesData)
                                        <tr>
                                            <td>{{ $sl }}</td>
                                            <td>{{ $servicesData->ServiceName }}</td>
                                            <td>
                                                <i class="flaticon-{{ $servicesData->serviceIcon }}"></i>
                                            </td>
                                            <td>{{ $servicesData->SortDescription }}</td>
                                            <td>{{ $servicesData->LongDescription }}</td>
                                            <td>
                                                @if ($servicesData->status == 1)
                                                    <span class="badge badge-info">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-info" data-toggle="modal"
                                                    data-target="#serviceEdit-{{ $servicesData->id }}"><i
                                                        class="fas fa-edit"></i></button>

                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#serviceDelete-{{ $servicesData->id }}"><i
                                                        class="fas fa-trash"></i></button>

                                                {{-- Service Delete Modal Start  --}}
                                                <div class="modal fade" id="serviceDelete-{{ $servicesData->id }}">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-info">
                                                                <h4 class="modal-title">Delete Confirmation Massage</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Ar Your Sure Deleted This Item !</p>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Cencel</button>
                                                                <form
                                                                    action="{{ Route('services.destroy', $servicesData->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                                {{-- Service Delete Modal End  --}}
                                            </td>
                                            <td>{{ $servicesData->updated_at }}</td>

                                            {{-- Service Edit Modal Start  --}}
                                            <div class="modal fade" id="serviceEdit-{{ $servicesData->id }}">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-info">
                                                            <h4 class="modal-title">Edit Service</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal"
                                                                action="{{ Route('services.update', $servicesData->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @method('PUT')
                                                                @csrf
                                                                <div class="card-body">
                                                                    {{-- Services Name --}}
                                                                    <div class="form-group row">
                                                                        <label for="ServiceName"
                                                                            class="col-sm-2 col-form-label">Services
                                                                            Name</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                name="ServiceName"
                                                                                placeholder="Services Name"
                                                                                value="{{ $servicesData->ServiceName }}">
                                                                        </div>
                                                                    </div>
                                                                    {{-- Service Icon --}}
                                                                    <div class="form-group row">
                                                                        <label for="serviceIcon"
                                                                            class="col-sm-2 col-form-label">Service
                                                                            Icon <span
                                                                                class="text-sm font-italic font-weight-lighter">(flaticon-)</span></label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                name="serviceIcon"
                                                                                placeholder="Service Icon"
                                                                                value="{{ $servicesData->serviceIcon }}">

                                                                        </div>
                                                                    </div>
                                                                    {{-- Service Sort Description --}}
                                                                    <div class="form-group row">
                                                                        <label for="SortDescription"
                                                                            class="col-sm-2 col-form-label">Service Sort
                                                                            Description</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea name="SortDescription" class="form-control" cols="20" rows="2"
                                                                                placeholder="Service Sort Description">{{ $servicesData->SortDescription }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    {{-- Service Long Description --}}
                                                                    <div class="form-group row">
                                                                        <label for="LongDescription"
                                                                            class="col-sm-2 col-form-label">Service Long
                                                                            Description</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea name="LongDescription" class="form-control" cols="30" rows="4"
                                                                                placeholder="Service Long Description">{{ $servicesData->LongDescription }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    {{-- Status --}}
                                                                    <div class="form-group row">
                                                                        <label for="status"
                                                                            class="col-sm-2 col-form-label">Status</label>
                                                                        <div class="col-sm-10">
                                                                            <select name="status" class="form-control">
                                                                                <option
                                                                                    value="{{ $servicesData->status }}">
                                                                                    @if ($servicesData->status == 1)
                                                                                        Active
                                                                                    @else
                                                                                        Inactive
                                                                                    @endif
                                                                                </option>
                                                                                <option value="1">Active</option>
                                                                                <option value="0">Inactive</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.card-body -->
                                                                <div class="card-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-info float-right">Update</button>
                                                                </div>
                                                                <!-- /.card-footer -->
                                                            </form>
                                                        </div>

                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            {{-- Service Edit Modal End  --}}
                                        </tr>
                                        @php
                                            $sl++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <!-- Service Add Table Section End -->
            <!-- /. Service Add Modal Start -->
            <div class="modal fade" id="addServices">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h4 class="modal-title">Add Services</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{ Route('services.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="card-body">
                                    {{-- Services Name --}}
                                    <div class="form-group row">
                                        <label for="ServiceName" class="col-sm-2 col-form-label">Services Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ServiceName"
                                                placeholder="Services Name">
                                        </div>
                                    </div>
                                    {{-- Service Image --}}
                                    <div class="form-group row">
                                        <label for="serviceIcon" class="col-sm-2 col-form-label">Service Icon<span
                                                class="text-sm font-italic font-weight-lighter">(flaticon-)</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="serviceIcon"
                                                placeholder="Service Icon">
                                        </div>
                                    </div>
                                    {{-- Service Sort Description --}}
                                    <div class="form-group row">
                                        <label for="SortDescription" class="col-sm-2 col-form-label">Service Sort
                                            Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="SortDescription" class="form-control" cols="20" rows="2"
                                                placeholder="Service Sort Description"></textarea>
                                        </div>
                                    </div>
                                    {{-- Service Long Description --}}
                                    <div class="form-group row">
                                        <label for="LongDescription" class="col-sm-2 col-form-label">Service Long
                                            Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="LongDescription" class="form-control" cols="30" rows="4"
                                                placeholder="Service Long Description"></textarea>
                                        </div>
                                    </div>
                                    {{-- Status --}}
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select name="status" class="form-control">
                                                <option value=>----Status----</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info float-right">Save</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>

                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /. Service Add Modal End -->
        </div>
    </div>
@endsection

@push('js')
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
@endpush
