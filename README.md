# graph
<h1 dir="auto">Un générateur de graphique de statistique personnalisable</h1>
<p>

</p>

<p>exemples </p>
 <h2 dir="auto"> en colonnes "col"</h2>
 
 <pre>
 include 'app/graph.php';
 $graf = new Graph();
 $data1 = ['lundi' => 125, 'mardi' => '348', 'mercredi' => '100', 'jeudi' => 425, 'vendredi' => 100, 'samedi' => '568', 'dimanche' => 405];
 $graf->setAutodVal(false)->Graph('col', $data1, 'semaine 1');</pre>
<img src="/graph/semaine-1.png" style="width: 50%;" alt="graph1"> 

 <br />
      <h2 dir="auto"> en camenbert "pie"</h2>
<pre> 
 include 'app/graph.php';
 $graf = new Graph();
 $data2 = ['lundi' => 205, 'mardi' => '748', 'mercredi' => '400', 'jeudi' => 55, 'vendredi' => 500, 'samedi' => '578', 'dimanche' => 805];
$graf->Graph('pie', $data2, 'semaine 2'); </pre>
<img src="/graph/semaine-2.png" style="width: 50%;" alt="graph2"> 
 <br />
      <h2 dir="auto"> en barre "bar"</h2>
<pre> 
 include 'app/graph.php';
 $graf = new Graph();
 $data3 = ['lundi' => 115, 'mardi' => '398', 'mercredi' => '190', 'jeudi' => 25, 'vendredi' => 150, 'samedi' => '68', 'dimanche' => 505];
$graf->setLegend(0)->setCouleur('255.255.255')->Graph('bar', $data3, 'semaine 3');</pre>
<img src="graph/semaine-3.png" style="width: 50%;" alt="graph3"> 
