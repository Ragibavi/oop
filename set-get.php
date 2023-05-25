<?php 

class grade{

    private $nilai,$uts,$uas;
    private function nilai(){
        return;
    }
    public function setNilai($data){
        $this->nilai=$data;
    }
    public function setUts($data){
        $this->uts=$data;
    }
    public function setUas($data){
        $this->uas=$data;
    }
    public function getNilai(){
        return $this->nilai. "" .$this->nilai();
    }
    public function getUts(){
        return $this->uts. "" .$this->nilai();
    }
    public function getUas(){
        return $this->uas. "" .$this->nilai();
    }
    public function getStatus($aspect){
        $grade = 0;

        switch($aspect){
            case 'nilai':
              $grade = $this->nilai;
              break;
            case 'uts':
              $grade = $this->uts;
              break;
            case 'uas':
              $grade = $this->uas;
              break;
            default:
                return;
        }

        if($grade > 75){
            return "Nilai Kompeten";
        }
        else if($grade == 75){
            return "Nilai Pas KKM";
        }
        else{
            return "Nilai Tidak Kompeten";
        }

    }
}

$grade = new grade;
$grade->setNilai(60);
$grade->setUts(75);
$grade->setUas(80);

$nilai = $grade->getNilai();
$nilaiuts = $grade->getUts();
$nilaiuas = $grade->getUas();

$arrnilai = array($nilai,$nilaiuts,$nilaiuas);

echo "Nilai anda : " . $arrnilai[0] . " ," . $arrnilai[1] . " ," . $arrnilai[2];
echo "<br>";
echo "<br>";
echo "Nilai Tugas : " .$grade->getStatus('nilai') ;
echo "<br>";
echo "Nilai UTS : " . $grade->getStatus('uts');
echo "<br>";
echo "Nilai UAS : " . $grade->getStatus('uas');
echo "<br>";
echo "<br>";
echo "Nilai Tertinggi Anda : ". (max($arrnilai));
echo "<br>";
echo "Nilai Terendah Anda : ". (min($arrnilai));
echo "<br>";
echo "Nilai Rata-Rata Anda : ". $average = array_sum($arrnilai) / count($arrnilai);
?>