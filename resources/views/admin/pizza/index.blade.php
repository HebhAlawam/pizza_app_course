@extends('admin.layout.main')

@section('title')
all pizza
@endsection

@section('content')

<!-- content-->

    <div class="col-md-9">
        <div class="card">
            <div class="card-header">Pizza</div>
            <div class="card-body">  
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">S.price</th>
                            <th scope="col">M.price</th>
                            <th scope="col">L.price</th>
                            <th colspan="2" scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row">#</th>
                                <td><img src="img/pizza1.jpg" width="80"></td>
                                <td><a href="">Pizza 1</a></td>
                                <td>cat_id</td>
                                <td>22</td>
                                <td>33</td>
                                <td>44</td>
                                <td>
                                    <a href="" class="btn btn-primary">Editt</a>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">#</th>
                                <td><img src="img/pizza2.jpg" width="80"></td>
                                <td><a href="">Pizza 2</a></td>
                                <td>cat_id</td>
                                <td>22</td>
                                <td>33</td>
                                <td>44</td>
                                <td>
                                    <a href="" class="btn btn-primary">Editt</a>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                </td>
                            </tr>

                     </tbody>
 
                </table>

            </div>
        </div>
    </div>

<!--end content-->

@endsection
