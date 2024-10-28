
<?php


//    $user = [
//        "name" => "",
//        "lastname" => "",
//        "age" => ""
//    ];


    $user  = [
        "" => ""
    ];




    var_dump($user);



    $data = ["model" => "PC", "version" => 2.1, "price" => 999];


    unset($data['model']);

    var_dump($data);


    $osobe = [

        [
            "ime" => "Tomislav",
            "prezime" => "Nikolic",
            "godiste" => 1992
        ]
        ,
        [
            "ime" => "Ivan",
            "prezime" => "Jovanovic",
            "godiste" =>1984
        ]
    ];



    $currentYear = (int) date('Y');

    $godine = $currentYear - $osobe[1]["godiste"];

    echo $godine;

?>