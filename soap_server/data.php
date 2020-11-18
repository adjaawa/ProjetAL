<?php

    //require('../modele/dao/dao_example_dao.php');

    function lister_users()
    {
        $products = [
            "book"=>20,
            "pen"=>10,
            "pencil"=>5
        ];
        
        foreach($products as $product=>$price)
        {
            if($product==$name)
            {
                return $price;
                break;
            }
        }
    }
?>