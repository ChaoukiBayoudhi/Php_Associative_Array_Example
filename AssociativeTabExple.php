<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //example of associative array
    #key/value
    $mark=array("Ahmed"=>"15.7","Bochra"=>"17.2","Mohamed"=>"19.9");
    //mark of Bochra
    echo "Bochra has ".$mark["Bochra"],"<br>";
    $mark["Bochra"]="16.1";
    print "The new mark of Bochra is ".$mark["Bochra"]."<br>";
    //first method
    foreach ($mark as $x => $x_value) {
        echo "Student Name : ".$x,"  Student Mark : ".$x_value,"<br>";
    }
    //second method
    print_r($mark);
    //assosiatve array of arrays
    $institution=array("group1"=>array("Ahmed"=>"15.7","Bochra"=>"17.2","Mohamed"=>"19.9"),
    "group2"=>array("Salah"=>"10.3","Ali"=>"11.2","Sarrah"=>"9.5"));
    echo "<br>";
    echo "list of students :<pre>";
    print_r($institution);
    echo "</pre>";
    echo "<br>";
    foreach ($institution as $key => $value) {
        # code...
        print_r($value);
        echo "<br>";
    }
    foreach ($institution as $key => $value) {
        echo "Groupe Name :".$key,"<br>";
        # code...
        foreach ($value as $x => $x_value) {
            echo "Student Name : ".$x,"  Student Mark : ".$x_value,"<br>";
        }
        echo "<br>";
    }

    //show keys list
    echo "list of keys :<pre>";
    print_r(array_keys($institution));
    echo "</pre>";
    ?>

</body>
</html>