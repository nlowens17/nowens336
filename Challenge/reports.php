<?php 
    $sql1 = "SELECT COUNT(1) totalPurchases
            FROM om_purchase p
            INNER JOIN om_user u
            on p.user_id = u.userId
            WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"";
            
 $sql2 = "SELECT productName
            FROM om_user u
            INNER JOIN om_purchase p
            on u.userId = p.user_id
            NATURAL JOIN om_product
            WHERE email LIKE \"%@aol.com\" ";
            
 $sql3 = "SELECT SUM(quantity), sex
            FROM user u
            INNER JOIN purchase p
            on u.userId = p.user_id
            GROUP BY sex";

 $sql4 = "SELECT DISTINCT(catName)
            FROM purchase p
            INNER JOIN user u
            on p.user_id = u.userId
            NATURAL JOIN product 
            NATURAL JOIN category cat
            WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"";
?>