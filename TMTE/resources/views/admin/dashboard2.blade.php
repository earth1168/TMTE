<head>
    <meta charset="UTF-8">
    <title>Admin dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,800" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link rel="stylesheet" href="{{asset('./css/adminRole/dashboardStyle.css')}}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="primary-nav">

        <button href="#" class="hamburger open-panel nav-toggle">
            <span class="screen-reader-text">Menu</span>
        </button>

        <nav role="navigation" class="menu">

            <a href="#" class="logotype">TMTE (Admin)</a>

            <div class="overflow-container">

                <ul class="menu-dropdown">

                    <li><a href="#">Add media</a><span class="icon"><i class="fa fa-dashboard"></i></span></li>

                    <li><a href="#">Dashboard</a><span class="icon"><i class="fa fa-heart"></i></span></li>

                    <li><a href="#">aaa</a><span class="icon"><i class="fa fa-envelope"></i></span></li>

                    <!-- <li class="menu-hasdropdown">
                        <a href="#">Settings</a><span class="icon"><i class="fa fa-gear"></i></span>

                        <label title="toggle menu" for="settings">
                            <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                        </label>
                        <input type="checkbox" class="sub-menu-checkbox" id="settings" />

                        <ul class="sub-menu-dropdown">
                            <li><a href="">Profile</a></li>
                            <li><a href="">Security</a></li>
                            <li><a href="">Account</a></li>
                        </ul>
                    </li> -->

                </ul>

            </div>

        </nav>

    </div>

    <div class="new-wrapper">

        <div id="main">

            <div id="main-contents">
                <h1>test</h1>
            </div>

        </div>

    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="./script.js"></script>
    <!-- <script src="js/adminRole/script.js"></script> -->

</body>