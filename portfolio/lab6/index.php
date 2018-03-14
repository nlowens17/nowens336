<php
    include '../../dbConnection.php';
    
    $conn = getDatabaseConnection;
    
    function displayCategories() {
    global $conn;
    
    $sql = "SELECT catName FROM `om_category ORDER BY catName`";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
    print_r($records);
    
    foreach ($records as $records) {
    
    echo "<options value = '"$record["catId"]'."' > " . $records["catName"] . "</options>";
    }
    }
    
    function displaySearchResults() {
    
    if (isset($_GET['searchForm'])) {
    echo "<h3> Products Found: </h3>";
    
    $sql = "SELECT * FROM om_products WHERE 1";
    if (!empty($_GET['product'])) {
        $sql .= "AND productName LIKE :productName"; 
        $namedParameters[":productName"] = "%" . $_GET['product'] . "%";
    }
        
        $nameParameters = array();
        $namedParameters[":productName"] = "%" . $_GET['product'] . "%";
        
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
    foreach ($records as $records) {
    echo $records["productName"] . " " . $record["productDescription"] . "br/>;
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> OtterMart Product Search </title>
    </head>
    <body>
        
        <h1> OtterMart Product Search </h1>
        
        <form>
            
            Product: <input type= "text" name= "product" /> <br/>
            
            Category: 
            <select name= "category">
                <option value= "">Select One</option>
                <?=displayCategories()?>
            </select>
            <br/>
            
            Price: From <input type="text" name= "priceFrom" size= "7"/>
                    To <input type="text" name= "priceTo" size= "7"/>
                    <br/>
                    
                    Order result by: <br/>
                    <input type="radio" name= "orderBy" value="price" /> Price <br/> 
                    <input type= "radio" name= "orderBy" value="name"/> Name
                    
                    <br/>
                    
                    <inout type="submit" value = "Search" name= "searchForm" />
        </form>
        <br/>
        <hr>
        
        <?= displaySearchResults() ?>
        
    </body>
</html>