<?php
 class  docFile{
  public  $path;
  
  function __construct($path)
  {
      $this->path = $path;
      
  }
  
  function moFile(){
      $fp = @fopen($this->path,"r");
      if (!$fp) {
        echo 'Mở file không thành công';
    }
    else{
        $read =file($this->path);
        $array = array();
        $line0 = $read[0];
        $line0_array = preg_split("/\s/",$line0); 
        $soLuongQuanLinhTeamA = (int)$line0_array[2];
        foreach($read as $key => $line){
            if ($key<=$soLuongQuanLinhTeamA && $key!=0 ) {
                $data = preg_split("/\s/",$line);
                 $loaiLinhTeamA[] = $data[0];
                 $maSoLoaiLinhTeamA[] = $data[1];
                 $tanCongLoaiLinhTeamA[] = $data[2];
                 $phongThuLoaiLinhTeamA[] = $data[3];
                 $trangBiLoaiLinhTeamA[] = $data[4];
                 $sucManhLoaiLinhTeamA[] = $data[5];
                 $kinhNghiemTuongQuanTeamA[] = $data[6];
                 return $quanLinh = new quanLinh($loaiLinhTeamA,$maSoLoaiLinhTeamA,$tanCongLoaiLinhTeamA,$phongThuLoaiLinhTeamA,$trangBiLoaiLinhTeamA,$sucManhLoaiLinhTeamA,$kinhNghiemTuongQuanTeamA);
                 
            }
            else if($key>$soLuongQuanLinhTeamA+1){
                $data = preg_split("/\s/",$line);   
                 $loaiLinhTeamB[] = $data[0];
                 $maSoLoaiLinhTeamB[] = $data[1];
                 $tanCongLoaiLinhTeamB[] = $data[2];
                 $phongThuLoaiLinhTeamB[] = $data[3];
                 $trangBiLoaiLinhTeamB[] = $data[4];
                 $sucManhLoaiLinhTeamB[] = $data[5];
                 $kinhNghiemTuongQuanTeamB[] = $data[6];
                 echo $maSoLoaiLinhTeamB[0];
            }
            
        }
        fclose($fp);
    }
  }
  
}


?>