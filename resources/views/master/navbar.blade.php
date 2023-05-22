 
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Online Shoes
                </title>

                <style>
                    .{
                        margin:0px;
                    }
                    .nav{
                        display:flex; 
                        justify-content:space-between; 
                        align-items:center;
                        background-color: lightblue;
                    }
                    a{
                        text-decoration:none;
                        color:black;
                        margin:20px;
                        border-radius:8px;
                        background-color:pink;
                        padding:10px;
                    }
                    </style>
                               </head>
            <body>
                <div class="nav" >
                <div class="logo">
                    <h1>Online Shoes shopping</h1>
                </div>
                <div class="button">
                @if (Route::has('login'))
                
                @auth
                      @else
                    <a href="{{ route('login') }}" >Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" >Register</a>
                       
                    @endif
                @endauth
                <a href="{{ route('dashboard') }}" >Dashboard</a>

                </div>
                
            </div>
        @endif

                </div>
        

@yield('content')

            </body>
            </html>

           