<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="تقرير الحضور اليومي">
  <meta name="author" content="Eng. Ahmed Elemam">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> تقرير الحضور اليومي للموظفين   </title>
  <link href="css/semantic.min.css" rel="stylesheet" type="text/css" />
  <link href="css/calendar.min.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css?<?php echo md5_file("css/style.css"); ?>" rel="stylesheet" type="text/css" />
  <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
  <script language="javascript" src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/semantic.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/calendar.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/script.js?<?php echo md5_file("js/script.js")?>" type="text/javascript"></script>

</head>
<body>

<div class="ui container">
<div class="ui raised segment" style="margin:50px  0;">
<h2 class="ui label header" style="padding:20px;margin: 20px;"> تقرير الحضور اليومي للموظفين  </h2>


<div class="ui form grid stackable">
<div class="three column row">
  <div class="inline field column" >
  <label>من يوم</label>
<div class="ui calendar" id="date">
  <div class="ui input left icon">
    <i class="calendar icon"></i>
    <input type="text" placeholder="Date" id='date1'  autocomplete="off">
  </div>
</div>
  </div>
  <div class="inline field column">
  <label>الى يوم</label>
<div class="ui calendar" id="date2">
  <div class="ui input left icon">
    <i class="calendar icon"></i>
    <input type="text" placeholder="Date" id='date3' autocomplete="off">
  </div>
</div>
</div>
<div class="column no-print">
<button class="ui secondary button" type="submit" id="view">عرض</button>
</div>


</div>
</div>



<div id="data"></div>

</div>

</div>


</body>
</html>   