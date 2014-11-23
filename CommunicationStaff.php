<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="paul" >

    <title>Heifer Live</title>

<link href="/css/global.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/Chart.js"></script>

  <script
 src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAADo_jR4IdCW4rq0jBSSTsdBS68XUS_3PJKG0DQTxUHDYV1odHnBSBYc7AMEamRkJ41om-dquieiJvvQ"
 type="text/javascript"></script>

   <style type="text/css">
div.figure {
float: left;
width: 45%;
border: thin silver solid;
margin: 0.5em;
padding: 0.5em;
background-color: #4C787E;
}
div.figure p {
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}


.clientArea {  
align:center;
color: #000000;
font-family: sans-serif;
font-size: 10pt;
margin: 0px;
overflow: auto;
padding: 1px;
scrollbar-face-color: #000000;
scrollbar-highlight-color: #cacaca;
scrollbar-3dlight-color: #cacaca;
scrollbar-darkshadow-color: #000000;
scrollbar-shadow-color: #000000;
scrollbar-arrow-color: #000000;
scrollbar-track-color: #cacaca;
}

#example {
 float:right;
}

#example div {
}

#div-before, #div-after {
 background-color:#eee;
 float:right;
 color:#666;
}
#div-1 {
 width:222px;
 float:right;
margin: 5em;
 background-color:#000;
 color:#fff;
}
#div-1-padding {
 float:right;
 padding:10px;
}
#div-1a {
 float:right;
 background-color:#fff;
 width:190px;
}
#div-1b {
 float:right;
 background-color:#fff;
 width:190px;
}
#div-1c {
 clear:both;
}
#example div p {
 margin:0 .25em;
 padding:.25em 0;
}
#description {
 float:left;
 width:40%;
}
pre {
 padding:1em;
 border:1px dashed #aaa;
 background:#fafafa;
}
p {
 margin:0.5em 0;
}
h3 {
 color:#999;
}

  </style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onunload="GUnload()">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Heifer International</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a class="active" href="index.html"><i class="fa fa-dashboard fa-fw"></i> My News Feed</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Global Stats<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Metrics.html">All Metrics</a>
                                </li>
                                <li>
                                    <a href="#">Animals Given: 6903</a>
                                </li>
                                <li>
                                    <a href="#">Countries Visited: 35</a>
                                </li>
                                <li>
                                    <a href="#">Volunteers: 12308</a>
                                </li>
                                <li>
                                    <a href="#">Lives Touched: 2342463</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> News Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Animals</a>
                                </li>
                                <li>
                                    <a href="#">Videos</a>
                                </li>
                                <li>
                                    <a href="#">Audio</a>
                                </li>
                                <li>
                                    <a href="#">Photos</a>
                                </li>
                                <li>
                                    <a href="#">Stories</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Post!</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Users <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="placeHolder.html">Community Beneficiaries</a>
                                </li>
                                <li>
                                    <a href="placeHolder.html">Field Staff</a>
                                </li>
                                <li>
                                    <a href="placeHolder.html">Program Staff</a>
                                </li>
                                <li>
                                    <a href="CommunicationStaff.php">Communications Staff</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="placeHolder.html"><i class="fa fa-rocket fa-fw"></i> Countries <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">North America <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Canada</a>
                                        </li>
                                        <li>
                                            <a href="#">United States</a>
                                        </li>
                                        <li>
                                            <a href="#">Mexico</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Latin America <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Puerto Rico</a>
                                        </li>
                                        <li>
                                            <a href="#">Panama</a>
                                        </li>
                                        <li>
                                            <a href="#">Haiti</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">South America <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Brazil</a>
                                        </li>
                                        <li>
                                            <a href="#">Uruguay</a>
                                        </li>
                                        <li>
                                            <a href="#">Venezuela</a>
                                        </li>
                                        <li>
                                            <a href="#">Chile</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Europe <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Spain</a>
                                        </li>
                                        <li>
                                            <a href="#">France</a>
                                        </li>
                                        <li>
                                            <a href="#">Italy</a>
                                        </li>
                                        <li>
                                            <a href="#">Germany</a>
                                        </li>
                                        <li>
                                            <a href="#">Poland</a>
                                        </li>
                                        <li>
                                            <a href="#">Hungary</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Africa <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Algeria</a>
                                        </li>
                                        <li>
                                            <a href="#">Mali</a>
                                        </li>
                                        <li>
                                            <a href="#">Niger</a>
                                        </li>
                                        <li>
                                            <a href="#">Chad</a>
                                        </li>
                                        <li>
                                            <a href="#">Zimbabwe</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"> Asia <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">China</a>
                                        </li>
                                        <li>
                                            <a href="#">Mongolia</a>
                                        </li>
                                        <li>
                                            <a href="#">Kazakhstan</a>
                                        </li>
                                        <li>
                                            <a href="#">India</a>
                                        </li>
                                        <li>
                                            <a href="#">Cambodia</a>
                                        </li>
                                        <li>
                                            <a href="#">Thailand</a>
                                        </li>
                                        <li>
                                            <a href="#">Malaysia</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"> Australia <span class="fa arrow"></span></a>
                                    <!-- /.nav-third-level -->
                                    <ul class = "nav-third-level">
                                        <li>
                                            <a href="#">Australia, what'd you expect?</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>






        <div id="page-wrapper">

