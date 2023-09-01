<!DOCTYPE html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
    <style type="text/css">
        html, body{
            height:100%;
            padding:0px;
            margin:0px;
            overflow: hidden;
        }
    </style>
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
</head>
<body>
    <div id="gantt_here" style='width:100%; height:100%;'></div>
    <script type="text/javascript">
        gantt.config.xml_date = "%Y-%m-%d %H:%i:%s";
        gantt.config.step = 1;
        gantt.config.scale_unit= "day";
        gantt.init("gantt_here", new Date(2010,7,1), new Date(2010,8,1));
        /* refers to the 'data' action that we will create in the next substep */
        gantt.load("./gantt_data", "xml");
        /* refers to the 'data' action as well */
        var dp = new gantt.dataProcessor("./gantt_data");
        dp.init(gantt);
    </script>
</body>
        
