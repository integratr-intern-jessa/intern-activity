
    
<?php

//DIFFERENCE WITH ARRAY LIST

$course1 = [
    'BSIT',
    'BSBA',
    'HMO',
    'NC2',
    'ENGINEERING',
    'NURSE',
    'ARCHITECT',
    'TOURISM',
];

$course2 = [
    'HMO',
    'ENGINEERING',
    'NURSE',
];

$result = array_diff ($course1, $course2);

?>

<html> 
    <?php
    print_r($result);
    ?>
</html>




