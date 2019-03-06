<?php
// vendor css customizations by jonkelley

// Output CSS and not plain text
header("Content-type: text/css");

// Check if the config file exists
if (file_exists('/etc/pistar-css.ini')) {
    // Use the values from the file
    $piStarCssFile = '/etc/pistar-css.ini';
	if (fopen($piStarCssFile,'r')) { $piStarCss = parse_ini_file($piStarCssFile, true); }

    // Set the Values from the config file
    $backgroundPage = $piStarCss['Background']['Page'];		// usually off-white
    $backgroundContent = $piStarCss['Background']['Content'];   // The White background in the content section
    $backgroundBanners = $piStarCss['Background']['Banners'];   // The ubiquitous Pi-Star Red
    $textBanners = $piStarCss['Text']['Banners'];            	// Usually white
    $bannerDropShaddows = $piStarCss['Text']['BannersDrop'];    // Banner drop shaddow colour
    $tableHeadDropShaddow = $piStarCss['Tables']['HeadDrop'];   // Table Headder drop shaddows
    $textContent = $piStarCss['Content']['Text'];            	// Used for the section titles
    $tableRowEvenBg = $piStarCss['Tables']['BgEven']; 		// Table Row BG Colour (Even)
    $tableRowOddBg = $piStarCss['Tables']['BgOdd'];		// Table Row BG Colour (Odd)

} else {
    // Default values
    $backgroundPage = "edf0f5";         // usually off-white
    $backgroundContent = "ffffff";      // The White background in the content section
    $backgroundBanners = "dd4b39";      // The ubiquitous Pi-Star Red
    $textBanners = "ffffff";            // Usually white
    $bannerDropShaddows = "303030";     // Banner drop shaddow colour
    $tableHeadDropShaddow = "8b0000";   // Table Headder drop shaddows
    $textContent = "000000";            // Used for the section titles
    $tableRowEvenBg = "E6E6E6";		// Table Row BG Colour (Even)
    $tableRowOddBg = "C5C5C5";		// Table Row BG Colour (Odd)
}
?>
.container {
    width: 820px;
    text-align: left;
    margin: auto;
}

body, font {
    font: 12px verdana,arial,sans-serif;
    color: #ffffff;
}

.header {
    background-image: url("/images/metal_vent.jpg");
    background-repeat: repeat;
    background-size: 100px;
    text-decoration : none;
    color : #<?php echo $textBanners; ?>;
    font-family : verdana, arial, sans-serif;
    text-align : left;
    padding : 5px 0px 5px 0px;
    border-radius : 10px 10px 0 0;
 }

.nav {
    float : left;
    margin : 0;
    padding : 3px 3px 3px 3px;
    width : 160px;
    background : #242d31;
    font-weight : normal;
    min-height : 100%;
}

.content {
    margin : 0 0 0 166px;
    padding : 1px 5px 5px 5px;
    color : #<?php echo $textContent; ?>;
    background : #<?php echo $backgroundContent; ?>;
    text-align: center;
}

.contentwide {
    padding: 5px 5px 5px 5px;
    color: #<?php echo $textContent; ?>;
    background: #<?php echo $backgroundContent; ?>;
    text-align: center;
}

.footer {
    background-image: url("/images/universe.jpg");
    background-repeat: repeat;
    background-size: 800px;
    text-decoration : none;
    color : white;
    font-family : verdana, arial, sans-serif;
    font-size : 15px;
    text-align : center;
    padding : 10px 0 10px 0;

    padding-top: 5px;border-radius : 80px 80px 80px 80px;
    clear : both;
}

#tail {
    background-image: url("/images/universe.jpg");
    background-repeat: repeat fixed top left;;
    background-size: 800px;
    height: 450px;
    width: 805px;
    padding-left: 5px;
    padding-top: 5px;
    overflow-y: scroll;
    overflow-x: scroll;
    color: white;
}

table {
    vertical-align: middle;
    text-align: center;
    empty-cells: show;
    padding-left: 0px;
    padding-right: 0px;
    padding-top: 0px;
    padding-bottom: 0px;
    border-collapse:collapse;
    border-color: #494949;
    border-style: solid;
    border-spacing: 4px;
    border-width: 2px;
    text-decoration: none;
    color: #ffffff;
    background: #000000;
    font-family: verdana,arial,sans-serif;
    width: 100%;
    white-space: nowrap;
}

table th {
    font-family: "Lucidia Console",Monaco,monospace;
    text-shadow: 1px 1px #<?php echo $tableHeadDropShaddow; ?>;
    text-decoration: none;
    background-image: url("/images/metal_vent.jpg");
    background-size: 100px;
    background-repeat: repeat;
    border: 1px solid #c0c0c0;
}

table tr:nth-child(even) {
    /* background: #<?php echo $tableRowEvenBg; ?>; */
    background-image: url("/images/brush-light.jpg");
}

table tr:nth-child(odd) {
    /* background: #<?php echo $tableRowOddBg; ?>; */
    background-image: url("/images/brush-lightdark.jpg");
}

