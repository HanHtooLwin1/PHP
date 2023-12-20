<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<?php
    class Item {
        public $id;
        public $thing;
        public $type;
        public $brandName;
        public $total;
        public $eachPrice;
    }

    $item1 = new Item();
    $item1->id = "1";
    $item1->thing = "bread";
    $item1->type = "food";
    $item1->brandName = "Maco";
    $item1->total = "100 breads";
    $item1->eachPrice = "2500Ks";

    $item2 = new Item();
    $item2->id = "2";
    $item2->thing = "book";
    $item2->type = "subject matter";
    $item2->brandName = "U Brand";
    $item2->total = "500 books";
    $item2->eachPrice = "500Ks";

    $item3 = new Item();
    $item3->id = "3";
    $item3->thing = "rice";
    $item3->type = "food";
    $item3->brandName = "Shwe Bo Paw Sann";
    $item3->total = "200 bags";
    $item3->eachPrice = "15000Ks";

    $itemList = array();

    array_push($itemList, $item1, $item2, $item3);
    

    $tableBody = "";

    foreach($itemList as $item) {
        $tableBody .=
                        "    
                            <tbody>
                                <tr>
                                    <td>" . $item->id . "</td>
                                    <td>" . $item->thing . "</td>
                                    <td>" . $item->type . "</td>
                                    <td>" . $item->brandName . "</td>
                                    <td>" . $item->total . "</td>
                                    <td>" . $item->eachPrice . "</td>
                                </tr>
                            </tbody>
                        ";
    }

    
    $table = "
                <table class=\"table table-hover\">
                    <thead><tr>
                        <th>Id</th>
                        <th>Thing</th>
                        <th>Type</th>
                        <th>BrandName</th>
                        <th>Total</th>
                        <th>EachPrice</th>
                        </tr>
                    </thead>" . $tableBody .
                "</table>";

    echo $table;

?>

</body>
</html>