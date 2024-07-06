<?php

include 'connection.php';

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
   $des = mysqli_real_escape_string($conn, $_POST['des']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'image/' . $image;

   $select_destination_name = mysqli_query($conn, "SELECT name FROM `destination` WHERE name = '$name'") or die('query failed');

   if (mysqli_num_rows($select_destination_name) > 0) {
      $message[] = 'Location details already added';
   } else {
      $add_destination_query = mysqli_query($conn, "INSERT INTO `destination`(name, des, image) VALUES('$name', '$des', '$image')") or die('query failed');

      if ($add_destination_query) {
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Destination</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>

<body>



   <!-- product CRUD section starts  -->

   <section class="add-products">

      <h1 class="title">City</h1>

      <form action="" method="post" enctype="multipart/form-data">
         <h3>Add City </h3>
         <input type="text" name="name" class="box" placeholder="Enter Location name" required>
         <input type="text" name="des" class="box" placeholder="Location description" required>

         <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
         <input type="submit" value="Add Loctaion" name="Add_Loctaion" class="btn">
      </form>

   </section>

   <!-- product CRUD section starts  -->

   <section class="add-products">

      <h1 class="title">Destination</h1>

      <form action="" method="post" enctype="multipart/form-data">
         <h3>Add Destination to Available Product</h3>
         <label for="product_name">Select Product Name:</label>
         <select name="product_id" id="product_id">
            <?php
            // Fetch product names and IDs from the database
            $product_query = mysqli_query($conn, "SELECT id, name FROM `Product`") or die('Query failed');
            while ($row = mysqli_fetch_assoc($product_query)) {
               echo "<option value='{$row['id']}'>{$row['name']}</option>";
            }
            ?>
         </select>
         <br><br>
         <input type="text" name="name" class="box" placeholder="Destination Name" required>
         <input type="text" name="description" class="box" placeholder="Destination Description" required>
         <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
         <input type="submit" value="Add Destination" name="Add_Destination" class="btn">
      </form>




   </section>

   <!-- custom admin js file link  -->
   <script src="js/admin_script.js"></script>

</body>

</html>