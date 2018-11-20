<?php
    require_once 'inc/header.php';
    require_once 'inc/sidebar.php';
    require_once '../classes/Category.php';
?>

<?php
    // redirect to category lists if url does'nt contain category_id
    if( ! isset($_GET['category_id']) || $_GET['category_id'] === NULL)
        echo "<script>window.location = 'category_list.php';</script>";
    else
        $category_id = $_GET['category_id'];
        $category_id = preg_replace('~[^-a-zA-Z0-9_]~', '', $_GET['category_id']);


    $category = new Category();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $category_name = $_POST['category_name'];
        $updatedCategory = $category->update($category_id, $category_name);
    }

    $category_by_id = $category->get($category_id);
?>

    <div class="grid_10">
        <div class="box round first grid">
            <h2>Update Category</h2>
            <div class="block copyblock">

                <?php
                    if(isset($updatedCategory))
                        echo $updatedCategory;
                ?>

                <?php if($category_by_id): ?>

<!--                В методе убран action, если прописана собственная страница, почему то не работает-->
                    <form action="" method="post">
                        <table class="form">
                            <tr>
                                <td>
                                    <input
                                        type="text"
                                        name="category_name"
                                        placeholder="Enter Category Name..."
                                        class="medium"
                                        value="<?=$category_by_id['name']; ?>"
                                    />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" Value="Save" />
                                </td>
                            </tr>
                        </table>
                    </form>

                <?php else: ?>
                    Category not found.
                <?php endif; ?>

            </div>
        </div>
    </div>

<?php include 'inc/footer.php';?>