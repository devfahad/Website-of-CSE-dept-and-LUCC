<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Dashboard | LUCC</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--[if IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 user-profile">
                <div class="float-left">
                    <p><i class="fas fa-home"></i> Leading University Computer Club</p>
                </div>
                <div class="float-right">
                    Hello,
                    <a href="user-profile.html"><span id="user-profile-name">User Name</span>
                        <img src="../images/users/user-01.jpg" alt="" class="rounded-circle">
                    </a>
                    <a href="#" id="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <ul class="top">
                        <li><a href="index.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li><a href="../index.html"><i class="fas fa-home"></i> Visit Website</a></li>
                        <li class="active"><a href="edit-profile.html"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
                    </ul>
                    <ul class="bottom">
                        <li class="has-menu-item">
                            <a href="#"><i class="fas fa-blog"></i> Posts</a>
                            <ul class="dropdown_menu">
                                <li><a href="all-posts.html">All Posts</a></li>
                                <li><a href="add-new-post.html">Add New</a></li>
                            </ul>
                        </li>
                        <li class="has-menu-item">
                            <a href="#"><i class="fas fa-calendar-alt"></i> Events</a>
                            <ul class="dropdown_menu">
                                <li><a href="../events.html">View Events</a></li>
                                <li><a href="all-events.html">All Events</a></li>
                                <li><a href="add-new-event.html">Add New</a></li>
                            </ul>
                        </li>
                        <li class="has-menu-item">
                            <a href="#"><i class="fas fa-images"></i> Gallery</a>
                            <ul class="dropdown_menu">
                                <li><a href=../"gallery.html">View Gallery</a></li>
                                <li><a href="all-photos.html">All Photos</a></li>
                                <li><a href="upload-photo.html">Upload</a></li>
                            </ul>
                        </li>

                        <li class="has-menu-item">
                            <a href="#"><i class="fas fa-user"></i> Users</a>
                            <ul class="dropdown_menu">
                                <li><a href="all-users.html">All Users</a></li>
                                <li><a href="pending-users.html">Pending Requests</a></li>
                            </ul>
                        </li>
                        <li class="has-menu-item">
                            <a href="#"><i class="fas fa-users"></i> Committee</a>
                            <ul class="dropdown_menu">
                                <li><a href="committee-lists.html">Committee Lists</a></li>
                                <li><a href="all-users.html">Add New</a></li>
                            </ul>
                        </li>
                        <li class="has-menu-item">
                            <a href="#"><i class="fas fa-money-check-alt"></i> Due/Payments</a>
                            <ul class="dropdown_menu">
                                <li><a href="view-all-user-payment-lists.html">View All</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="admin-editor.html"><i class="fas fa-user-shield"></i> Admins/Editors</a>
                        </li>
                        <li>
                            <a href="comments.html"><i class="fas fa-comments"></i> Comments</a>
                        </li>
                        <li class="has-menu-item">
                            <a href="#"><i class="fas fa-envelope"></i> Contact</a>
                            <ul class="dropdown_menu">
                                <li><a href="contact-forms.html">Contact Forms</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="user-profile-info">
                        <h2>Profile Picture</h2><br>
                        <img class="rounded" src="../images/users/user-01.jpg" alt="">
                        
                        <br><br>
                        
                        <h2>Name</h2><br>
                        <p>Username : <span id="username"> value</span></p>
                        <p>First Name : <span id="userFirstName"> value</span></p>
                        <p>Last Name : <span id="userLastName"> value</span></p>
                        <p>NickName : <span id="userNickname"> value</span></p>
                        
                        <br>
                        
                        <h2>Contact Info</h2><br>
                        <p>Email: <span id="userEmail">value</span></p>
                        <p>Phone: <span id="userPhone">value</span></p>
                        <p>Website: <span id="userWebsite">value(if there is no value, then this field will be empty)</span></p>
                        
                        <br>
                        
                        <h2>About Yourself</h2><br>
                        <p>Biographical Info : <span id="userBio">value</span></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</body></html>