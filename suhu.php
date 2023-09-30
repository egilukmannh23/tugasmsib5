<?php
    class suhu{
        private $satuanSuhuAwal;
        private $besaranSuhu;
        private $satuanSuhuTujuan;

        public function __construct ($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
            $this-> satuanSuhuAwal = $satuanSuhuAwal;        
            $this-> besaranSuhu = $besaranSuhu;
            $this-> satuanSuhuTujuan = $satuanSuhuTujuan;
    }

        public function konversi(){
            //celciusToFahrenheit
            if ($this->satuanSuhuAwal == 'celcius'){
                if ($this ->satuanSuhuTujuan == 'fahrenheit'){
                    return ($this ->besaranSuhu * (9/5)) + 32;
            }
            //celcius to rheamur
            if ($this-> satuanSuhuTujuan == 'rheamur'){
                return ($this ->besaranSuhu * (4/5));

            } 
            
        } //Fahrenheit to celcius
            else if ($this ->satuanSuhuAwal == 'fahrenheit'){
                if ($this ->satuanSuhuTujuan == 'celcius'){
                    return ($this -> besaranSuhu - 32) * (5/9);
                }
            }
         //Rheamur to celcius
            else if ($this -> satuanSuhuAwal == 'rheamur'){
                if ($this -> satuanSuhuTujuan == 'celcius'){
                    return ($this ->besaranSuhu * (5/4));
                }
            }
    }

    public function cetak(){
        echo '<tr>';
        echo '<td style = "text-align : center;">' .$this->satuanSuhuAwal. '</td>';
        echo '<td style = "text-align : center;">' .$this->besaranSuhu. '</td>';
        echo '<td style = "text-align : center;">' .$this->satuanSuhuTujuan. '</td>';
        echo '<td style = "text-align : center;">' .$this-> konversi(). '</td>';
        echo '</tr>';
    }
}
?>

