<?php
//    include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Monthly Event Calendar</title>
	
        <!-- head -->
        <meta charset="utf-8"> 
        <!-- demo stylesheet -->
    	<link type="text/css" rel="stylesheet" href="months/demo.css" />    
        <link type="text/css" rel="stylesheet" href="months/layout.css" />    
        <link type="text/css" rel="stylesheet" href="months/elements.css" />   

	<!-- helper libraries -->
	<script src="months/jquery-1.9.1.min.js" type="text/javascript"></script>
    
	<!-- daypilot libraries -->
        <script src="months/daypilot-all.min.js" type="text/javascript"></script>

        <!-- daypilot themes -->
	<link type="text/css" rel="stylesheet" href="month_green.css" />    
	<!-- /head -->
        
        
		<link href="js/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="js/css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="js/css/bootstrap-responsive.css" type="text/css"/>
<link rel="stylesheet" href="js/css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="js/css/jquery.qtip.min.css" type="text/css"/>
<script src="js/js/jquery-1.8.3.min.js"></script>
<script src="js/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/js/jquery.qtip.min.js"></script>
<script src="js/js/myjquery.js"></script>
</head>
<body>
<form>
    
    <script type="text/javascript">
        var today=new Date();
        var yy=today.getFullYear();
        var mm=today.getMonth()+1;
        var dd=today.getDate();
   
    
</script> 
<div class="space">
<span id="start">2013-03-01</span> <a href="#" onclick="picker.show(); return false;">Change</a>
</div>


<script type="text/javascript">
    var picker = new DayPilot.DatePicker({
        target: 'start', 
        pattern: 'yyyy-MM-dd', 
        onTimeRangeSelected: function(args) { 
            dp.startDate = args.start;
            dp.update();
        }
    });
</script>
<!-- top -->
   
    
    <div id="main">
		<div id="container" >
	        <div id="content">
	            <div>
				<!-- /top -->
				<div id="dp"></div>
					<script type="text/javascript">
						var dp = new DayPilot.Month("dp");
						// behavior and appearance
						dp.cellMarginBottom = 20;
						dp.weekStarts = 0;
    
                                                dp.bubble = new DayPilot.Bubble(
						{
							cssClassPrefix: "bubble_default",
							onLoad: 
							function(args) 
							{
								var ev = args.source;
								args.html = "testing bubble for: " + ev.text();
							}
						});
						// view
                                                var today=new Date();
                                                var yy=today.getFullYear();
                                                var mm=today.getMonth()+1;
                                                var dd=today.getDate();
                                                document.write(yy + "-" + mm + "-" + dd);
						dp.startDate = yy + "-" + mm + "-" + dd;  // or just dp.startDate = "2013-03-25";
</script>
<?php
		
?>
<script>
						// generate and load events
						for (var i = 0; i < 10; i++) 
						{
							var duration = Math.floor(Math.random() * 1.2);
							var start = Math.floor(Math.random() * 6) - 3; // -3 to 3
							var e = new DayPilot.Event
							({
								start: new DayPilot.Date("2014-11-05T00:00:00").addDays(start),
								end: new DayPilot.Date("2014-11-05T12:00:00").addDays(start).addDays(duration),
								id: DayPilot.guid(),
								text: "Event " + i
							});
						dp.events.add(e);
						}
                                                
    // event moving
    dp.onEventMoved = function (args) {
        dp.message("Moved: " + args.e.text());
    };

																									// event resizing
																									dp.onEventResized = function (args) {
																										dp.message("Resized: " + args.e.text());
																									};

    // event creating
    dp.onTimeRangeSelected = function (args) {
        var name = prompt("New event name:", "Event");
		
        dp.clearSelection();
        if (!name) return;
        var e = new DayPilot.Event({
            start: args.start,
            end: args.end,
            id: DayPilot.guid(),
            text: name
        });
        dp.events.add(e);
        dp.message("Created");
    };
    
    dp.onEventClicked = function(args) {
        alert("clicked: " + args.e.id());
    };
    
    dp.onHeaderClicked = function(args) {
        alert("day: " + args.header.dayOfWeek);
    };
    
    dp.init();


</script>

<!-- bottom -->
                </div>
	        </div>
        </div>
    </div>
<script type="text/javascript">
$(document).ready(function() {
    var url = window.location.href;
    var filename = url.substring(url.lastIndexOf('/')+1);
    if (filename === "") filename = "index.html";
    $(".menu a[href='" + filename + "']").addClass("selected");
});
        
</script>
<!-- /bottom -->



<!--//////////////////////////////// Add new Event ///////////////////////////////////////////-->

    
</form>
</body>
</html>
<?php
  //  include 'footer.php';
?>
