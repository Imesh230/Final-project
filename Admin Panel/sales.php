<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Location and Destination</title>
   <link rel="stylesheet" href="assets/css/product.css">
</head>
<body>
<?php
include 'db_connect.php';

if (isset($_POST['Add_Loctaion'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $des = mysqli_real_escape_string($conn, $_POST['des']);
    $price = mysqli_real_escape_string($conn, $_POST['price']); // Added item price
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../CTO/images/' . $image;

    $select_product_name = mysqli_query($conn, "SELECT name FROM `item` WHERE name = '$name'") or die('query failed');

    if (mysqli_num_rows($select_product_name) > 0) {
        $message[] = 'Item details already added';
    } else {
        $add_product_query = mysqli_query($conn, "INSERT INTO `item`(name, des, price, image) VALUES('$name', '$des', '$price', '$image')") or die('query failed');

        if ($add_product_query) {
            if ($image_size > 2000000) {
                $message[] = 'image size is too large';
            } else {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'Item added successfully!';
            }
        } else {
            $message[] = ' Item not be added!';
        }
    }
}

?>
<div class="container">
    <section class="add-products">
        <h1>Add Items</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Items Name" required>
            <textarea name="des" placeholder="Item Description" required></textarea>
            <input type="text" name="price" placeholder="Items price" required> <!-- Added input field for item price -->
            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" required>
            <input type="submit" value="Add Item" name="Add_Loctaion">
        </form>
    </section>
</div>


   </div>
 </body>
</html>