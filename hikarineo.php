
<?php require "class.php";?>
<form action="" method="post">


<?php

$hinmok = new InputTypeRadio();  //InputTypeで実行
  $hinmok_attr = [    //名前を作成 今回は配列
    'type'=>'radio'  //key => value
    ,'name'=>'hinmok'
    ,'value'=>['新規申し込み','転用申し込み'] //配列にする
    ,'label'=>['新規申し込み','転用申し込み']
    ,'required'=>'true'
  ];
 $hinmok->set_attr($hinmok_attr);  //$hinmokつまりInputTypeの中にあるset_arrtを起動する(繰り返し処理)
 echo '<p>', $hinmok->out_attr(); //inputの表示
 



 
$od_year = new InputType();  //INputTypeで起動
  $od_year_arr=[    //配列を作る
    'type'=>'text'
    ,'name'=>'od-year'
    ,'label'=>'年'
    ,'required'=>'true'
  ];
  $od_year->set_attr($od_year_arr);  //set_attrに読み込ませる
  echo '<p>令和 ', $od_year->out_attr(); //上の読み込ませものをout_attrで書き出す

 $contractor_name = new InputType(); //InputTypeで起動
  $contractor_name_arr=[  //配列を作る
    'type'=>'text'
    ,'name'=>'contractor-name'
    ,'label'=>'ご契約者名義(漢字)'
    ,'required'=>'true'
  ];
  $contractor_name->set_attr($contractor_name_arr); //set_attrに読み込む
  echo '<p> ', $contractor_name->out_attr(); //out_attrで書き出す

$submit = new InputType();
  $submit_arr=[
    'type' => 'submit'
    ,'value' => '決定'
  ];
$submit -> set_attr($submit_arr);
echo '<p>' , $submit -> out_attr();
  ?>
  </form>