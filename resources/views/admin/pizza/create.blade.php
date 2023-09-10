@extends('admin.layout.main')

@section('title')
create pizza
@endsection

@section('content')

<!-- content-->

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Pizza</div>
                    <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name of pizza</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="name of pizza">
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description of pizza</label>
                                <textarea id="description" class="form-control" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 col-form-label text-md-right">Pizza price($)</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="small pizza price" name="small_price">
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="medium pizza price" name="medium_price">
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="big pizza price" name="big_price">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 col-form-label text-md-right">Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="" selected>...</option>
                                    <option value="1"> Vegetarian pizza </option>
                                    <option value="2"> Non Vegetarian pizza </option>
                                    <option value="3"> Traditional pizza </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 col-form-label text-md-right">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>


                            <div class="form-group text-center mt-3">
                                <button type="submit" class="btn btn-primary text-center"> Add </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    <!--end content-->

@endsection
