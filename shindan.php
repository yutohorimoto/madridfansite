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
<h3>あなたにおすすめのチームを診断します</h3>
<form method="post" action="shindan_result.php">
    <h2>第一問</h2>
    <p>攻撃的なチームと守備的なチームどちらが好きですか？</p>
    <input type="radio" name="q1" value="1"> 攻撃的<br>
    <input type="radio" name="q1" value="2"> バランス<br>
    <input type="radio" name="q1" value="3"> 守備的<br>
    <br>
    <h2>第二問</h2>
    <p>攻撃的なチームと守備的なチームどちらが好きですか？</p>
    <input type="radio" name="q2" value="1"> ポゼッション<br>
    <input type="radio" name="q2" value="2"> バランス<br>
    <input type="radio" name="q2" value="3"> カウンター<br>
    <br>
    <h2>第三問</h2>
    <p>どちらのチームスタイルが好きですか？</p>
    <input type="radio" name="q3" value="1"> 情熱<br>
    <input type="radio" name="q3" value="2"> 冷静<br>
    <br>
    
<input type="submit" name="submit" value="結果を見る">
</form>
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
