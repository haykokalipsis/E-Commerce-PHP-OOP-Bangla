


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>

</head>
<body>
<div class="container_12">
    <div class="grid_12 header-repeat">
        <div id="branding">
            <div class="floatleft logo">
                <img src="img/livelogo.png" alt="Logo" />
            </div>
            <div class="floatleft middle">
                <h1>Training with live project</h1>
                <p>www.trainingwithliveproject.com</p>
            </div>
            <div class="floatright">
                <div class="floatleft">
                    <img src="img/img-profile.jpg" alt="Profile Pic" />
                </div>


                <div class="floatleft marginleft10">
                    <ul class="inline-ul floatleft">
                        <li>Hello haykokalipsis</li>
                        <li><a href="?action=logout">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="grid_12">
        <ul class="nav main">
            <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>
            <li class="ic-form-style"><a href=""><span>User Profile</span></a></li>
            <li class="ic-typography"><a href="changepassword.php"><span>Change Password</span></a></li>
            <li class="ic-grid-tables"><a href="inbox.php"><span>Inbox</span></a></li>
            <li class="ic-charts"><a href=""><span>Visit Website</span></a></li>
        </ul>
    </div>
    <div class="clear">
    </div>
    <div class="grid_2">
        <div class="box sidemenu">
            <div class="block" id="section-menu">
                <ul class="section menu">
                    <li><a class="menuitem">Site Option</a>
                        <ul class="submenu">
                            <li><a href="titleslogan.php">Title & Slogan</a></li>
                            <li><a href="social.php">Social Media</a></li>
                            <li><a href="copyright.php">Copyright</a></li>

                        </ul>
                    </li>

                    <li><a class="menuitem">Update Pages</a>
                        <ul class="submenu">
                            <li><a>About Us</a></li>
                            <li><a>Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a class="menuitem">Slider Option</a>
                        <ul class="submenu">
                            <li><a href="slider_add.php">Add Slider</a> </li>
                            <li><a href="sliderl_ist.php">Slider List</a> </li>
                        </ul>
                    </li>
                    <li><a class="menuitem">Category Option</a>
                        <ul class="submenu">
                            <li><a href="category_add.php">Add Category</a> </li>
                            <li><a href="category_list.php">Category List</a> </li>
                        </ul>
                    </li>
                    <li><a class="menuitem">Product Option</a>
                        <ul class="submenu">
                            <li><a href="product_add.php">Add Product</a> </li>
                            <li><a href="product_list.php">Product List</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="grid_10">
        <div class="box round first grid">
            <h2>Category List</h2>
            <div class="block">
                <table class="data display datatable" id="example">
                    <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--                    -->
                    <tr class="odd gradeX">
                        <td>14</td>
                        <td>Писечки</td>
                        <td>
                            <a href="category_edit.php?category_id=14">Edit</a>
                            ||
                            <a
                                onclick="return confirm('Are you sure you want to delete this?')"
                                href="category_edit.php?category_id=14">Delete
                            </a>
                        </td>
                    </tr>

                    <!--                    --><!--                        No Categories-->
                    <!--                    --><!---->
                    <!--						<tr class="even gradeC">-->
                    <!--							<td>02</td>-->
                    <!--							<td>Explorer </td>-->
                    <!--							<td><a href="">Edit</a> || <a href="">Delete</a></td>-->
                    <!--						</tr>-->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();
        });
    </script>
    <div class="clear"></div>
</div>
<div class="clear">
</div>
<div id="site_info">
    <p>
        &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
    </p>
</div>
</body>
</html>

