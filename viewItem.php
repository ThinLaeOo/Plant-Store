<?php
require_once "dbconn.php";
if(!isset($_SESSION))
{
    session_start();
}

try {
    $sql = "select * from categories";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll();
} catch (PDOException $e) {
    echo $e->getMessage();
}

try {
    $sql = "select p.pId, p.pName,
    p.price, p.description,
        p.quantity, p.image,
        c.cname as category
        from products p, categories c 
        where p.category = c.category_id";

    $stmt = $conn->query($sql);
    $products = $stmt->fetchAll();
    //print_r($items);

} catch (PDOException $e) {
    echo $e->getMessage();
}


if(isset($_GET['cate'])) 
{
        $cid = $_GET['cateChoose'];
        try {
            $sql = "SELECT p.pID, p.pName, p.price, p.description, p.quantity, p.image, c.cname as category
                    FROM products p, categories c
                    WHERE p.category = c.category_id AND c.category_id = ?";

            $stmt = $conn->prepare($sql);
            $stmt->execute([$cid]);
            $products = $stmt->fetchAll();
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
}


if(isset($_GET['priceRadio']))
{
    $range = $_GET['priceRange'];
    $sql = "select p.pId, p.pName,
        p.price, p.description,
        p.quantity, p.image,
        c.cname as category
        from products p, categories c 
        where p.category = c.category_id 
        and p.price between ? and ?";
        
    $lower = 0;
    $upper = 0;
    if($range == 0)
    {
        $lower = 1;
        $upper = 100;
    }
    else if ($range == 1)
    {
        $lower = 101;
        $upper = 200;
    }else if ($range == 2)
    {
        $lower = 201;
        $upper = 300;

    }

    $stmt = $conn->prepare($sql);
    $stmt->execute([$lower, $upper]);
    $products = $stmt->fetchAll();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rain Forest Plant Shop View Item</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body{
            background-image: url("plantStoreImages/WebsitePics/homebg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php require_once "navbar.php" ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 py-5"  style="background-color: #ffffff7a;">
                <form action="viewitem.php" method="get" class="form border border-primary border-1 rounded">
                <select name="cateChoose" class="form-select">
                    <option>Choose Category</option>
                    <?php
                    if(isset($categories))
                    {
                        foreach($categories as $category)
                        {
                            echo "<option value=$category[category_id]>  $category[cname] </option>";
                        }

                    }
                    ?>

                </select>
                <button class="mt-3 btn btn-sm btn-outline-primary rounded-pill" name="cate" type="submit">Submit</button>
                </form>

                <form action="viewitem.php" method="get" class="mt-5 form border border-primary border-1 rounded">
                    <fieldset> 
                        <legend> <h6>Choose Price Range</h6></legend>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="priceRange" value="0">
                        <label class="form-check-label" for="priceRange">
                            $1-$100
                        </label>
                        <br>

                        <input class="form-check-input" type="radio" name="priceRange" value="1">
                        <label class="form-check-label" for="priceRange">
                            $101-$200
                        </label>
                        <br>
                        <input class="form-check-input" type="radio" name="priceRange" value="2">
                        <label class="form-check-label" for="priceRange">
                            $201-$300
                        </label>
                    </div>
                    <button class="mt-3 btn btn-sm btn-outline-primary rounded-pill" name="priceRadio" type="submit">Submit</button>

                    </fieldset>
                </form>

            </div>

            <div class="col-md-10 mx-auto py-5" style="background-color: #ffffff7a;">
                <div class="py-2"><a class="btn btn-primary mb-2" href="insert.php">Add New Item</a></div>
                <?php 
              if (isset($_SESSION['insertSuccess']))
              {
                    echo "<p class='alert alert-success'> $_SESSION[insertSuccess] </p>";
                    unset($_SESSION['insertSuccess']);
              }else if (isset($_SESSION['updateSuccess']))
              {
                    echo "<p class='alert alert-success'> $_SESSION[updateSuccess] </p>";
                    unset($_SESSION['updateSuccess']);
              }else if (isset($_SESSION['deleteSuccess']))
              {
                    echo "<p class='alert alert-success'> $_SESSION[deleteSuccess] </p>";
                    unset($_SESSION['deleteSuccess']);
              }
                
                
                ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($products)) {
                            foreach ($products as $product) {
                                echo "<tr>
                                <td>$product[pName]</td>
                                <td>$product[price]</td>
                                <td>$product[description]</td>
                                <td>$product[category]</td>
                                <td>$product[quantity]</td>
                                <td><img src=$product[image] style=width:80px; height:80px></td>   
                                <td><a class='btn btn-primary rounded-pill' href=editItem.php?eid=$product[pId]>Edit</a></td>
                                <td><a class='btn btn-danger rounded-pill' href=editItem.php?did=$product[pId]>Delete</a></td>

                                </tr>";
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>