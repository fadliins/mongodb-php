<?php
$manager = new MongoDB\Driver\Manager("mongodb+srv://admin:admin@cluster0.35lzehv.mongodb.net/?retryWrites=true&w=majority");

// Query Class
$query =  new MongoDB\Driver\Query(array());

// Pilih DB Collection
$cursor = $manager->executeQuery('test.users', $query);

// Convert cursor to Array and print result
echo "<prep>";
print_r($cursor->toArray());
echo "</prep>";

?>