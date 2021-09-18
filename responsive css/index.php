<!DOCTYPE html>
<html>
<style>

:root {
  --image-photo: url('https://c0.wallpaperflare.com/preview/809/855/774/printer-print-screen-female.jpg');
  --image-priter-logos: url('https://c8.alamy.com/comp/P128A7/printer-icon-seamless-pattern-background-business-concept-vector-illustration-document-printing-symbol-pattern-P128A7.jpg');
  --image-printer-embended:  url('printer.jpg');
  --image-page-texture: url('texture.jpg');
  --tbody-blur: blur(2px);
  
  --div-back-color: rgba(255, 255, 255, 0.2);
  --th-back-color: rgba(255, 255, 255, 0.6);
  --tbody-back-color: rgba(255, 255, 255, 0.1);
  --tr-even-back-color: rgba(255, 255, 255, 0.18);
  --tr-hover-back-color: rgba(255, 255, 255, 0.6);

  --basic-text-shadow: 1.2px 1.2px 2px rgba(0, 0, 0, 0.4);
  --td-text-size-large-screen: 2.2vw;
  --td-text-size-medium-screen: 2.5vw;
  --td-text-size-small-screen: 3.6vw;
  
  --th-text-size-large-screen: 2.8vw;
  --th-text-size-medium-screen: 3vw;
  --th-text-size-small-screen: 3.8vw;
  
}


  td, h2 {
	font-size:	var(--td-text-size-large-screen);
  }
  th{
	font-size:  var(--th-text-size-large-screen);
  }
  p{
	font-size:	1.5vw;
  }
  /* On screens that are 992px wide or less */
@media screen and (max-width: 992px) {
  td, h2 {
	font-size:	var(--td-text-size-medium-screen);
  }
  th{
	font-size:  var(--th-text-size-medium-screen);
  }
  p{
	font-size:	1.8vw;
  }
}

/* On screens that are 600px wide or less */
@media screen and (max-width: 600px) {
	td, h2 {
	font-size:	var(--td-text-size-small-screen);
  }
  th{
	font-size:  var(--th-text-size-small-screen);
  }
  p{
	font-size:	3vw;
  }
}



body {

background-image: var(--image-page-texture);

  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  
}
div {
	align: center;
	background-color: var(--div-back-color);
	backdrop-filter: blur(5px);
	text-align: center;
	width: 100%;
	text-shadow: var(--basic-text-shadow);
}

table {
	font-family: Times New Roman, sans-serif;
	border-collapse: separate;
	border-spacing: 0 0.4vw;
    width: 100%;
    text-shadow: var(--basic-text-shadow);
    text-align: left;
}

/* top-left border-radius */
table tr:first-child th:first-child {
	border-top-left-radius: 2vw;
}

/* top-right border-radius */
table tr:first-child th:last-child {
	border-top-right-radius: 2vw;
}

th{
  backdrop-filter: blur(2px);
  background-color: var(--th-back-color);
  padding-top: 1.2vw;
  padding-bottom: 1.2vw;
  padding-right: 1vw;
  padding-left: 1vw;	
}

tbody{
	backdrop-filter: var(--tbody-blur);
	background-color: var(--tbody-back-color);
}

td{
	padding-top: 0.7vw;
	padding-bottom: 0.7vw;
	padding-right: 1vw;
	padding-left: 1vw;
}

tr:nth-child(even) {
	background-color:var(--tr-even-back-color);
}

tr:hover {
	background-color: var(--tr-hover-back-color);
}



</style>
<body>

<div>

<h2>JavaScript HTML DOM</h2>

<p>Finding HTML Elements by Class Name.</p>
<p class="intro">Hello World!</p>
<p class="intro">This example demonstrates the <b>getElementsByClassName</b> method.</p>
</div>
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
<table class="sortable">
 <thead>
  <tr>
    <th style="width:30%">Company</th>
    <th>Contact</th>
    <th>Country</th>
	<th>Number</th>
	
	<!--
	<th style="width:25%">Company</th>
    <th style="width:25%">Contact</th>
    <th style="width:15%">Country</th>
	<th style="width:15%">Number</th>
	-->
  </tr>
 </thead>
  
<tbody>
  <tr class="row">
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
	<td class="number">20000</td>
  </tr>
  <tr class="row">
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
	<td class="number">40000</td>
  </tr>
  <tr class="row">
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
	<td class="number">50000</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
	<td class="number">111111</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
	<td class="number">422000</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
	<td class="number">4000000</td>
  </tr>
  
</tbody>
</table>

<script> //FORMating 
function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1 ")
}
	var y = document.getElementsByClassName("number");
	for (let i = 0; i < y.length; i++) {
		var num = y[i].innerHTML;
		y[i].innerHTML = formatNumber(num);
	}
</script>

<p>Finding HTML Elements by Class Name.</p>





</body>
</html>