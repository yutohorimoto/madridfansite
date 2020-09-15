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

<form method="post" action="poll.php">
あなたがレアルマドリードに獲得を望む選手は？<br><br>
<?php
$players = array('ムバッペ', 'ハーランド', 'ネイマール',
  'ディバラ', 'その他');
for ($i = 0; $i < count($players); $i++) {
  print "<input type='radio' name='cn' value='$i'>{$players[$i]}<br>\n";
}
?>
<br>
<input type="submit" name="submit" value="投票">
</form>
<table border='1'>
<?php
$ed = file('que.txt');
for ($i = 0; $i < count($players); $i++) $ed[$i] = rtrim($ed[$i]);
if ($_POST['submit']) {
  $ed[$_POST['cn']]++;
  //$fp = fopen('que.txt', 'w');
  $fp = fopen('https://realmadridsite.s3-us-west-2.amazonaws.com/que.txt', 'w');
  for ($i = 0; $i < count($players); $i++) {
    fwrite($fp, $ed[$i] . "\n");
  }
  fclose($fp);
}

for ($i = 0; $i < count($players); $i++) {
  print "<tr>";
  print "<td>{$players[$i]}</td>";
  print "<td><table><tr>";
  $w = $ed[$i] * 10;
  print "<td width='$w' bgcolor='blue'> </td>";
  print "<td>{$ed[$i]} 票</td>";
  print "</tr></table></td>";
  print "</tr>\n";
}
?>
</table>
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