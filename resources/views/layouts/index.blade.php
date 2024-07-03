<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <style>
        .green{
            background-color: #0080008a;
        }
        .red{
            background-color:#dd7f7f ;
        }

    </style>

</head>
<body>
<input type="checkbox" id="menu-toggle">
<div class="sidebar">
    <div class="side-header">
        <h3>T<span>asks</span></h3>
    </div>

    <div class="side-content">


        <div class="side-menu">
            <ul>
                <li>
                    <a href="/dashboard" class="active">
                        <span class="las la-home"></span>
                        <small>Dashboard</small>
                    </a>
                </li>


                <li>
                    <a href="/create_teak" class="active">
                        <span class="las la-clipboard-list"></span>
                        <small>Add Task</small>
                    </a>
                </li>


                <li>
                    <a href="{{url('logout')}}" class="active">
                        <span class="las la-power-off"></span>
                        <small>Logout</small>
                    </a>



                </li>




            </ul>
        </div>
    </div>
</div>

<div class="main-content">

    <header>
        <div class="header-content">
            <div class="" style="display: flex;align-items: center;">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>

                </label>
                <h3 style="margin-top: 18px;margin-left: 20px;">Ahmed Amshoosh</h3>
            </div>

            <!-- <div class="header-menu">

                <a href="#" style="color: black;">
                    <div class="user">

                        <span class="las la-power-off" style="font-size: 22px;"></span>
                        <span style="font-size: 18px;">Logout</span>
                    </div>
                </a>

            </div> -->
        </div>
    </header>


    <main>

        <div class="page-header">
            <h1>Dashboard</h1>
            <!-- <small>Home / Dashboard</small> -->
        </div>

        <div class="page-content">

           @yield('content')

        </div>

    </main>

</div>
</body>
</html>
