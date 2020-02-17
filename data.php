<?php

class data{
   public $loaiLinhTeamA,
    $maSoLoaiLinhTeamA,
    $tanCongLoaiLinhTeamA,
    $phongThuLoaiLinhTeamA,
    $trangBiLoaiLinhTeamA,
    $sucManhLoaiLinhTeamA,
    $kinhNghiemTuongQuanTeamA;

    function __construct($loaiLinhTeamA,$maSoLoaiLinhTeamA)
    {
        $this->loaiLinhTeamA = $loaiLinhTeamA;
        $this->maSoLoaiLinhTeamA = $maSoLoaiLinhTeamA;
    }
    
}

?>