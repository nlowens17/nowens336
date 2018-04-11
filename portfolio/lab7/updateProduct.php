<?php
    include '../../dbConnection.php';
    $conn = getDatabaseConnection("ottermart");
    
    function getCategories($catid) {
        global $conn;
    
        $sql = "SELECT catId, catName from om_category ORDER BY catName";
    
        $statement = $conn->prepare($sql);
        $statement->execute();
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record) {
            echo "<option  ";
            echo ($record["catId"] == $catId)? "selected": ""; 
            echo " value='".$record["catId"] ."'>". $record['catName'] ." </option>";
        }
    }
    
    function getProductInfo() {
        global $conn;
        $sql = "SELECT FROM om_product WHERE productId =" . $_GET['productId'];
    
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    if (isset($_GET['updateProduct'])) {
        //echo "Trying to update the product!";
        $sql = "UPDATE om_product
                SET field = :productName,
                productDescription = :productDescription,
                productImage = :productImage,
                price = :price,
                catId = :catId
            WHERE productId = :productId";
        $np = array();
        $np[":productName"] = $_GET['productName'];
        $np[":productDescription"] = $_GET['description'];
        $np[":productImage"] = $_GET['productImage'];
        $np[":price"] = $_GET['price'];
        $np[":catId"] = $_GET['catId'];
    }
    
    if (isset($_GET['productId'])) {
        $product = getProductInfo();
    }
    
     //print_r($record);
    
    //echo $_GET['productId'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Product Update </title>
    </head>
    <body>
        <h1>Update Product</h1>
        
        <form>
            Product name: <input type="text" value = "<?=$product['productName']?>" name="productName"><br>
            Description: <textarea name="description" cols = 50 rows = 4><?=$product['productDescription']?></textarea><br>
            Price: <input type="text" name="price" value = "<?=$product['price']?>"><br>
    
            Category: <select name="catId">
                <option value="">Select One</option>
                <?php getCategories(); ?>
            </select> <br />
            Set Image Url: <input type = "text" name = "productImage"><br>
            <input type="submit" name="submitProduct" value="Update Product">
            
        </form>
    </body>
</html>