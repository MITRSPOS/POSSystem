<!DOCTYPE html><html><head><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"><title>MITRS POS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script> </head><body class="bg-dark"><div class="container"><div class="row lead"><div class="col-12 col-md-12 p-3 p-md-5 "></div>
<div class="col-12 col-md-4"></div>
<div class="col-12 col-md-4 p-3 p-md-5 login-box">
    <!-- <h1 class="text-center display-3">
    <strong>Welcome to MITRS</strong></h1> -->

    <h1 class="text-center text-warning display-3">
    <strong>Welcome </strong></h1>
    <h1 class="text-center text-warning display-4">
    <strong> MITRS</strong></h1>

    
     @if($errors->any())<div class="alert-danger"> @foreach($errors->all() as $error) - {{ $error }} @endforeach</div> @endif
    <form action="{{ route('login') }}" method="POST"><div class="input-group mb-3">
        <div class="input-group-text bg-warning text-white"> <small>Email</small></div> 
        <input type="email" class="form-control" value="{{ old('email') }}" 
        placeholder="Email Address" name="email" required><div class="input-group-append">
            <div class="input-group-text bg-warning text-white"> <svg class="bi bi-envelope-fill" 
            width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" 
             d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/> </svg>
            </div></div></div><div class="input-group mb-3"><div class="input-group-text bg-warning text-white">
                 <small>Pass</small></div> <input type="password" value="{{ old('password') }}" 
                 required class="form-control" placeholder="Password" name="password"><div class="input-group-append">
                     <div class="input-group-text bg-warning text-white"> 
                         <svg class="bi bi-shield-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" 
                         xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" 
                         d="M5.187 1.025C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815zm3.328 6.884a1.5 1.5 0 1 0-1.06-.011.5.5 0 0 0-.044.136l-.333 2a.5.5 0 0 0 .493.582h.835a.5.5 0 0 0 .493-.585l-.347-2a.5.5 0 0 0-.037-.122z"/> </svg>
                        </div></div></div>
                        <div class="row">
                            <div class="col"> @csrf
                                 <input type="submit" class="btn btn-lg btn-outline-warning btn-block" value="Get Start →"></div></div>
                                </form></div></div></div></div>
                                 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
                                 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
                                 crossorigin="anonymous"></script> 
                                 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                                  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                                   crossorigin="anonymous"></script> </body></html>