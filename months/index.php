<!DOCTYPE html>
<html>
<head>
    <title>Monthly Event Calendar</title>
	
        <!-- head -->
        <meta charset="utf-8"> 
        <!-- demo stylesheet -->
    	<link type="text/css" rel="stylesheet" href="demo.css" />    
        <link type="text/css" rel="stylesheet" href="layout.css" />    
        <link type="text/css" rel="stylesheet" href="elements.css" />   

	<!-- helper libraries -->
	<script src="jquery-1.9.1.min.js" type="text/javascript"></script>
    
	<!-- daypilot libraries -->
        <script src="daypilot-all.min.js" type="text/javascript"></script>

        <!-- daypilot themes -->
	<link type="text/css" rel="stylesheet" href="month_green.css" />    
	<!-- /head -->
</head>
<body>
    <input type=time>
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

						// generate and load events
						for (var i = 0; i < 10; i++) 
						{
							var duration = Math.floor(Math.random() * 1.2);
							var start = Math.floor(Math.random() * 6) - 3; // -3 to 3
							var e = new DayPilot.Event
							({
								start: new DayPilot.Date("2014-08-05T00:00:00").addDays(start),
								end: new DayPilot.Date("2014-08-05T12:00:00").addDays(start).addDays(duration),
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
	//	var myWindow = window.open("", "", "width=200, height=100");
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

    <div id="d1" title="Add New User" style="display: none">
        <div class="control-group">
                    <label class="control-label">User ID :</label>
                <div class="controls">
                    <input title="Enter number only." type="text" name="userid" placeholder="User ID" id="id"/>
                </div>
            </div>
            <div class="control-group">
                    <label class="control-label">User Name :</label>
                <div class="controls">
                    <input title="Enter text only." type="text" name="username" placeholder="User Name" id="name"/>
                </div>
            </div>
            <div class="control-group">
                    <label class="control-label">User Age :</label>
                <div class="controls">
                    <input title="Enter number only." type="text" name="userage" placeholder="User Age" id="age"/>
                </div>
            </div>
    </div>


</body>
</html>

