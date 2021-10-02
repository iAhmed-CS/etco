<?php
session_start();
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon " type="image/png" href="Images/Logo3.ico">
    <title> ETCO </title>
    <link rel = "Stylesheet" type = "text/css" href = "style2.css">
</head>
<body>
    <!-------------------- Header -------------------->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(80, 0, 126);">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="Images/Logo.png" alt="logo" style="width:90px;">
        </a>
        <!-- Links -->
        <ul class="navbar-nav sticky-top mr-auto" style="background-color: #12043e;">
            <li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#.html"><i class="fa fa-fw fa-info"></i>Service</a></li>
            <li class="nav-item"><a class="nav-link" href="#.html"><i class="fa fa-fw fa-users"></i>About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#.html"><i class="fa fa-fw fa-envelope"></i>Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fa fa-fw fa-user"></i>Logout</a></li>
        </ul>
        <!-- Search -->
            <form class="form-inline my-2 my-lg-0" action="Search.php" method="POST">
                <input class="form-control mr-sm-2" style="border-width: 1px;border-color: #12043e;" type="text" placeholder="Key Words ...">
                <button class="btn btn-success" style="background-color: #12043e; border-color: #12043e;" type="submit">Search</button>
            </form>
    </nav>
    <nav>
        <!-- Links2 -->
        <ul class="links2">
            <li class="list2"><a href="#.html">Products</a></li>
            <li class="list2"><a href="#.html">News</a></li>
            <li class="list2"><a href="#.html">Divisions</a></li>
            <div style="color: white; margin-left: 45%;">
                Welcome <?php echo $user_data['user_name']; ?>
            </div>
        </ul>
    </nav>
    <!-------------------- Body -------------------->
    <header>
        <img src="Images/Back.jpeg" alt="Back image" width="100%">
        <br>
    </header>
    <br />
    <div style="margin-left: 20%;">
        <form class="form-inline my-2 my-lg-0" action="Search.php" method="POST">
            <input class="text" style="width: 70%; background: transparent; border-color: rgb(80, 0, 126); color: white;" type="text" placeholder="Looking For ...">
            <button class="btnGo"  type="submit"><i class="fa fa-fw fa-search"></i>Go</button>
        </form>
    </div>
    <br />
    <br />
    <div class="topic">
        <h3 class="subject">Products</h3>
        <br /><br /><br />
        <br /><br /><br />
        <br /><br /><br />
        <br /><br /><br />
    </div>
    <br /><hr /><br />
    <div class="topic">
        <h3 class="subject">News</h3>
        <br /><br /><br />
        <br /><br /><br />
        <br /><br /><br />
        <br /><br /><br />
    </div>
    <!-------------------- Footer -------------------->
    <br />
    <br />
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(80, 0, 126);">
        <ul class="navbar-nav sticky-top mr-auto" style="background-color: #12043e; width: 100%;">
            <li style="width: 40%;"><a href="#.html" style="color: rgb(139, 139, 139); text-decoration: none;">Products</a><hr />
                <div class="footTopic">
                    <h6>Qabas</h6>
                    <h6>Beyond</h6>
                </div>
            </li>
            <li style="width: 40%;"><a href="#.html" style="color: rgb(139, 139, 139); text-decoration: none;">Services</a><hr />
                <div class="footTopic">
                    <h6>Financial Services</h6>
                    <h6>Manufacturing</h6>
                    <h6>Analytics</h6>
                    <h6>Cost Management</h6>
                    <h6>Blockchain</h6>
                </div>
            </li>
            <li style="width: 40%;"><a href="#.html" style="color: rgb(139, 139, 139); text-decoration: none;">Future</a><hr />
                <div class="footTopic">
                    <h6>Tech</h6>
                    <h6>Careers</h6>
                    <h6>Business</h6>
                    <h6>Videos</h6>
                    <h6>Entertainment</h6>
                </div>
            </li>
            <li style="width: 40%;"><a href="#.html" style="color: rgb(139, 139, 139);; text-decoration: none;">Support</a><hr />
                <div class="footTopic">
                    <h6>Contact Us: <br />
                        <i class="fa fa-fw fa-envelope"></i>
                        <i class="fa fa-fw fa-twitter"></i>
                        <i class="fa fa-fw fa-instagram"></i>
                    </h6>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(80, 0, 126);">
        <ul class="navbar-nav sticky-top mr-auto" style="background-color: #12043e; width: 60%; margin-left: 20%">
            <li class="nav-item" style="width: 35%;"><a class="nav-link" href="mailto:info@etco.om"><i class="fa fa-fw fa-envelope"></i> Email</a></li>
            <li class="nav-item" style="width: 35%;"><a class="nav-link" href="https://twitter.com/etco_om?lang=en"><i class="fa fa-fw fa-twitter"></i> Twitter</a></li>
            <li class="nav-item" style="width: 35%;"><a class="nav-link" href="https://instagram.com/etco_om?utm_medium=copy_link"><i class="fa fa-fw fa-instagram"></i> Instagram</a></li>
        </ul>
    </nav>

    <div style="color:rgb(139, 139, 139); background-color: #12043e; text-align: center;">
        © 2021 Copyright: <a href="https://etco.om/" style="color: white;">ETCO 2021</a>
    </div>
</body>
</html>