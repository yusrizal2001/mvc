<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama"=> "Sandika Galih",
            "nrp"=> "0962498577",
            "email"=> "Sandhikagalig@unpas.ac.id",
            "jurusan"=> "Teknik Informatika"
        ],
        [
            "nama"=> "Sandika Galih",
            "nrp"=> "0962498577",
            "email"=> "Sandhikagalig@unpas.ac.id",
            "jurusan"=> "Teknik Informatika"
        ],
        [
            "nama"=> "Sandika Galih",
            "nrp"=> "0962498577",
            "email"=> "Sandhikagalig@unpas.ac.id",
            "jurusan"=> "Teknik Informatika"
        ],
    ];
    public function getAllMahasiswa()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

}