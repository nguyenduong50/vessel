<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gnmarine.online</title>
        <link href="{{asset('frontend/css/style-app-layout.css')}}" rel="stylesheet" />
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('frontend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- JQuery -->
        <script type="text/javascript" src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>

            .button-toggle-sidebar{
                position: absolute;
                top: 5px;
                left: 10px;
                display: none;
                z-index: 10;
            }

            
            @media (max-width: 960px){

            }

            @media (max-width: 768px){
                .app-layout-content aside{
                    display: none;
                }
                
                .button-toggle-sidebar{
                    display: block;
                }
            }
        </style>
    </head>

    <body class="bg-white">
        @guest
        @else
        <button 
            class="btn btn-primary button-toggle-sidebar" 
            type="button" 
            data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasWithBothOptions" 
            aria-controls="offcanvasWithBothOptions"
        >
            <i class=" fas fa-align-justify"></i>
        </button>
    
        <div class="offcanvas offcanvas-start pe-1" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    Menu
                </a>
                <a href="{{route('search')}}" class="list-group-item list-group-item-action">List Vessel</a>
                <a href="#" class="list-group-item list-group-item-action">Report</a>
                <a 
                    href="{{route('logout')}}" 
                    type="button" 
                    class="list-group-item list-group-item-action text-decoration-none"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                >
                    <span>Logout</span>
                </a>
            </div>
        </div>
        <div class="app-layout-content">
            <aside class="border">
                <ul style="padding-left: 0px">
                    <li>
                        <a href="{{route('search')}}" class="text-decoration-none text-secondary-emphasis" >List Vessel</a>
                    </li>
                    <li>
                        <a class="text-decoration-none text-secondary-emphasis">Report</a>
                    </li>
                    <li>
                        <a 
                            href="{{route('logout')}}" 
                            type="button" 
                            class="text-decoration-none"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        >
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </aside>
            <main class="mt-3">
                @yield('content')
            </main>
        </div>
        @endguest
        <script src="{{asset('frontend/js/exportToExcel.js')}}"></script>
        <!-- Vendor js -->
        <script src="{{asset('frontend/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <!-- <script src="{{asset('frontend/js/app.min.js')}}"></script> -->
    </body>
</html>
