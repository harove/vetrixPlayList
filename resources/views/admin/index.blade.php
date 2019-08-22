@extends('layouts.app')

@section('content')
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="jquery-1.10.2.js" type="text/javascript" language="javascript"></script>
  <script src="jquery-ui-1.10.4.js" type="text/javascript" language="javascript"></script>
  <script type="text/javascript" src="../js/jq.schedule.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function(){
    var $sc = jQuery("#schedule").timeSchedule($options);
});
</script>
  <title>Document</title>
</head>
<body>
<div id="schedule"></div>


</body>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</html>
  
@endsection