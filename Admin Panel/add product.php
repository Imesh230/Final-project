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

   // Delete Product
   if (isset($_GET['delete_id'])) {
      $delete_id = $_GET['product_id'];
      $delete_query = "DELETE FROM product WHERE id = '$delete_id'";
      if (mysqli_query($conn, $delete_query)) {
         $message[] = 'Product deleted successfully.';
      } else {
         $message[] = 'Error deleting product.';
      }
   }

   // Update Product
   if (isset($_POST['update_product'])) {
      $id = $_POST['product_id'];
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $des = mysqli_real_escape_string($conn, $_POST['des']);
      // Here you can add update logic for image if needed

      $update_query = "UPDATE product SET name = '$name', des = '$des' WHERE id = '$id'";
      if (mysqli_query($conn, $update_query)) {
         $message[] = 'Product updated successfully.';
      } else {
         $message[] = 'Error updating product.';
      }
   }

   if (isset($_POST['Add_Loctaion'])) {
      $name = mysqli_real_escape_string($conn, $_POST['name']);
   $des = mysqli_real_escape_string($conn, $_POST['des']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'image/' . $image;

   $select_product_name = mysqli_query($conn, "SELECT name FROM `product` WHERE name = '$name'") or die('query failed');

   if (mysqli_num_rows($select_product_name) > 0) {
      $message[] = 'Location details already added';
   } else {
      $add_product_query = mysqli_query($conn, "INSERT INTO `product`(name, des, image) VALUES('$name', '$des', '$image')") or die('query failed');

      if ($add_product_query) {
         if ($image_size > 2000000) {
            $message[] = 'image size is too large';
         } else {

            $message[] = 'Location added successfully!';
         }
      } else {
         $message[] = ' Location not be added!';
      }
   }
   }

   if (isset($_POST['Add_Destination'])) {
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $description = mysqli_real_escape_string($conn, $_POST['description']);
      $image = $_FILES['image']['name'];
      $image_size = $_FILES['image']['size'];
      $image_tmp_name = $_FILES['image']['tmp_name'];
      $image_folder = '../CTO/Admin/image/destination_images/' . $image;
   
      $select_destination_name = mysqli_query($conn, "SELECT name FROM `destination` WHERE name = '$name'") or die('query failed');
   
      if (mysqli_num_rows($select_destination_name) > 0) {
         $message[] = 'Destination details already added';
      } else {
         $add_destination_query = mysqli_query($conn, "INSERT INTO `destination`(name, description, image) VALUES('$name', '$description', '$image_folder')") or die('query failed');
   
         if ($add_destination_query) {
            if ($image_size > 2000000) {
               $message[] = 'Image size is too large';
            } else {
               move_uploaded_file($image_tmp_name, $image_folder);
               $message[] = 'Destination added successfully!';
            }
         } else {
            $message[] = 'Destination could not be added!';
         }
      }
   }
   
   ?>
   <div class="container">
      <section class="add-products">
         <h1>Add Location</h1>
         <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Location Name" required>
            <textarea name="des" placeholder="Location Description" required></textarea>
            <input type="file" name="../CTO/Admin/image/destination_images/" accept="image/jpg, image/jpeg, image/png" required>
            <input type="submit" value="Add Location" name="Add_Loctaion">
         </form>
      </section>

      <section class="add-products">
         <h1>Add Destination</h1>
         <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Destination Name" required>
            <textarea name="description" placeholder="Destination Description" required></textarea>
            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" required>
            <input type="submit" value="Add Destination" name="Add_Destination">
         </form>
      </section>
      <head>
      <link rel="stylesheet" href="assets/css/product.css">
      </head>
      <section class="product-list">
         
         <h1>Product List</h1>
         <?php
         // Fetch products from database
         $products_query = mysqli_query($conn, "SELECT * FROM product") or die('Query failed');
         if (mysqli_num_rows($products_query) > 0) {
            echo '<ul>';
            while ($row = mysqli_fetch_assoc($products_query)) {
               echo '<li>';
               echo $row['name'] . ' - ' . $row['des'];
               echo '<a href="?delete_id=' . $row['id'] . '">Delete</a>';
               echo '<form action="" method="post">';
               echo '<input type="hidden" name="product_id" value="' . $row['id'] . '">';
               echo '<input type="text" name="name" value="' . $row['name'] . '" placeholder="Product Name">';
               echo '<textarea name="des" placeholder="Product Description">' . $row['des'] . '</textarea>';
               echo '<input type="submit" name="update_product" value="Update">';
               echo '</form>';
               echo '</li>';
            }
            echo '</ul>';
         } else {
            echo 'No products found.';
         }
         ?>
      </section>
   </div>
</body>
</html>
