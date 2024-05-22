<?php
class NilaiMahasiswa {
    public $nama;
    public $nim;
    public $matkul;
    public $nilai;

    function __construct($nama, $nim, $matkul, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function hasilNilai() {
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama Mata Kuliah: " . $this->matkul . "<br>";
        echo "Nilai: " . $this->nilai . "<br>";
        echo "Grade: " . $this->statusGrade() . "<br>";
    }

    function statusGrade() {
        if ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 55) {
            return "C";
        } elseif ($this->nilai >= 40) {
            return "D";
        } else {
            return "E";
        }
    }
}
?>