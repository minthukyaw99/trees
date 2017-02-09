<?php     
$array = ["core" => [
                            "core1",
                            "core2",
                            "core3" => ["core3.1", "core3.2"]
                        ],  
              "class" => [
                            "class1",
                            "class2",
                            "class3"
                  ], 
              "case" => "Random Stuff",
              "index.php",
              "register.php"
              ];

echo treeOut($array);

function treeOut($array){
    echo "<ul>";
    foreach( $array as $key => $value ){

        if(!is_int($key)) {
            echo "<li>".$key."</li>";
        } else {
            echo "<li>".$value."</li>";
        }
        
        if(is_array($value)) {
            treeOut($value);
        }
        
        if(!is_int($key) && !is_array($value)) {
            echo "<ul><li>".$value."</li></ul>";
        }
        
    }
    
    echo "</ul>";
}
