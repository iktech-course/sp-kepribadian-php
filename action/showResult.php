<?php

include_once("../db/db_conn.php");

if(isset($_POST['arrGejala'])){
    $arrGejala = $_POST['arrGejala'];
}

$idUser = $_POST['idUser'];


$time = date("d-m-Y",time());

//handle terdapat gejala yang diinput
if(isset($arrGejala)){
    $countArrGejala = count($arrGejala);
    //validasi gejala yang diinputkan minimal 3 
    if($countArrGejala>2){
        $qry = 'SELECT * FROM tbl_aturan WHERE id_kepribadian in (SELECT id_kepribadian FROM `tbl_aturan` WHERE id_ciri = "'.$arrGejala[0].'")';
        for($i=0;$i<$countArrGejala;$i++){
    
    
            $newQry = 'SELECT * FROM('.$qry.') AS tbl'.$i.' WHERE id_kepribadian IN(SELECT id_kepribadian FROM tbl_aturan WHERE id_ciri = "'.$arrGejala[$i].'")';
            $qry=$newQry;
        }
    
        $query = mysqli_query($conn, $qry);
    
        $data = mysqli_fetch_array($query)['id_kepribadian'];
    
        $result = mysqli_query($conn, 'SELECT * FROM tbl_kepribadian WHERE id_kepribadian ="'.$data.'"' );
    
        while($g=mysqli_fetch_array($result)){
            $getData[] = $g;
        }
    
        //handle penyakit sudah ketemu
        if(count($getData)==1){
            //insert data ke riwayat
            mysqli_query($conn, 'insert into tbl_riwayat(id_user, id_penyakit, created_at) VALUES("'.$idUser.'","'.$getData[0]['id_penyakit'].'",NOW())');

            //memasukan nama gejala
            mysqli_query($conn,'SELECT * FROM `tbl_ciri` WHERE id_ciri IN ("G001", "G002")');

            //cari gejala
                $qw = 'SELECT * FROM tbl_ciri WHERE id_ciri IN(';
            for($i=0; $i<count($arrGejala); $i++){
                $isi = '"'.$arrGejala[$i].'"'.',';
                $queryGJ = $qw.$isi;
                $qw = $queryGJ; 
            }

            $qwry = $qw.'"'.$arrGejala[0].'")';
            $querieGjala = mysqli_query($conn, $qwry);

            // var_dump($qwry); die();

            while($p = mysqli_fetch_array($querieGjala)){
                $gejala[] =$p['name']; 
            }

            $data = [
                "data" => $getData[0],
                "time" => $time,
                "gejala" => $gejala
            ];
            echo json_encode($data);
        }else{
            $data = [
                "data" => [
                    "name" => 'Penyakit tidak dapat diidentifikasi ...',
                    "solusi" => 'Tidak ditemukan Solusi ...',
                ],
                "time" => $time
            ];
            echo json_encode($data); 
        }
    }else{
        $data = [
            "data" => [
                "name" => 'Gejala yang diinputkan tidak cukup, Penyakit tidak dapat diidentifikasi ...',
                "solusi" => 'Tidak ditemukan Solusi ...',
            ],

            "time" => $time
        ];
        echo json_encode($data); 
    }



}else{
    $data = [
        "data" => [
            "name" => 'Penyakit tidak dapat diidentifikasi ...',
            "solusi" => 'Tidak ditemukan Solusi ...',
        ],

        "time" => $time
    ];
    echo json_encode($data); 
}
