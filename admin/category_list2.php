<?php
require_once '../libraries/Session.php';
Session::checkSession();
require_once '../classes/Category.php';
?>

<?php
    $category = new Category();
    $all_categories = $category->index();
?>

<?php require_once 'inc/head.php'; ?>

<body>
    <div class="container_12">
        <?php require_once 'inc/header.php';?>
        <?php require_once 'inc/nav.php';?>
        <?php require_once 'inc/sidebar.php';?>

    <!-- Content -->

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
                        <!--                    --><?php //if(isset($all_categories)): ?>

                        <?php foreach ($all_categories as $single_category):?>
                            <tr class="odd gradeX">
                                <td><?php echo $single_category['id']; ?></td>
                                <td><?php echo $single_category['name']; ?></td>
                                <td>
                                    <a href="category_edit.php?category_id=<?php echo $single_category['id']; ?>">Edit</a>
                                    ||
                                    <a
                                            onclick="return confirm('Are you sure you want to delete this?')"
                                            href="category_edit.php?category_id=<?php echo $single_category['id']; ?>">Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <!--                    --><?php //else: ?>
                        <!--                        No Categories-->
                        <!--                    --><?php //endif; ?>
                        <!---->
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



    <!-- End Content -->

    </div><!-- class="container_12" -->

    <?php require_once 'inc/footer.php';?>

</body>
</html>

