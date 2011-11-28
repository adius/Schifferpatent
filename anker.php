<?php

include('inc/common.inc.php');
include('inc/sidebar_allgemeines.inc.php');

$title ='| Anker';   
   
$content .=
'<div id="anchor">'.
	
	'<div class="text">';
	
		$content .='
		
		<h2>Anker</h2>
		<hr />
		
		<h3>Ankertypen</h3>
		
		<h4>Der Gewichtsanker</h4>
		<p>Die Haltekraft des Ankers beruht aus seinem hohen Eigengewicht.</p>
				<ul>
					<li>Stock oder Admiralitätsanker
						<p>Greift gut auf steinigem und tonigem Grund und gilt als der beste 
						Allround Anker. Kann das 7 bis 10 fache des Eigengewichts halten.
						Allerdings ist er verhältnismäßig schwer und unhandlich.</p></li>
				</ul>

		<h4>Patent- oder Leichtgewichtsanker</h4>
		<p>Dieser Ankertyp gräbt sich in den Boden ein und kann dadurch mit viel weniger
		Gewicht dieselbe Haltekraft erzeugen wie ein Gewichtsanker.</p>
		<ul>
			<li>Danforth-Anker
				<p>Ist sehr gut aufzubewahren und hat eine 3x so große Haltekraft wie
				ein Stockanker. Allerdings hält der nicht so gut auf stark verkrautetem und 
				steinigem Grund.</p></li>
			<li>Schirm- oder Faltdraggen
				<p>Dieser kleine Anker ist aufgrund seines geringen Platzbedarfs wenn die
				Arme an den Schaft geklappt sind für Jollen und Beiboote geeignet.
				Allerdings steht immer mindestens ein Arm hoch und kann sich mit der Ankerleine
				verheddern</p></li>
		</ul>
		
		<hr />
		
		<h3>Ankerkette und Ankerleine</h3>
		<p>Je länger die Leine oder die Kette ist desto besser hebt der Anker.
		Beim Ankern sollten folgende Längen eingehalten werden:
		<table>
			<tr>
				<td>Kette</td>
				<td>Mindestens das 4-Fache der Wassertiefe</td>
			</tr>
			<tr>
				<td>Leine mit Kettenvorlauf</td>
				<td>Mindestens das 6-Fache der Wassertiefe<br />
				Die Vorteile dieser Methode sind, dass die Kette auf felsigem Grund vor Schamfilen (Scheuern)
				schützt, dass das Eigengewicht der Kette den Ankerschaft herunterzieht und dass sie durch die Haftreibung
				am Grund den Anker verbessert.</td>
			</tr>
			<tr>
				<td>Leine</td>
				<td>Mindestens das 10-Fache<br />
				Die Leine sollte stets am Anker angeschäkelt und nicht mit einem <a href="knoten#roringstek">Roringstek</a>
				befestigt werden, damit die Reißfestigkeit der Leine
				nicht reduziert wird.</td>
			</tr>
		</table>
		</p>
		
		<hr />
		
		<h3>Der Ankerplatz</h3>
		<p>
		Ein guter Ankerplatz sollte folgende Kriterien erfüllen:
		<ul>
			<li>Zunächst sollte ein Ankerplatz niemals im Lee ein Ufer haben, da sonst die Gefahr
			des Strandens besteht wenn der Anker nicht hält. (Das Boot liegt auf Legerwall)</li>
			<li>Sollte gegen Wind und Wetter geschützt liegen</li>
			<li>Guter Ankergrund</li>
			<li>Genügend Abstand zu andere Booten, damit auch im Falle einer Strom- oder Windänderung
			keine Gefahr besteht</li>
			<li>Berufsschiffahrt und Vorrangschiffe dürfen nicht behindert werden</li>
			<li>Es ist verboten vor Hafeneinfahrten, Landestellen, in Fahrrinnen und Fahrwasserverengungen,
			unter Brücken und und auf den Rheinstrecken zu Ankern.</li>
			<li>Es darf nicht länger wie 24 Stunden geankert werden (Bodensee)</li>
		</ul>
		</p>
		<hr />';
		
		/*<h3>Das Ankern</h3>
		<p></p>
		<hr />';*/
		
	$content .='
	</div>
</div>';

$template = new template($template_file);//Template parsen
$template->readtemplate();
$template->replace('TITLE', $title);
$template->replace('HEADER', $template_header);
$template->replace('MENU', $menu);
$template->replace('CONTENT', $content);
$template->replace('FOOTER', $footer);
$template->parse();

?>