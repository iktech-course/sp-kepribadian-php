<?php

include_once("../db/db_conn.php");

$id_gejala = $_POST['id_gejala'];
//untuk mengisi index array mendapat id baru
$panjang_gejala = $_POST['lenghtGejala'];
//script query dari fe
$getQuery = json_decode($_POST['getQuery']);
//menentukan memilih yes atau no
$statusPilihan = $_POST['status'];

if(!isset($getQuery)){
    // melakukan filter sesuai dengan yang sudah di input
    $qry = 'SELECT * FROM tbl_aturan WHERE id_kepribadian IN(SELECT id_kepribadian FROM `tbl_aturan`) GROUP BY id_ciri';
}else{
    // melakukan cek pertanyaan dijawab ya atau tidak untuk menentukan pertanyaan selanutnya
    if($statusPilihan =='yes'){
        $qry = 'SELECT * FROM('.$getQuery.') AS tb'.$id_gejala.' WHERE id_kepribadian IN(SELECT id_kepribadian FROM tbl_aturan WHERE id_ciri = "'.$id_gejala.'")';

        //bungkus group by
        $qryGB = 'SELECT id_ciri FROM('.$qry.') AS tb'.$id_gejala .'cp WHERE id_kepribadian IN(SELECT id_kepribadian FROM tbl_aturan WHERE id_ciri = "'.$id_gejala.'") GROUP BY id_ciri';
    }else {
        $qry = 'SELECT * FROM('.$getQuery.') AS tb'.$id_gejala.' WHERE id_ciri IN (SELECT id_ciri FROM tbl_aturan WHERE id_kepribadian NOT IN (SELECT id_kepribadian FROM tbl_aturan WHERE id_ciri="'.$id_gejala.'")GROUP BY id_ciri)';

         //bungkus group by
         $qryGB = 'SELECT id_ciri FROM('.$qry.') AS tb'.$id_gejala .'cp GROUP BY id_ciri';
    }

    // var_dump($qryGB); die;
}
    
$query = mysqli_query($conn, $qryGB);

while($q = mysqli_fetch_array($query)){
    $quest[] = $q;
}

if(isset($quest)){
    $countGejala = count($quest);

    if($panjang_gejala<$countGejala){
        //mendapatkan id baru berdasar urutan array
        $newId = $quest[$panjang_gejala]['id_ciri'];

        //handle jika penyakit sudah ditemukan atau masih cari pertanyaan


        //melakukan query pertanyaan baru 
        $qry1 = 'SELECT * FROM tbl_ciri where id_ciri ="'.$newId.'"';
        $qryNewQuest = mysqli_query($conn, $qry1);

        $data =[
            "data" =>(mysqli_fetch_array($qryNewQuest)),
            "qry" =>$qry,
            "qryGB" =>$qryGB
        ];
        echo json_encode($data);
    } else {
        $data =[
            "data" => 1
        ];
        echo json_encode($data);
    }
}else{
    $data=[
        "data" => 1
    ];

    echo json_encode($data);
}








?>