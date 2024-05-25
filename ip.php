<?php
error_reporting(0);
$base64_img = trim($_POST['img']);
$up_dir = './files/';//存放在当前目录的img文件夹下



if(!file_exists($up_dir)){
  mkdir($up_dir,0777);
}

if(preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_img, $result)){
  $type = $result[4];
  if(in_array($type,array('bmp','png',＇jpg＇,＇jpeg＇))){
    $new_file = $up_dir.'_'.date('mdHis_').'.'.$type;
    file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_img)));
    header("Location:index.php?url=https://vdse.bdstatic.com//192d9a98d782d9c74c96f09db9378d93.mp4?authorization=bce-auth-v1%2F40f207e648424f47b2e3dfbb1014b1a5%2F2021-07-12T02%3A14%3A24Z%2F-1%2Fhost%2F530146520a1c89fb727fbbdb8a0e0c98ec69955459aed4b1c8e00839187536c9");
  }
}
?>
