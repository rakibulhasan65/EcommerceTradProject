@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Site Setting</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Site Setting</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Website Add SiteSetting Section Start -->
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title">Site Setting</h3>
            </div>
            <form action="{{ Route('siteSettings.update', $settingData->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    {{-- Site Title --}}
                    <div class="form-group row">
                        <label for="siteTitle" class="col-sm-2 col-form-label">Site Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="siteTitle" id="siteTitle"
                                value="{{ $settingData->siteTitle }}" placeholder="Site Title">
                        </div>
                    </div>
                    {{-- Site Logo Top Header   --}}
                    <div class="form-group row">
                        <label for="siteLogo" class="col-sm-2 col-form-label">Top Header Logo <spna
                                class="text-sm font-italic font-weight-light">(Choice Colorful Logo Design Perfectly shows.)
                            </spna></label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="headLogo" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Logo Choice</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-10 p-2">
                            <img src="{{ asset('images/siteImage/' . $settingData->headLogo) }}"
                                class="border border-dark rounded p-2" alt="headLogo" style="height: 70px; width:110px;">
                        </div>
                    </div>
                    {{-- Navbar Logo  --}}
                    <div class="form-group row">
                        <label for="siteLogo" class="col-sm-2 col-form-label">Navbar Logo <spna
                                class="text-sm font-italic font-weight-light">(White color logo wonderful Banner Design.)
                            </spna></label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="navLogo" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Logo Choice</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-10 p-2">
                            <img src="{{ asset('images/siteImage/' . $settingData->navLogo) }}"
                                class=" bg-dark border border-dark rounded p-2" alt="navLogo"
                                style="height: 70px; width:110px;">
                        </div>
                    </div>
                    {{-- Contact  --}}
                    <div class="form-group row">
                        <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="contact" id=""
                                value="{{ $settingData->contact }}" placeholder="+880">
                        </div>
                    </div>
                    {{-- Email Adress  --}}
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id=""
                                value="{{ $settingData->email }}" placeholder="Email">
                        </div>
                    </div>
                    {{-- Address --}}
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" id=""
                                value="{{ $settingData->address }}" placeholder="Address">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </form>
        </div>
        </form>


    </div>
    </div>
@endsection

@push('js')
    <!-- All Extrarnal Javascripts -->
@endpush
