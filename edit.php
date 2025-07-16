<?php
require_once "dbconn.php";
if(!isset($_SESSION))
{
    session_start();
}
$sql = "select * from categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll();

if(isset($_GET['did'])) //upon clicking the delete button
{
    $pId = $_GET['did'];
    $sql = "delete from item where pId=?";
    $stmt = $conn->prepare($sql);
    $status = $stmt->execute([$pId]);
    if($status)
    {
        $_SESSION['deleteSuccess'] = "Product with id $pId has been deleted successfully.";
        header("Location:viewitem.php");
    }
}//delete end

$product = null;

if(isset($_GET['eid']))
{
    $pId = $_GET['eid']; // id from link
    try{
        $sql = "select p.pId, p.pName,
                p.price, p.description, 
                p.quantity,p.image, c.cname as category
                from products p, categories c
                where p.category = c.category_id AND 
                p.pId = ?";

                $stmt = $conn->prepare($sql);
                $stmt->execute([$pId]);
                $product = $stmt->fetch();

    }catch(PDOException $e)
    {
        echo $e->getMessage();
    }

}// end if

// update item

if(isset($_POST['updateItem'])){

            $pId = $_POST['pId'];
            $pName =  $_POST['pName'];
            $price =  $_POST['price'];
            $quantity =  $_POST['quantity'];
            $description =  $_POST['description'];
            $category =  $_POST['category'];
            $fileName = $_FILES['img']['name']; // accessing filename
            $filePath = "plantStoreImages/".$fileName;// prepare server location    

            // store image in server ( local machine hardisk)
            $status = move_uploaded_file($_FILES['img']['tmp_name'],  $filePath);
     if ($status)// if storing file in a specified directory in a server
     {

        $sql = "update item 
                set pName=?, price=?,
                quantity =?, description =?,
                category =?, img_path=?
                where pId=?";
        $stmt = $conn->prepare($sql);
       $status = $stmt->execute([$pName, $price, $quantity, $description, $category, $filePath, $pId]);
       if($status)
       {
                 $_SESSION['updateSuccess'] = "Product with id $pId has  been updated successfully !!";
                header("Location:viewItem.php");

       }
    }
        
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Items</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-light" style="background-image: url(/plantStoreImages/homebg.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php require_once "navbar.php" ?>
            </div>
        </div>
        <div class="row" style="background-color: #3e5533c7; width: 800px; height: fit-content; align-items: center; margin-left: 350px; border-radius:10%; margin-top: 50px; margin-bottom: 50px; ">
          
            <div class="col-md-6 mx-auto" style="margin-top: 50px; margin-bottom: 50px;">
                <form class="form mt-2 pt-2" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <fieldset>
                        <legend>Edit Item</legend>
                        <input type="hidden" name="pId" value="<?php echo $product['pId']; ?>">
                        <div class="mb-2">
                            <label for="pName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="pName" value="<?php  echo $product['pname']; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" value="<?php  echo $product['price']; ?>" >
                        </div>
                        <div class="mb-2">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description"  class="form-control" placeholder="<?php  echo $product['description']; ?>"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="category" class="form-label">Category</label>
                            <p>you selected <?php echo $product['category']; ?></p>
                            <select name="category" class="form-select">
                                <option value="">Select Category</option>
                                <?php if (isset($categories)) {
                                    foreach ($categories as $category) {
                                        echo $category['cid'];
                                        echo "<option value=$category[cid]>$category[cname]  </option>";
                                    }
                                }

                                ?>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="<?php echo $product['quantity']; ?>" >
                        </div>
                        <div class="mb-2">
                            <img src="<?php echo $product['image']; ?>" alt="">
                            <label for="img" class="form-label">Choose item image</label>
                            <input type="file" class="form-control" name="img">
                        </div>
                      <button type="submit" class="btn btn-primary" name="updateItem">Update Item</button>  

                    </fieldset>
                </form>

            </div>

        </div>
    </div>
</body>

</html>