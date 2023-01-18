@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Business</h1>
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
        <!-- Business Plan Add Table Section Start -->
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title">Business Information</h3>
                <button type="submit" class="btn btn-default float-right" data-toggle="modal" data-target="#addBusiness"><i
                        class="fa fa-plus mx-2"></i>Add
                    Business Plan</button>
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
                                    <th>Plan</th>
                                    <th>Plan Image</th>
                                    <th>Plan Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Update</th>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($businessPlan as $businessPlan)
                                        <tr>
                                            <td>{{ $sl }}</td>
                                            <td>{{ $businessPlan->planName }}</td>
                                            <td>
                                                <img src="{{ asset('Images/BusinessPlan/' . $businessPlan->planImage) }}"
                                                    height="70" alt="businessPlan">
                                            </td>
                                            <td>{{ $businessPlan->planDescription }}</td>
                                            <td>
                                                @if ($businessPlan->status == 1)
                                                    <span class="badge badge-info">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-info" data-toggle="modal"
                                                    data-target="#editBusiness-{{ $businessPlan->id }}"><i
                                                        class="fas fa-edit"></i></button>

                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#businessPlan-{{ $businessPlan->id }}"><i
                                                        class="fas fa-trash"></i></button>

                                                {{-- Business Plan Delete Modal Start  --}}
                                                <div class="modal fade" id="businessPlan-{{ $businessPlan->id }}">
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
                                                                <form action="{{ url('business', $businessPlan->id) }}"
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
                                                {{-- Business Plan Delete Modal End  --}}
                                            </td>
                                            <td>{{ $businessPlan->updated_at }}</td>

                                            {{-- Business Plan Edit Modal Start  --}}
                                            <div class="modal fade" id="editBusiness-{{ $businessPlan->id }}">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-info">
                                                            <h4 class="modal-title">Add Besiness Plan</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal"
                                                                action="{{ route('business.update', $businessPlan->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @method('PUT')
                                                                @csrf
                                                                <div class="card-body">

                                                                    {{-- Plan Name --}}
                                                                    <div class="form-group row">
                                                                        <label for="planName"
                                                                            class="col-sm-2 col-form-label">Plan
                                                                            Name</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                id="" name="planName"
                                                                                value="{{ $businessPlan->planName }}"
                                                                                placeholder="Plan Name">
                                                                        </div>
                                                                    </div>
                                                                    {{-- Plan Image --}}
                                                                    <div class="form-group row">
                                                                        <label for="planImage"
                                                                            class="col-sm-2 col-form-label">Plan
                                                                            Image</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="file" class="form-control"
                                                                                id="" name="planImage"
                                                                                placeholder="Plan Image">
                                                                            <img class="p-2"
                                                                                src="{{ asset('Images/BusinessPlan/' . $businessPlan->planImage) }}"
                                                                                height="100" alt="planImage">
                                                                        </div>
                                                                    </div>
                                                                    {{-- Plan Description --}}
                                                                    <div class="form-group row">
                                                                        <label for="planDescription"
                                                                            class="col-sm-2 col-form-label">Plan
                                                                            Description</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea name="planDescription" class="form-control" id="" cols="30" rows="4"
                                                                                placeholder="Plan Description">{{ $businessPlan->planDescription }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    {{-- Status --}}
                                                                    <div class="form-group row">
                                                                        <label for="status"
                                                                            class="col-sm-2 col-form-label">Status</label>
                                                                        <div class="col-sm-10">
                                                                            <select name="status" id=""
                                                                                class="form-control">
                                                                                <option
                                                                                    value="{{ $businessPlan->status }}">
                                                                                    @if ($businessPlan->status == 1)
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
                                            {{-- Business Plan Edit Modal End  --}}
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
            <!-- Business Plan Add Table Section End -->
            <!-- /. Business Plan Add Modal Start -->
            <div class="modal fade" id="addBusiness">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h4 class="modal-title">Add Besiness Plan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{ route('business.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    {{-- Plan Name --}}
                                    <div class="form-group row">
                                        <label for="planName" class="col-sm-2 col-form-label">Plan Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="" name="planName"
                                                placeholder="Plan Name">
                                        </div>
                                    </div>
                                    {{-- Plan Image --}}
                                    <div class="form-group row">
                                        <label for="planImage" class="col-sm-2 col-form-label">Plan Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="" name="planImage"
                                                placeholder="Plan Image">
                                        </div>
                                    </div>
                                    {{-- Plan Description --}}
                                    <div class="form-group row">
                                        <label for="planDescription" class="col-sm-2 col-form-label">Plan
                                            Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="planDescription" class="form-control" id="" cols="30" rows="4"
                                                placeholder="Plan Description"></textarea>
                                        </div>
                                    </div>
                                    {{-- Status --}}
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select name="status" id="" class="form-control">
                                                <option value="">----Status----</option>
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
            <!-- /. Business Plan Add Modal End -->
        </div>
    </div>
@endsection

@push('js')
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
