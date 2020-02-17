<?php
include("docfile.php");

class quanLinh{
    public $m_type,$m_Code,$m_Attack,$m_Defend,$m_Equipment,$m_Strength;
    
    function __construct($m_type,$m_Code,$m_Attack,$m_Defend,$m_Equipment,$m_Strength){
        $this->m_type = $m_type;
        $this->m_Code = $m_Code;
        $this->m_Attack = $m_Attack;
        $this->m_Defend = $m_Defend;
        $this->m_Equipment = $m_Equipment;
        $this->m_Strength =$m_Strength;

    }
}
class valiant extends quanLinh{

   
    public function duocTrangBi(){
        if($this->m_Equipment == true){
            $this->m_Defend = $this->m_Defend*2;
        }
    }
}
class archer extends quanLinh{
    public function duocTrangBi(){
        if($this->m_Equipment == true){
            $this->m_Attack = $this->m_Attack*1.5;
        }
    }
}
class knight extends quanLinh{
    public function duocTrangBi(){
        if($this->m_Equipment == true){
            $this->m_Attack = $this->m_Attack*3;
            $this->m_Defend = $this->m_Defend*3;
        }
    }
}
class armyGeneral extends quanLinh{
    public $m_Experiance;

    function __construct($m_Experiance)
    {
        $this->m_Experiance = $m_Experiance;
    }


}
class daoquan{
    function thongTinDaoQuan(){
        $docFile = new docFile("input.txt");
        $docFile->moFile();
       
       
    }
    
}

$daoQuanA = new daoquan();
$daoQuanA->thongTinDaoQuan();

