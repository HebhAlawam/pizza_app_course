@extends('admin.layout.main')

@section('title')
show
@endsection

@section('content')
<!-- content-->

     <div class="col-md-9">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">                     
                    <img src="img/pizza1.jpg" class="img-thumbnail" style="width: 50%;">
                    <h2>Pizza 1</h2>
                    <h5>cat_1</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="lead">Small pizza price:$ 22</p>   
                    <p class="lead">Meduim pizza price:$ 33</p> 
                    <p class="lead">Big pizza price:$ 44</p>   

                </div>

            </div>
        </div>
<!-- end content-->

@endsection

