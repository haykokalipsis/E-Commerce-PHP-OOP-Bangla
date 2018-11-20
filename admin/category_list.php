<?php
require_once '../classes/Category.php';
require_once 'inc/header.php';
require_once 'inc/sidebar.php';
?>

<?php
    $category = new Category();
    if(isset($_GET['action']) && $_GET['action'] == 'delete') {
        $category_id = $_GET['category_id'];
        $category_id = preg_replace('~[^-a-zA-Z0-9_]~', '', $_GET['category_id']);
        $result = $category->delete($category_id);
//        echo $result;
    }

    $all_categories = $category->index();
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">   
                    <?php echo $result ?? null; ?>
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
                                            href="?action=delete&category_id=<?php echo $single_category['id']; ?>">Delete
<!--                                            href="?del-cat=--><?php //echo $single_category['id']; ?><!--">Delete-->
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
<?php include 'inc/footer.php';?>

