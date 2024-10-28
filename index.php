

<?php


    $informacie = ["Milos","Jovic",20];




    $osoba = [

        "ime" => "Milos",
        "prezime" => "Jovic",
    ];

//    echo $osoba["ime"];
//    echo $osoba["prezime"];





    $automobili = [
        "Zastava" => ["yugo","101","skala"]
    ];

    echo $automobili["Zastava"][0];

    $osobe = [
        "Toma" =>[
            "prezime" => "Nikolic",
            "godine" => 29,
            "programer" => true,
            "pravoIme" => "Tomislav"
        ],
        "Milos" => [
            "prezime" => "Jovic",
            "godine" => 32,
            "programer" => true,
        ]
    ];

    echo "<br>" . $osobe["Toma"]["prezime"];
    echo "<br>" . $osobe["Milos"]["prezime"];

    $osobe["Jelena"]=[
        "prezime"=>"Nikolic",
        "godine"=>31,
        "programer"=>true];


//    echo "ja se zovem {$osobe['Jelena']['prezime']}";


//    $imena = array_keys($osobe);

//    var_dump($imena);

//    $prezime = array_column($osobe,"prezime");
//
//    var_dump($prezime);

?>