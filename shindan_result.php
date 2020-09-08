<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<link rel="stylesheet" href="css/style.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>アンケート</title>
</head>
<body>
<div id="container">

<header>
<h1 id="logo"><a href="index.html"><img src="images/reallogo.png" alt="Simple Site"></a></h1>
</header>

<nav id="menubar">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="result.php">Result</a></li>
  <li><a href="member.php">Member</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="quiz.php">Quiz</a></li>
  <li><a href="poll.php">Poll</a></li>
  <li><a href="shindan.php">Diagnosis</a></li>
</ul>
</nav>
<?php 
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $result='';
    $fav=[$result,$q1,$q2,$q3];
  
    $madrid=['レアルマドリード',2,2,1];

    $barcerona=['バルセロナ',1,1,1];

    $atletico=['アトレティコマドリード',3,3,1];
   
    $juventus=['ユベントス',3,3,2];
    
    $milan=['ミラン',3,2,1];
    
    $intel=['インテル',3,1,1];
    
    $bayern=['バイエルン',2,1,2];
    
    $paris=['パリサンジェルマン',1,2,1];
    
    $city=['マンチェスターシティ',1,1,2];
    
    $united=['マンチェスターユナイテッド',2,3,1];
   
    $arsenal=['アーセナル',2,1,1];
    
    $chelsea=['チェルシー',2,3,2];
    
    $liverpool=['リヴァプール',1,3,1];
    //122バイエルン
    $bayern2=['バイエルン',1,2,2];
    //132マドリー
    $madrid2=['レアルマドリード',1,3,2];
    //222マドリー
    $madrid3=['レアルマドリード',2,2,2];
    //312インテル
    $intel2=['インテル',3,1,2];
    //332アトレティコ
    $atletico2=['アトレティコマドリード',3,1,2];
    //if($_POST['submit']) {
    //if($q1 ==1 & $q2 ==1){
       // echo "マンチェスターシティ";
    //}else{
        //echo "バルセロナ";
    //};
    $teams=[$madrid,$barcerona,$atletico,$juventus,$milan,$intel,$bayern,$paris,$city,$united,$arsenal,$chelsea,$liverpool,
    $bayern2,$madrid2,$madrid3,$intel2,$atletico2];

    foreach($teams as $team){
        if($team[1]==$fav[1] and $team[2]==$fav[2] and $team[3]==$fav[3]){
            echo "あなたにおすすめのチームは $team[0] です";
        }else{
            echo '';
        }

        

    };

      ?>
<footer>
<small>Copyright&copy; <a href="index.html">SIMPLE SITE</a> All Rights Reserved.</small>
<span class="pr">《<a href="http://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
</footer>

<!--スマホ用更新情報　600px以下-->
<script type="text/javascript">
if (OCwindowWidth() <= 600) {
	open_close("newinfo_hdr", "newinfo");
}
</script>
</body>
</html>