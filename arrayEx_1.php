<?php
$table = array(
                    'husband' => array('firstname' => 'Albert',
                                    'lastname' => 'Einstein',
                                    'age' => 79) ,
                    'wife' => array('firstname' => 'Mileva',
                                    'lastname' => 'Einstein',
                                    'age' => 70)
                );
echo $table['husband']['firstname'] .' and '. $table['wife']['firstname']  ;
?>

