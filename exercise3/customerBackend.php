<?php
include "./customerFrontend.html";
$username = $_POST["Username"];
$password = $_POST["Password"];
$table_number = (int)$_POST["Table"];
$chair_number = (int)$_POST["Chair"];
$door_number = (int)$_POST["Door"];
$shipping_method = $_POST["shipping"];
echo "<br><br><div id=\"receipt\"><h1 class=\"title\">Your Receipt:</h1>";
echo "<table id=\"receipt_table\"><tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
$table_total = $table_number*50;
echo "<tr><th>Table</th><td>$table_number</td><td>$50</td><td>$".$table_total."</td></tr>";
$chair_total = $chair_number*25;
echo "<tr><th>Chair</th><td>$chair_number</td><td>$25</td><td>$".$chair_total."</td></tr>";
$door_total = $door_number*100;
echo "<tr><th>Door</th><td>$door_number</td><td>$100</td><td>$".$door_total."</td></tr>";
if($shipping_method == "seven_day") {
  $shipping_method = "Seven Day";
  $shipping_total = 0;
}
else if($shipping_method == "three_day") {
  $shipping_method = "Three Day";
  $shipping_total = 5;
}
else {
  $shipping_method = "Overnight";
  $shipping_total = 50;
}
echo "<tr><th>Shipping</th><td></td><td>$shipping_method</td><td>$".$shipping_total."</td></tr>";
$total_cost = $table_total = $table_total + $chair_total +$door_total + $shipping_total;
echo "<tr><th>Total Cost</th><td></td><td></td><th>$".$total_cost."</th></tr></table></div>";
?>