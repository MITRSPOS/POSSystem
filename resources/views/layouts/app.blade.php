<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="x-ua-compatible" content="ie=edge"> <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> <title>POS System</title><link rel="stylesheet" href="{{asset('css/app.css')}}"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"></head>
<body><div class="wrapper"> 






    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
     <a class="navbar-brand" href="#"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
         <span class="navbar-toggler-icon"></span> </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent"><ul class="navbar-nav mr-auto">
 
         <li class="nav-item active"> <a href="{{ route('users.index') }}" class="nav-link">
             User</a></li>
              <li class="nav-item active"> <a href="{{ route('clients.index') }}" class="nav-link">
              Customer</a></li>
              <li class="nav-item active"> 
               </li><li class="nav-item active"> <a href="{{ route('products.index') }}" class="nav-link"> Product</a>
          </li><li class="nav-item active"> <a href="{{ route('sales.create') }}" class="nav-link">Invoice POS</a></li>
          <li class="nav-item active"> <a href="{{ route('sales.index') }}" class="nav-link">Receipt</a></li> 
         
          </li><li class="nav-item active ">
        
              <form action="{{ route('logout') }}" method="POST">@csrf <button onclick="return confirm('Yakin akan log out ?')" type="submit" class="btn btn-outline-danger "> <svg class="bi bi-exclamation-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" /> </svg>
              logout</button></form>
              
            </li></div> </nav><div class="content-wrapper">@include('auth.pos')@yield('content')@include('auth.passwords.admin')</div></div> 
              <script src="{{ asset('js/bos.js') }}"></script> <script src="{{ asset('js/app.js') }}"></script>
           



          </body></html>
