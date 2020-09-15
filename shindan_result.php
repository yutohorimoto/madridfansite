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
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $result='';
    $fav=[$result,$q1,$q2,$q3,$q4,$q5];
  
    $madrid=['レアルマドリード',2,2,3,5,1];

    $barcerona=['バルセロナ',4,5,5,5,2];

    $atletico=['アトレティコマドリード',1,1,2,3,5];
   
    $juventus=['ユベントス',3,4,3,4,2];
    
    $milan=['ミラン',2,3,1,3,2];
    
    $intel=['インテル',3,1,2,4,4];
    
    $bayern=['バイエルン',5,4,3,5,5];
    
    $paris=['パリサンジェルマン',5,5,5,5,3];
    
    $city=['マンチェスターシティ',5,5,5,4,5];
    
    $united=['マンチェスターユナイテッド',2,1,1,5,2];
   
    $arsenal=['アーセナル',2,3,4,3,1];
    
    $chelsea=['チェルシー',4,4,3,4,2];
    
    $liverpool=['リヴァプール',4,2,3,4,4];
    
    $sevilia=['セビージャ',1,3,4,2,4];

    $spurs=['トッテナム',2,1,1,3,4];

    $bvb=['ドルトムント',5,2,4,4,3];

    $leipzig=['ライプツィヒ',4,5,2,1,5];

    $atalanta=['アタランタ',5,5,4,1,4];

    $napoli=['ナポリ',3,4,4,2,3];

    $lazio=['ラツィオ',3,2,2,1,4];

    $rome=['ローマ',4,3,2,3,3];

    $marseille=['マルセイユ',2,4,3,1,2];

    $lyon=['リヨン',1,2,2,2,2];

    $borussia=['ボルシアMG',3,3,3,2,3];

    
    $teams=[$madrid,$barcerona,$atletico,$juventus,$bayern,$paris,$city,$united,$arsenal,$chelsea,$liverpool,$milan,$intel,
    $sevilia,$spurs,$bvb,$leipzig,$atalanta,$napoli,$lazio,$rome,$marseille,$lyon,$borussia];

    $distance=1000;
    

    foreach($teams as $team){
        $dis=pow($team[1]-$fav[1],2)+pow($team[2]-$fav[2],2)+pow($team[3]-$fav[3],2)+pow($team[4]-$fav[4],2)+pow($team[5]-$fav[5],2);
        if($dis<$distance){
            $distance=$dis;
            $result=$team[0];
        }

    };

    echo "あなたにおすすめのチームは $result です"

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