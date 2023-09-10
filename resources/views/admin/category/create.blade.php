@extends('admin.layout.main')

@section('title')
create category
@endsection

@section('content')
    <!-- content-->

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create Category</div>
                    <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name of categoy</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="name of categoy">
                            </div>

                            <div class="form-group text-center mt-3">
                                <button type="submit" class="btn btn-primary text-center"> Create </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    <!--end content-->
@endsection




