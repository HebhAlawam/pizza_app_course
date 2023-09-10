<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">


</head>

<body>

@include('admin.layout.navbar')

<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <!-- start sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="{{ route('pizza.index') }}" class="list-group-item list-group-item-action"> All pizza </a>
                            <a href="{{ route('pizza.create') }}" class="list-group-item list-group-item-action"> Add new pizza</a>
                            <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action"> All Categories </a>
                            <a href="" class="list-group-item list-group-item-action"> Customers </a>
                            <a href="" class="list-group-item list-group-item-action"> User Orders </a>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar -->

    <!--start content-->
		
		@yield('content')

    <!--end content-->


        </div>
    </div>
    	
</main>

        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

</body>
</html>