table td {
    color: #000000;
    font-family: "Lucidia Console",Monaco,monospace;
    text-decoration: none;
    border: 1px solid #000000;
}

body {
    background: #<?php echo $backgroundPage; ?>;
    color: #000000;
}

a {
    text-decoration:none;

}

a:link, a:visited {
    text-decoration: none;
    color: #0000e0;
    font-weight: normal;
}

a.tooltip, a.tooltip:link, a.tooltip:visited, a.tooltip:active  {
    text-decoration: none;
    position: relative;
    color: #FFFFFF;
}

a.tooltip:hover {
    text-shadow: none;
    text-decoration: none;
    color: #FFFFFF;
    background: transparent;
}

a.tooltip span {
    text-shadow: none;
    text-decoration: none;
    display: none;
}

a.tooltip:hover span {
    text-shadow: none;
    text-decoration: none;
    display: block;
    position: absolute;
    top: 20px;
    left: 0;
    z-index: 100;
    color: #000000;
    border:1px solid #000000;
    background: #f7f7f7;
    font: 12px Verdana, sans-serif;
    text-align: left;
    white-space: nowrap;
}

th:last-child a.tooltip:hover span {
    left: auto;
    right: 0;
}

a.tooltip span b {
    text-shadow: none;
    text-decoration: none;
    display: block;
    color: #000000;
    margin: 0;
    padding: 0;
    font-size: 12px;
    font-weight: bold;
    border: 0px;
    border-bottom: 1px solid black;
    background: #d0d0d0;
}

a.tooltip2, a.tooltip2:link, a.tooltip2:visited, a.tooltip2:active  {
    text-shadow: none;
    text-decoration: none;
    position: relative;
    font-weight: bold;
    color: #000000;
}

a.tooltip2:hover {
    text-shadow: none;
    text-decoration: none;
    color: #000000;
    background: transparent;
}

a.tooltip2 span {
    text-shadow: none;
    text-decoration: none;
    display: none;
}

a.tooltip2:hover span {
    text-shadow: none;
    text-decoration: none;
    display: block;
    position: absolute;
    top: 20px;
    left: 0;
    width: 202px;
    z-index: 100;
    color: #000000;
    border:1px solid #000000;
    background: #f7f7f7;
    font: 12px Verdana, sans-serif;
    text-align: left;
    white-space: normal;
}

a.tooltip2 span b {
    text-shadow: none;
    text-decoration: none;
    display: block;
    color: #000000;
    margin: 0;
    padding: 0;
    font-size: 12px;
    font-weight: bold;
    border: 0px;
    border-bottom: 1px solid black;
    background: #d0d0d0;
}

ul {
    padding: 5px;
    margin: 10px 0;
    list-style: none;
    float: left;
}

ul li {
    float: left;
    display: inline; /*For ignore double margin in IE6*/
    margin: 0 10px;
}

ul li a {
    text-decoration: none;
    float:left;
    color: #999;
    cursor: pointer;
    font: 900 14px/22px "Arial", Helvetica, sans-serif;
}

ul li a span {
    margin: 0 10px 0 -10px;
    padding: 1px 8px 5px 18px;
    position: relative; /*To fix IE6 problem (not displaying)*/
    float:left;
}

ul.mmenu li a.current, ul.mmenu li a:hover {
    background: url(/images/buttonbg.png) no-repeat top right;
    color: #0d5f83;
}

ul.mmenu li a.current span, ul.mmenu li a:hover span {
    background: url(/images/buttonbg.png) no-repeat top left;
}

h1 {
    text-shadow: 2px 2px #<?php echo $bannerDropShaddows; ?>;
    text-align: center;
}

/* CSS Toggle Code here */
.toggle {
    position: absolute;
    margin-left: -9999px;
    visibility: hidden;
}

.toggle + label {
    display: block;
    position: relative;
    cursor: pointer;
    outline: none;
}

input {
  background-color: #F0F0F0;
  border: 1px solid black;
}

input.toggle-round-flat + label {
    padding: 1px;
    width: 33px;
    height: 18px;
    background-color: #dddddd;
    border-radius: 10px;
    transition: background 0.4s;
}

input.toggle-round-flat + label:before,
input.toggle-round-flat + label:after {
    display: block;
    position: absolute;
    content: "";
}

input.toggle-round-flat + label:before {
    top: 1px;
    left: 1px;
    bottom: 1px;
    right: 1px;
    background-color: #fff;
    border-radius: 10px;
    transition: background 0.4s;
}

input.toggle-round-flat + label:after {
    top: 2px;
    left: 2px;
    bottom: 2px;
    width: 16px;
    background-color: #dddddd;
    border-radius: 12px;
    transition: margin 0.4s, background 0.4s;
}

input.toggle-round-flat:checked + label {
    background-color: #<?php echo $backgroundBanners; ?>;
}

input.toggle-round-flat:checked + label:after {
    margin-left: 14px;
    background-color: #<?php echo $backgroundBanners; ?>;
}
