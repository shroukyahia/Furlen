@extends('admin_dashboard')
@section('admin')
<!DOCTYPE html>
<html>
    <head>
        <title>Create New Blog</title>
        <link rel="stylesheet" href="{{asset('Frontend/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/css/charts.min.css')}}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    }
</style>
    </head>

    <body>
            <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Blog Page </h4>

                        <form method="post" action="{{ route('update.blog') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $blogs->id }}">


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title </label>
                                <div class="col-sm-10">
                                    <input name="title" value="{{ $blogs->title }}" class="form-control" type="text" id="example-text-input">
                                    @error('title')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category</label>
                                <div class="col-sm-10">
                                    <select name="blog_category_id" value="" class="form-select" aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                        @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}" {{ $cat->id == $blogs->blog_category_id ? 'selected' :''}}> {{ $cat->blog_category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Description </label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="paragraph" value="{{ $blogs->paragraph }}">
                                    </textarea>
                                    @error('paragraph')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image </label>
                                <div class="col-sm-10">
                                    <input name="blog_image" value="{{$blogs->blog_image}}" class="form-control" type="file" id="image">
                                    @error('blog_image')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{ asset($blogs->blog_image) }}" alt="Card image cap">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Price </label>
                                <div class="col-sm-10">
                                    <input name="price" value="{{ $blogs->price }}" class="form-control" type="text" id="example-text-input">
                                    @error('price')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script type="text/javascript">

        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>
</html>


@endsection

