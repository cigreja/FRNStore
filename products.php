<?php
include('includes/head.php');
include('includes/nav.php');
?>

<?php

$data = fopen("ProductsFile.txt", "r")
        or die("ERROR: Unable to open file!");

if ($data) {

    $line = fgets($data);
    $delimiter = ",";
    $thead = explode($delimiter, $line); 
    $products = array();
    while ($line = fgets($data)) {
        array_push($products, explode($delimiter, $line));
    }
}
fclose($data);
?>

<!-- Products List -->
<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <?php 
            foreach($thead as $th){
                echo '<th>' . $th . '</th>';
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($products as $product){
            echo '<tr><td>' . $product[0] . '</td>';
            echo '<td>' . $product[1] . '</td>';
            echo '<td>' . $product[2] . '</td>';
            echo '<td>' . $product[3] . '</td>';
            echo '<td></td></tr>';
        }
        ?>
    </tbody>
</table> 
<a onclick="jsfunction()" class="btn btn-primary">Add To Cart</a>
<?php
include('includes/footer.php');
?>


