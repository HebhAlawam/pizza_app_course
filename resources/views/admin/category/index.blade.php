@extends('admin.layout.main')

@section('title')
All categories
@endsection

@section('content')
<!-- content-->

    <div class="col-md-9">
        <div class="card">
            <div class="card-header"> Categories </div>
            <div class="card-body">  
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th colspan="2" scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row">#</th>
                                <td><a href="">Cat 1</a></td>
                                <td>
                                    <a href="" class="btn btn-primary">Editt</a>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">#</th>
                                <td><a href="">Cat 2</a></td>
                                <td>
                                    <a href="" class="btn btn-primary">Editt</a>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                </td>
                            </tr>

                     </tbody>
 
                </table>

                <div class="form-group text-center mt-3">
                    <a href="{{ route('category.create')}}" class="btn btn-success text-center"> add new </a>
                </div>

            </div>
        </div>
    </div>

<!--end content-->
@endsection