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
    //print_r($categories);
    // foreach ($categories as $category) 
    // {
    //      echo $category['cid']."<br>";
    //      echo $category['cname'];
    //      echo "<br><br>";
    // }

    if(isset($_POST["insertItem"])){
        $pName = $_POST['ProductName'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $fileName = $_FILES['img']['name'];
        $filePath = "plantStoreImages/".$fileName;


        $status = move_uploaded_file($_FILES["img"]["tmp_name"],$filePath);
        if($status){
            $sql = "insert into item values (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $status = $stmt->execute([null,$pName,$price,$description,$quantity,$filePath,$category]);
            $lastId = $conn->lastInsertId();
            if($status)
            {
                //echo "item inserted successfully!🎉";
                $_SESSION['insertSuccess']="Item with id $lastId inserted successfully🎉";
                header("Location:viewItem.php");
            }
        }

        echo $pName;
        echo "<br>".$price;
        echo"$fileName";

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Item</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body class="bg-light" style="background-image: url(/plantStoreImages/homebg.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php require_once "navbar.php" ?>
            </div>
        </div>
        <div class="row" style="background-color: #3e5533c7; width: 800px; height: 700px; align-items: center; margin-left: 300px; border-radius:10%; margin-top: 50px; margin-bottom: 50px; ">

            <div class="col-md-6 mx-auto">

                <form class="form mt-3 pt-3" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <fieldset>
                        <legend>Insert Item</legend>
                    
                    <div class="mb-3">
                        <label for="itemName" class="form-label">Item Name</label>
                        <input type="text" class="form-control" name="itemName">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="" class="form-select">
                            <option value="">Select Category</option>
                            <?php if(isset($categories))
                                    {
                                        foreach($categories as $category)
                                        {
                                            echo $category['category_id'];
                                            echo "<option value = $category[category_id]>$category[cname]</option>";
                                        }
                                    }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="quantity">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Choose item image</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary" name="insertItem">Insert Item</button>
                    </fieldset>
                    
                </form>
            </div>
        </div>

    </div>
</body>
</html>                        