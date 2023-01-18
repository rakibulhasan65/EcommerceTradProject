@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Banner</h1>
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
        <!-- Banner Add Table Section Start -->
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title">Banner Manage</h3>
                <button type="submit" class="btn btn-default float-right" data-toggle="modal" data-target="#addBanner"><i
                        class="fa fa-plus mx-2"></i>Add
                    Banner</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="example1_info">
                                <thead>
                                    <th>Title</th>
                                    <th>Theme Button</th>
                                    <th>Button Link</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Last Update</th>
                                </thead>
                                <tbody>
                                    @foreach ($banners as $banner)
                                        <tr>
                                            <td>{{ $banner->title }}</td>
                                            <td>{{ $banner->themeBtn }}</td>
                                            <td>{{ $banner->btnLink }}</td>
                                            <td><img style="height: 70px;"
                                                    src="{{ asset('images/Banner/' . $banner->image) }}" alt="banner">
                                            </td>
                                            <td>{{ $banner->description }}</td>
                                            <td>
                                                @if ($banner->status == 1)
                                                    <span class="badge badge-primary">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info" data-toggle="modal"
                                                    data-target="#bannerEdit-{{ $banner->id }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#bannerDelete-{{ $banner->id }}"><i
                                                        class="fas fa-trash"></i></button>
                                                {{-- Banner Delete Modal Start  --}}
                                                <div class="modal fade" id="bannerDelete-{{ $banner->id }}">
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
                                                                <p>Ar Your Sure Deleted Thise Item !</p>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Cencel</button>
                                                                <form action="{{ url('banners/' . $banner->id) }}"
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
                                                {{-- Banner Delete Modal End  --}}
                                            </td>
                                            {{-- Banner Edit Modal Start  --}}
                                            <div class="modal fade" id="bannerEdit-{{ $banner->id }}">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-info">
                                                            <h4 class="modal-title">Edit Banner</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal"
                                                                action="{{ url('banners/' . $banner->id) }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @method('PUT')
                                                                @csrf
                                                                <div class="card-body">
                                                                    <div class="form-group row">
                                                                        <label for="title"
                                                                            class="col-sm-2 col-form-label">Title</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="title"
                                                                                class="form-control" id=""
                                                                                placeholder="Title"
                                                                                value="{{ $banner->title }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="themeBtn"
                                                                            class="col-sm-2 col-form-label">Theme
                                                                            Button</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                id="" name="themeBtn"
                                                                                placeholder="Theme Button"
                                                                                value="{{ $banner->themeBtn }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="btnLink"
                                                                            class="col-sm-2 col-form-label">Button
                                                                            Link</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                id="" name="btnLink"
                                                                                placeholder="Button Link"
                                                                                value="{{ $banner->btnLink }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="image"
                                                                            class="col-sm-2 col-form-label">Banner
                                                                            Image</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="file" class="form-control"
                                                                                id="" name="image"
                                                                                placeholder="Banner Image">
                                                                            <img style="height: 80px; padding:5px 5px 5px 5px;"
                                                                                src="{{ asset('images/Banner/' . $banner->image) }}"
                                                                                alt="Banner">
                                                                        </div>
                                                                        <input type="hidden" name="old_image"
                                                                            value="{{ $banner->image }}">
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="description"
                                                                            class="col-sm-2 col-form-label">Deshcription</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea name="description" class="form-control" id="" cols="30" rows="4"
                                                                                placeholder="Description">{{ $banner->description }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="status"
                                                                            class="col-sm-2 col-form-label">Status</label>
                                                                        <div class="col-sm-10">
                                                                            <select name="status" id=""
                                                                                class="form-control">
                                                                                <option value="{{ $banner->status }}">
                                                                                    @if ($banner->status == 1)
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
                                            {{-- Banner Edit Modal End  --}}
                                            <td>{{ $banner->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <!-- Banner Add Table Section End -->
            <!-- /. Banner Add Modal Start -->
            <div class="modal fade" id="addBanner">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h4 class="modal-title">Add Banner</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{ route('banners.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id=""
                                                placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="themeBtn" class="col-sm-2 col-form-label">Theme Button</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="" name="themeBtn"
                                                placeholder="Theme Button">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="btnLink" class="col-sm-2 col-form-label">Button Link</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="" name="btnLink"
                                                placeholder="Button Link">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="image" class="col-sm-2 col-form-label">Banner Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="" name="image"
                                                placeholder="Banner Image">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Deshcription</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="" cols="30" rows="4"
                                                placeholder="Small Description"></textarea>
                                        </div>
                                    </div>
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
            <!-- /. Banner Add Modal End -->
        </div>
    </div>
@endsection

@push('js')
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script>
 
    </script>
@endpush
