<?php 
        include "../../dbConnection";
        $conn = getDataBaseConnection();
    function getCategories() {
        global $conn;
        $sql = "SELECT catId, catName from om_category ORDER BY catName";
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
        $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record) {
            echo "<option value='".$record["catId"] ."'>". $record['catName'] ." </option>";
        }
    }
    
    if (isset($_GET['submitProduct'])) {
        $productName = $_GET['productName'];
        $productDescription = $_GET['description'];
        $productImage = $_GET['productImage'];
        $productPrice = $_GET['price'];
        $catId = $_GET['catId'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Add a Product </title>
    </head>
    <body>
        <h1> Add a product </h1>
        <form>
            Product Name: <input type="text" name="productName"/></br>
            Description: <textarea name="description" cols = 5 rows = 4></textarea></br>
            Price: <input type="text" name="price"/></br>
            Image URL: <input type="text" name="productImage"/></br>
            <select >
                <option value=""> Select One</option>
                Categories: <?php getCategories() ?>
            </select> </br>
            <input type="submit" name="SubmitProduct"/>
        </form>
    </body>
</html>