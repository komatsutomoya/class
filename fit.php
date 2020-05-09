<?php
class fit{
    private $kyori ;
    protected $tax = 35000;
            //直接出し入れできないが継承した子クラスからは可能
    function soko($km){
        if ($km > 0);
        $this -> kyori += $km;
    }
    public function getkyori(){   
    return $this -> kyori;
    }
    public function kyori(){   
        echo $this -> kyori;
        }
}
class Lexus extends fit {
            //kyoriの部分は同じなのでオブジェクトを継承する(extends)
    protected $tax = 50000;
    public function gettax(){
        return $this -> tax;
    }
}

$fitA = new fit;
$fitB = new fit;
            //$fitAはインスタンス(fitの複製)
$fitA -> soko(50+50);
$fitA -> soko(10);
$fitB -> soko(100);
            //インスタンスのメソッドを実行
echo "fitAの走行距離は",$fitA->getkyori(),"km";
            //変数に代入できる↑
            //メソッド内にechoがあるのでecho外で$fitA->kyori()で出る
            $fitA->kyori();
            //ただし変数に代入できない
echo  "<br>";
echo "fitBの走行距離は",$fitB->getkyori(),"km";
            //インスタンスのプロパティ(変数)を表示
$sa=$fitA->getkyori() - $fitB->getkyori();
echo  "<br>";
echo "fitAとfitBの走行距離の差は",$sa,"km";
            //$saの中をそのまま入れてもいい

$Lexus = new Lexus;
$Lexus -> soko(50);
echo "<p>Lexusの走行距離は",$Lexus->getkyori(),"km";
echo "<p>Lexusの重量税は",$Lexus->gettax(),"円";

?>