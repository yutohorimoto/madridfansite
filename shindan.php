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
<h3>あなたにおすすめのチームを欧州５大リーグ２４チームの中から選定します。</h3>
<form method="post" action="shindan_result.php">
    <h2>第一問</h2>
    <p>攻撃的なチーム(5)と守備的なチーム(1)どちらが好きですか？</p>
    <input type="radio" name="q1" value="5"> 5(攻撃的）<br>
    <input type="radio" name="q1" value="4"> 4<br>
    <input type="radio" name="q1" value="3"> 3<br>
    <input type="radio" name="q1" value="2"> 2<br>
    <input type="radio" name="q1" value="1"> 1（守備的）<br>
    <br>
    <h2>第二問</h2>
    <p>ポゼッション(5)とカウンター(1)どちらが好きですか？</p>
    <input type="radio" name="q2" value="5"> 5(ポゼッション)<br>
    <input type="radio" name="q2" value="4"> 4<br>
    <input type="radio" name="q2" value="3"> 3<br>
    <input type="radio" name="q2" value="2"> 2<br>
    <input type="radio" name="q2" value="1"> 1（カウンター）<br>
    <br>
    <h2>第三問</h2>
    <p>テクニック(5)とフィジカル(1)どちらを重視しますか？</p>
    <input type="radio" name="q3" value="5"> 5（テクニック）<br>
    <input type="radio" name="q3" value="4"> 4<br>
    <input type="radio" name="q3" value="3"> 3<br>
    <input type="radio" name="q3" value="2"> 2<br>
    <input type="radio" name="q3" value="1"> 1（フィジカル）<br>
    <br>
    <h2>第四問</h2>
    <p>サポーターの多い人気なチームが好きですか？</p>
    <input type="radio" name="q4" value="5"> 5（人気）<br>
    <input type="radio" name="q4" value="4"> 4<br>
    <input type="radio" name="q4" value="3"> 3<br>
    <input type="radio" name="q4" value="2"> 2<br>
    <input type="radio" name="q4" value="1"> 1（不人気）<br>
    <br>
      <h2>第五問</h2>
    <p>戦術的なチーム(5)と自由なチーム(1)どちらが好きですか？</p>
    <input type="radio" name="q5" value="5"> 5（戦術的）<br>
    <input type="radio" name="q5" value="4"> 4<br>
    <input type="radio" name="q5" value="3"> 3<br>
    <input type="radio" name="q5" value="2"> 2<br>
    <input type="radio" name="q5" value="1"> 1（自由）<br>
    <br>
    
<input type="submit" name="submit" value="結果を見る">
</form>
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
