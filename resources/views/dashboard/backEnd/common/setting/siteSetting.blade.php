@extends('dashboard.layouts.main')
@section('title') Setting)  @endsection
@section('main-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Image Crop</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Image Crop</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <div class="contentbar">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card m-2">
                <div class="card-header">
                    <h2 class="card-title">Setup Organization Setting</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('org.update')}}" enctype="multipart/form-data">
                    @csrf

                    <!--logo-->
                        <label class="label">Organization logo)</label>
                        <input type="hidden" value="type_logo" name="type_logo">

                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' name="logo" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                     style="background-image: url({{filePath(getSystemSetting('type_logo')->value)}});">
                                </div>
                            </div>
                        </div>
                        <!--logo end-->

                        <!--footer logo-->
                        <label class="label">Footer Logo)</label>
                        <input type="hidden" value="footer_logo" name="footer_logo">

                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' name="f_logo" id="imageUpload_f_logo" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload_f_logo"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview_f_logo"
                                     style="background-image: url({{filePath(getSystemSetting('footer_logo')->value)}});">
                                </div>
                            </div>
                        </div>
                        <!--footer logo end-->

                        <!--favicon icon-->
                        <label class="label">Favicon Icon</label>
                        <input type="hidden" value="favicon_icon" name="favicon_icon">


                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' name="f_icon" id="imageUpload_f_icon" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload_f_icon"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview_f_icon"
                                     style="background-image: url({{filePath(getSystemSetting('favicon_icon')->value)}}">
                                </div>
                            </div>
                        </div>
                        <!--favicon end-->

                        <!--name-->
                        <label class="label">Organization Name</label>
                        <input type="hidden" value="type_name" name="type_name">
                        <input type="text" value="{{getSystemSetting('type_name')->value}}" name="name"
                               class="form-control">

                        <!--footer-->
                        <label class="label">Organization Footer</label>
                        <input type="hidden" value="type_footer" name="type_footer">
                        <input type="text" value="{{getSystemSetting('type_footer')->value}}" name="footer"
                               class="form-control">

                        <!--address-->
                        <label class="label">Address</label>
                        <input type="hidden" value="type_address" name="type_address">
                        <input type="text" value="{{getSystemSetting('type_address')->value}}" name="address"
                               class="form-control">

                        <!--mail-->
                        <label class="label">Organization Mail</label>
                        <input type="hidden" value="type_mail" name="type_mail">
                        <input type="text" value="{{getSystemSetting('type_mail')->value}}" name="mail"
                               class="form-control">

                        <!--fb-->
                        <label class="label">Organization Facebook Link</label>
                        <input type="hidden" value="type_fb" name="type_fb">
                        <input type="text" value="{{getSystemSetting('type_fb')->value}}" name="fb"
                               class="form-control">

                        <!--tw-->
                        <label class="label">Organization Twitter Link</label>
                        <input type="hidden" value="type_tw" name="type_tw">
                        <input type="text" value="{{getSystemSetting('type_tw')->value}}" name="tw"
                               class="form-control">

                        <!--google-->
                        <label class="label">Organization Google Link</label>
                        <input type="hidden" value="type_google" name="type_google">
                        <input type="text" value="{{getSystemSetting('type_google')->value}}" name="google"
                               class="form-control">

                        <!--Number-->
                        <label class="label">Organization Number</label>
                        <input type="hidden" value="type_number" name="type_number">
                        <input type="text" value="{{getSystemSetting('type_number')->value}}" name="number"
                               class="form-control">

                        <div class="m-2 float-right">
                            <button class="btn btn-block btn-primary" type="submit">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>


@endsection



@section('js-link')

@stop

@section('page-script')
@stop
