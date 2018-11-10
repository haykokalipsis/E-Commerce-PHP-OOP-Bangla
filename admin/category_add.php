<?php
    require_once 'inc/header.php';
    require_once 'inc/sidebar.php';
    require_once '../classes/Category.php';
?>

<?php
    $category = new Category();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $category_name = $_POST['category_name'];
        $insertedCategory = $category->insert($category_name);
    }
?>

    <div class="grid_10">
        <div class="box round first grid">
            <h2>Add New Category</h2>
           <div class="block copyblock">

             <?php
                if(isset($insertedCategory))
                    echo $insertedCategory
             ?>

             <form action="category_add.php" method="post">
                <table class="form">
                    <tr>
                        <td>
                            <input type="text" name="category_name" placeholder="Enter Category Name..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" Value="Save" />
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php';?>