<div class="wrapper interior-content">

    <section class="tabs">
<div class="align-center">
            <ul class="carousel-nav nav full-width primer-text group">

<table border="0" cellspacing="5" align="center">
  <tbody>
    <tr valign="top">
      <td>
          <div id="map" style="width: 600px; height: 450px;">
      <script type="text/javascript">
//<![CDATA[
if (GBrowserIsCompatible()) {
// this variable will collect the html which will eventually be placed in the side_bar
var side_bar_html = "";
// arrays to hold copies of the markers used by the side_bar
// because the function closure trick doesnt work there
var gmarkers = [];
var i = 0;

// A function to create the marker and set up the event window
function createMarker(point,name,html) {
var marker = new GMarker(point);
GEvent.addListener(marker, "click", function() {
marker.openInfoWindowHtml(html);
});
// save the info we need to use later for the side_bar
gmarkers[i] = marker;
// add a line to the side_bar html
side_bar_html += '<a href="javascript:myclick(' + i + ')">' + name + '</a><br>';
i++;
return marker;
}
// This function picks up the click and opens the corresponding info window
function myclick(i) {
GEvent.trigger(gmarkers[i], "click");
}
// create the map
var map = new GMap2(document.getElementById("map"));
map.addControl(new GLargeMapControl());
map.addControl(new GMapTypeControl());
map.setCenter(new GLatLng(37.8560, -122.2437), 1);
// Read the data from maplight.xml
var request = GXmlHttp.create();
request.open("GET", "heifer-places.xml", true);
request.onreadystatechange = function() {
if (request.readyState == 4) {
var xmlDoc = GXml.parse(request.responseText);
// obtain the array of markers and loop through it
var markers = xmlDoc.documentElement.getElementsByTagName("marker");
for (var i = 0; i < markers.length; i++) {
// obtain the attribues of each marker
var lat = parseFloat(markers[i].getAttribute("lat"));
var lng = parseFloat(markers[i].getAttribute("lng"));
var point = new GLatLng(lat,lng); var html = GXml.value(markers[i].getElementsByTagName("infowindow")[0]);
var label = markers[i].getAttribute("label");
// create the marker
var marker = createMarker(point,label,html);
map.addOverlay(marker);
}
// put the assembled side_bar_html contents into the side_bar div
document.getElementById("side_bar").innerHTML = side_bar_html;
}
}
request.send(null);
}
else {
alert("Sorry, the Google Maps API is not compatible with this browser");
}
      </script>
                        </ul>
        </div>
</section>

  </div>

      </td>
      <td>
<br>
<table border="1" cellpadding="2" cellspacing="2"><tr><td align="center">
<span
 style="color: rgb(102, 102, 102);">REGIONS
       <br style="color: rgb(102, 102, 102);">
          <div class="clientArea" style="text-align: center;height: 222px;" id="side_bar">
 </div>
<form action="search_results.html"
 name="search">
<span
 style="color: rgb(102, 102, 102);">Browse by Type:
       <br style="color: rgb(102, 102, 102);">
      <select name="MediaType" id="MediatType">
      <option value="1">Documents (doc/pdf)</option>
      <option value="2">Audio (mp3)</option>
      <option value="3">Photos (gif/jpg/png)</option>
      </select>
       <br>
<br>
      <span style="color: rgb(102, 102, 102);">Browse by Time Period:</span><br>
      <select name="MediaType" id="MediatType">
      <option value="1">Today</option>
      <option value="7">Last 7 Days</option>
      <option value="30">Last Month</option>
      </select>
<br>
      <br
 style="color: rgb(102, 102, 102);">
       <span style="color: rgb(102, 102, 102);">Browse by Country:</span><br>
      <select name="location" id="location">
      <option value="1">Armenia</option>
      <option value="2">Bangladesh</option>
      <option value="3">Bolivia</option>
      <option value="4">Cambodia</option>
      <option value="5">Cameroon</option>
      <option value="6">China</option>
      <option value="7">Ecuador</option>
      <option value="8">Georgia</option>
      <option value="9">Ghana</option>
      <option value="10">Haiti</option>
      <option value="11">Honduras</option>
      <option value="12">India</option>
      <option value="13">Malawi</option>
      <option value="14">Mexico</option>
      <option value="15">Nepal</option>
      <option value="16">Nicaragua</option>
      <option value="17">Peru</option>
      <option value="18">Romania</option>
      <option value="19">Rwanda</option>
      <option value="20">Senegal</option>
      <option value="21">South Africa</option>
      <option value="22">Tanzania</option>
      <option value="23">Ukraine</option>
      <option value="24">Uganda</option>
      <option value="25">USA</option>
      <option value="26">Vietnam</option>
      <option value="27">Zambia</option>
      <option value="28">Zimbabwe</option>
      </select>

<br>
<br>
<input name="search" value="Enter Keywords..." size="20"><br>
      <button value="search" name="search"><a href="CommunicationStaffResults.html">search</a></button><br><br>
</form>
</td></tr></table>


      </td>
    </tr>
<tr bgcolor="black">
<td align="right" valign="top">
<br>
</td>
</tr>
  </tbody>
</table>


        <!-- CONTENT HERE -->










        <!-- END OF CONTENT -->
        </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <script src="js/postloader.js"></script>
    <script src="js/Chart.js"></script>
</body>

</html>
