<?php

include('inc/common.inc.php');
include('inc/sidebar_allgemeines.inc.php');

$title ='| Ausrüstung';   

$content .= '
<div class="text">
<h2>Ausrüstung</h2>
<p>Folgende Gegenstände sind auf dem Bodensee immer mitzuführen.</p>
<hr />
';

		$content .= '
		<h3>Papiere</h3>
		<p>Bodenseeschifferpatent, Zulassungspapiere</p>
		<hr />
		
		<h3>Sicherheitsausrüstung</h3>
		<ul>
			<li>Anker mit ausreichender Leine</li>
			<li>Bootshaken</li>
			<li>2 Festmachleinen</li>
			<li>2 Paddel</li>
			<li>Manuelle Lenzeinrichtung (Handpumpe oder Pütz)</li>
			<li>Mundsignalhorn</li>
			<li>Rote Flagge (60 cm x 60 cm)</li>
			<li>Weiße Notleuchte (360°)</li>
			<li>Pro Besatzungsmitglied eine Rettungsweste</li>
			<li>Rettunskragen/Rettungsring mit Schwimmleine</li>
			<li>Kompass</li>
			<li>Verbandskasten</li>
			<li>2 kg Feuerlöscher für Innenborder mit mehr als 4.4 kW, Außenborder
			mit mehr als 7,4 kW und Boote mit Koch- und Heizeinrichtung</li>
			<li>Werkzeugkasten</li>
		</ul>
		<hr />
		
		';
		
$content .= '
</div>
';

$template = new template($template_file);//Template parsen
$template->readtemplate();
$template->replace('TITLE', $title);
$template->replace('HEADER', $template_header);
$template->replace('MENU', $menu);
$template->replace('CONTENT', $content);
$template->replace('FOOTER', $footer);
$template->parse();

?>