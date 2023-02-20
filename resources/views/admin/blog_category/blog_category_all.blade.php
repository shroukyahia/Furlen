@extends('admin_dashboard')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    {{-- <h4 class="mb-sm-0">Blog Category All</h4> --}}
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Blog Category</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Blog Category Name</th>
                            <th>Blog Category Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        	@foreach($blogcategory as $key => $item)
                        <tr>
                            <td> {{ $key+1}} </td>
                            <td> {{ $item->blog_category }} </td>
                            <td> <img src="{{ asset($item->image_category) }}" style="width: 60px; height: 50px;"> </td>
                            <td>
                                <a href="{{ route('edit.blog.category',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                                <a href="{{ route('delete.blog.category',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection
