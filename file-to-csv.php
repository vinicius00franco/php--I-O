<?php

// $MyCourses = file('lista-cursos.txt');

// $OtherCourses = file('cursos.txt');

// $file_csv = fopen('cursos.csv','w');


// // só recebe um iterable, então transformar o 
// // arquivo em um array pelas linhas


// foreach ($MyCourses as $courses){
//     $linha = [trim($courses), 'sim'];

//     fputcsv($file_csv,$linha,',');

//     //fwrite($file_csv,implode(',', $linha));
    
// }

// foreach ($OtherCourses as $courses){
//     $linha = [trim($courses), 'não'];

//     fwrite($file_csv,implode(',', $linha));

// }

$handle = fopen('cursos.csv','r') ;
var_dump($handle);


while(!feof($handle)){
    $data = fgetcsv($handle);
    var_dump($data);

}

$data1 = fgetcsv($handle);
var_dump($data);


// foreach ($handle as $linha){
//     echo $linha;
// }


// $get_csv_file = file('cursos.csv','r');

// var_dump($get_csv_file);

// echo fgetcsv( $get_csv_file,count($get_csv_file) ,',');