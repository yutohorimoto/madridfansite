]<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>real madrid fansite</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/openclose.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/1.0.8/jquery.csv.min.js"></script>
<script src="news.js"></script>
<!---- <script src="./pagination.min.js"></script> --->
<script src="js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div id="container">

<header>
<h1 id="logo"><a href="index.php"><img src="images/reallogo.png" alt="Simple Site"></a></h1>
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

<section>

<h2>news</h2>
<p>レアルマドリードに関する最新ニュースです。</p>
<table class="ta1">
<tr>
<th colspan="2" class="tamidashi"></th>



<div class="table-responsive">
    <table class="table table-bordered">
    
    <thead>
        
    </thead>
    <tbody id='csv-body' />
    </table>
   
</div>    
<div class="pager" id="pagers"></div>

</section>



<footer>
<small>Copyright&copy; <a href="index.html">SIMPLE SITE</a> All Rights Reserved.</small>
<span class="pr">《<a href="http://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
</footer>

<!--スマホ用更新情報　480px以下-->
<script type="text/javascript">
if (OCwindowWidth() <= 480) {
	open_close("newinfo_hdr", "newinfo");
}
</script>

</body>
</html>
