<?php

include('inc/common.inc.php');
include('inc/sidebar_allgemeines.inc.php');

$title ='| Der Bodensee';   

$content .= '
<div class="text">
<h2>Der Bodensee</h2>
<hr />'; 
	$content .= '
	<h3>Daten & Fakten</h3>
	<p>
	<table>
			<tr>
				<td>Gesamtfläche</td>
				<td>571 km<sup>2</sup></td>
			</tr>
			<tr>
				<td>Wasserspiegel</td>
				<td>395 ü.N.N.</td>
			</tr>
			<tr>
				<td>Uferlänge</td>
				<td>263 km</td>
			</tr>
			<tr>
				<td>Größte Tiefe</td>
				<td>254 m (zwischen Fischbach und Uttwill)</td>
			</tr>
			<tr>
				<td>Größte Breite</td>
				<td>14 km (zwischen Friedrichshafen und Arbon)</td>
			</tr>
			<tr>
				<td>Länge</td>
				<td>63 km</td>
			<tr/>
			
	</table>
	</p>
	<hr />
		
	<h3>Querschnitt</h3>
	<p>Schematischer Querschnitt zwischen Friedrichshafen und Romanshorn.</p>
	<br />
	<img src="img/querschnitt.svg" alt="Querschnitt des Bodensees"/>
	<hr />
	
	<h3>Wasserpegel</h3>
	<p>Der Wasserpegel des Bodensees kann bis zu 2 m schwanken. Deswegen ist es unerlässlich
	stets den aktuellen Wasserstand zu kennen um sicher auf dem Bodensee unterwegs zu sein.
	Der Normalpegel liegt bei 2,50 m beim Konstanzer Pegel. <br />
	Der Tagespegel kann auf diversen Websites
	wie  z.B. <a href="http://www.mein-bodensee.com/pegel/" target="blank">www.mein-bodensee.com/pegel/</a> eingesehen werden.</p>
	<hr />
	
	<h3>Tempolimit</h3>
	<p>Auf dem gesamten Bodensee gelten spezifische Tempolimits.
	<table>
		<tr><td>Ober und Untersee</td><td>40 km/h</td></tr>
		<tr><td>Alter Rhein</td><td>10 km/h</td></tr>
		<tr><td>Seerhein</td><td>10 km/h</td></tr>
		<tr><td>Hochrhein Talfahrt</td><td>20 km/h</td></tr>
		<tr><td>Hochrhein Bergfahrt</td><td>10 km/h</td></tr>
	</table>
	</p>
	<hr />
	
	<h3>Naturschutz</h3>
	<p>An den Ufern des Bodensees gibt es zahlreiche Naturschutzgebiete, die verschiedenste Wasser-
	und Sumpfvögel beherbergen. Um dieses Erbe zu bewahren gelten in den Naturschutzgebieten genaue Regeln.
	<ul>
		<li>Es ist verboten in den Naturschutzgebieten anzulegen und sie zu betreten.</li>
		<li>Es ist ein Mindestabstand von 25 m beim anlegen vor der Schilfkante einzuhalten.</li>
		<li>Es dürfen keine Motorboote in der Uferschutzzone (300 m) fahren.</li>
		<li>Das An- und Ablegen muss stets senkrecht zum Ufer und auf kürzestem Weg ablaufen.</li>
		<li>Die Höchstgeschwindigkeit beträgt 10 km/h </li>
	</ul>	
	</p>
	<hr />
	
	';
		
$content .= '</div>';

$template = new template($template_file);//Template parsen
$template->readtemplate();
$template->replace('TITLE', $title);
$template->replace('HEADER', $template_header);
$template->replace('MENU', $menu);
$template->replace('CONTENT', $content);
$template->replace('FOOTER', $footer);
$template->parse();

?>