<?php
$a=array("Keerthana","Anamika","Gopika","vishnu priya","Anu");
echo "Names of students are";
print_r($a);
echo "<br>";
echo "Ascending order";
echo "<br>";
asort($a);
print_r($a);
echo "<br>";
echo "Descending order";
echo "<br>";
arsort($a);
print_r($a);