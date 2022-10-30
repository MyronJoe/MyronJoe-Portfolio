<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myron Portfolio</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- <link rel="icon" href="../../assets/images/Mj-fav-icon.png" /> -->
    <style>

        .submenu ul {
            display: none;
            position: absolute;
            background-color: white;
            padding: 5px 10px 5px 0px;
            transition: 2s ease-out;
            z-index: 500;
        }

        .submenu ul li a {
            color: #040820;
            display: inline-block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .submenu ul li a:last-child {
            margin-bottom: 0px;
        }

        .submenu ul li a:hover {
            color: orangered
        }

        .handler {
            position: relative;
        }

        .handler:hover .submenu ul {
            display: block;
            

        }
        
    </style>
</head>
<body>
    <nav style="display: flex;">
        <div class="logo">
            <h3><a href="">MYRON-BLOG</a></h3>
        </div>
        <div class="user">
            <ul>

                <li class="handler mt-2">
                    <a href="#" ><span class="fa fa-user mr-1"></span>Joe</a>

                    <div class="submenu">
                        <ul style="top:30px; right:0px">
                            <li><a href=""><span style="display: inline; margin-right:5px;" class="fa-solid fa-arrow-right-from-bracket"></span>Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="section" style="display: flex;">
        <div class="lside">
            <input type="checkbox" id="check1">
            <label for="check1">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>
            <div class="sidebar1">
                <header>
                    <a href="">Dashboard</a>
                </header>
                <ul>
                    <li><a href=""><i class="fas fa-qrcode"></i>Manage Post</a></li>
                    <li><a href=""><i class="fas fa-calendar-week"></i>Manage User</a></li>
                    <li><a href=""><i class="fas fa-stream"></i>Manage Topic</a></li>
                </ul>
            </div>
        </div>

        <div class="rside">

            <div class="adduser-sec">
                <h2>MyronBlog - Dashboard</h2>


            </div>




        </div>
    </section>

</body>

</html>