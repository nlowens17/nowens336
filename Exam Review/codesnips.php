    include '../../dbConnection.php';
    getDataBaseConnection(ottermart);


    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //for single record
    
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();
    foreach ($results as $record) {
	    echo $record['town_name']  . "<br />";
    }
    
    



















