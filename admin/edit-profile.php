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
                    <form id="edit-profile">
                        <h2>Name</h2>
                        <label>Username (required)</label>
                        <input type="text" required> <span>Usernames cannot be changed.</span><br>
                        
                        <label>First Name(required)</label>
                        <input type="text" required><br>
                        
                        <label>Last Name (required)</label>
                        <input type="text" required><br>
                        
                        <label>Student ID (required)</label>
                        <input type="text" required><br>
                        <label for="">Committee (required)</label>
                        <select name="committee" required>
                            <option value="#">Select</option>
                            <option value="lucc-committee-2019">LUCC Committee 2019</option>
                            <option value="lucc-committee-2018">LUCC Committee 2018</option>
                            <option value="lucc-committee-2017">LUCC Committee 2017</option>
                            <option value="lucc-committee-2016">LUCC Committee 2016</option><option value="not-a-member">Not a member</option>
                        </select>
                        <span>Select (Not a member) if you are not a registered member of LUCC</span>
                        
                        <h2>Contact Info</h2>
                        <label>Email (required)</label>
                        <input type="email"><br>
                        
                        <label>Phone (optional)</label>
                        <input type="text"><br>
                        
                        <label>Website (optional)</label>
                        <input type="text"><br>
                        
                        <h2>About Yourself</h2>
                        <label style="vertical-align: top;">Biographical Info</label>
                        <textarea name="" id="" rows="5"></textarea><br>
                        
                        <label>Profile Picture</label>
                        <input type="file" name="pic" accept="image/*">
                        
                        <h2>Account Management</h2>
                        <label>New Password</label>
                        <input type="password" maxlength="8"><br>
                        
                        <input type="submit" value="Update Profile">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body></html>