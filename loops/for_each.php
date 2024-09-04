<!-- stylesheets -->
<?php
//used with arrays
//numeric array: keys are integer starts with 0
$array = array('Guava', 'Mango', 'Avagado', 'Grapes');

echo '<pre>';
print_r($array); // array
echo '</pre>';
//echo gettype($array);
for($i = 0; $i<count($array); $i++){
    echo $array[$i]. '<br />';
}
//associative arrays: having any or all keys as string
$data = array('roll'=>101,
            'name'=>'Prakash Poudel',
            'marks'=>88.75);

//forech loop 
/**
 * foreach($array_name as $key=>$value){
 * echo $value . '<br />';
 * }
 */
echo '<ol type="i">';
foreach($data as $value){
echo '<li class="mydata">'. $value . '</li>';
}
echo '</ol>';



   
?>