<?php
class InputType{
  protected $type;    //protectedは関係する子は変更できる
  protected $name;
  protected $value ='' ; //値が無い場合に備える 
  protected $class ='' ;
  protected $id ='' ;
  protected $required ='' ;
  protected $disabled ='' ;
  protected $label ='' ;

  function set_attr($attr){   //関数の定義
    foreach ($attr as $key => $value) { //配列の反復処理
      $this->$key = $value;  //this(InputTypeの$key=＄value)
      //$keyにはtype,$valueにはradioが入っている
    }
  }
  
  /*
    ラベルが後ろにつくタイプ
  */
  function out_attr(){  //関数の定義
    return "<label><input type='$this->type' name='$this->name'
    value='$this->value' required='$this->required'>
    $this->label</label>"; // inputの準備
  }

}

class InputTypeRadio extends InputType{  //InputTypeを元に新しいclassを作る
    protected $value = [] ; //valueを行列化 
    protected $label = [] ; //labelを行列化
  
    function out_attr(){ //out_attrの書き換え
      $html = '';  //タグを連結して溜め込む変数を初期化
      foreach ($this->value as $key => $val) {  //繰り返し処理
        $html .= "<label><input type='$this->type' name='$this->name'
        value='$val' required='$this->required'> 
        {$this->label[$key]}</label>"; //labelに配列のkeyを入れる??{}は[]の記号が文字扱いされるから配列として認識させるために入れる
        //.=は連結代入
      }
      return $html; //関数の処理を終了させる?
    }
  
  
}

?>