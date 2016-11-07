<?php
// TODO: put stuff here.
$refresh = $_GET['refresh'];
if ($refresh) {
	$dev = "<meta http-equiv='refresh' content='$refresh'/>";
}
$maincssversion = md5(file_get_contents(main.css));
$colourscssversion = md5(file_get_contents(colours.css));
?>
<html>
<head>
  <title>Joshua Wareing</title>
  <link rel="stylesheet" href="/css/main.css?<?php echo $maincssversion;?>" media="all">
  <link rel="stylesheet" href="/css/colours.css?<?php echo $colourscssversion;?>" media="all">
  <script src="/js/main.js"></script>
  <?php echo $dev; ?>   
</head>
<body>
  <div id="container">
    <div id="header">
      <a href="javascript:reload();" class="logo">Joshua Wareing</a>
      <ul>
      	<a href="/index.php"><li class="active frounded"><span>H</span>ome</li></a>
      	<a href="/portfolio"><li><span>P</span>ortfolio</li></a>
      	<a href="/social"><li><span>S</span>ocials</li></a>
      	<a href="/cv"><li><span>D</span>igital <span>CV</span></li></a>
      	<a href="/projects"><li class="erounded"><span>P</span>rojects</li></a>
      </ul>
    </div>
    <div id="content">
    	<h1>Hi</h1>

    </div>
  </div>
</body>
</html>