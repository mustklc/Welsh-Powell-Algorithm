<!DOCTYPE html>
<html lang="tr">
<head>
  <title>GRAF ÖDEV</title>
  <meta charset="utf-8">

 <!-- jQuery -->
    <!-- <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>-->
    <!--  The Raphael JavaScript library for vector graphics display  -->
    <script type="text/javascript" src="js/raphael-min.js"></script>
    <!--  Dracula  -->
    <!--  An extension of Raphael for connecting shapes -->
    <script type="text/javascript" src="js/dracula_graffle.js"></script>
    <!--  Graphs  -->
    <script type="text/javascript" src="js/dracula_graph.js"></script>
    <script type="text/javascript" src="js/dracula_algorithms.js"></script>
    <script type="text/javascript" src="algorithms.js"></script>
    
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-theme.min.css">
    
 
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

<div class="row"> <!-----------row----------->
  <div class="col-md-12">
  <h3> GRAF YAPISI OLUŞTUR </h3>  <a href="gazi_graf.php" target="_blank">YENİLE</a>
  <ul class="nav nav-tabs">
 
  <li><a data-toggle="tab" href="#menu1">GEZİNMEYİ GİREREK</a></li>
  <li><a data-toggle="tab" href="#menu2">SAYFA YAPISINI GİREREK</a></li>
 
</ul>

<div class="tab-content">
 
 

 
  <div id="menu1" class="tab-pane fade">
    <h3>GEZİNMEYİ GİRİNİZ:</h3>
   <form action="gazi_graf.php" method="post">
  <p>
    <textarea name="gezinme" cols="50"></textarea>
</p>
  <p>&quot;1-2-3-7-3-6-3&quot; formatında giriniz</p>
  <p>
    <label> 
    <input type="submit" name="button" id="button" value="ÇİZ" class="btn btn-default" />
    </label>
  </p>

</form>
  </div>
  <div id="menu2" class="tab-pane fade <?php if(isset($_POST['sayfaekle'])){ echo "in active"; }?>">
  <?php 
     
   if(isset($_POST['sayfalar']))
   {
////////////////////////1/////////////////////////////   
   
    $dugumsay= $_POST['sayfasay2'];
	
	for($w=1; $w <=  $dugumsay; $w++)
	{
	  $dugumler[] = $w;
	
	  $gezinme=$_POST[$w];
      $gezd= explode(",", $gezinme);
	  foreach($gezd as $baglilar)
	    {
	     $yollar[]=$w . "-" . $baglilar ;
	     $komsuluk[$w][$baglilar]=1;
	    }
	}
	
$dugumler = array_unique($dugumler);
sort($dugumler);


$yollar = array_unique($yollar);
sort($yollar);
//print_r($yollar);
$grafikciz= 1;	

   
////////////////////////1/////////////////////////////    
   }	 
   elseif(isset($_POST['sayfaekle']))	
   {
////////////////////////2///////////////////////////// 

   echo "Sayfa sayısı =" . $_POST['sayfasay'];
 ?>  
   
    <form action="gazi_graf.php" method="post">
   <h4> Virgülle ayırarak giriniz. Örn: 3,4,7,8 gibi </h4>
 <?php
   for ($b=1; $b <= $_POST['sayfasay'] ; $b++ )
   {
    echo "<li>" . $b . " nolu sayfaya bağlılar= " .  "<input name=\"". $b  . "\" type=\"text\"> <br>" ;
   }
  ?>
    <input name="sayfasay2" type="hidden" value="<?php echo $_POST['sayfasay'] ; ?>">
   
    <label> 
    <input type="submit" name="sayfalar" id="button" value="GRAPH OLUŞTUR" class="btn btn-default" />
    </label>
  </p>

</form>   
   
   
 <?php   
/////////////////////////2////////////////////////////    
   } 
   else
   {
//////////////////////////3///////////////////////////    
 ?>
 
  <h4>Ortamdaki sayfa sayısını giriniz:</h4>
   <form action="gazi_graf.php" method="post">
 
    <input name="sayfasay" type="text">
    <label> 
    <input type="submit" name="sayfaekle" id="button" value="SAYFA EKLE" class="btn btn-default" />
    </label>
  </p>

</form>   
  <?php 
////////////////////////3/////////////////////////////    
   }
	 
 ?>

 
  </div>
</div>

  </div>
 
</div>



<?php 
if(isset($_POST['gezinme']))
{
$gezinme=$_POST['gezinme'];
$gezd= explode("-", $gezinme);
//print_r($gezd);


for($i=0; $i < count($gezd); $i++)
{

 if($i==0)
   {
	// ilk eleman
	// echo "İlk eleman= " . $gezd[$i] ."<br>";
	$yollar[]=$gezd[$i] . "-" . $gezd[$i+1] ;
	$komsuluk[$gezd[$i]][$gezd[$i+1]]=1;
	
   }
 elseif($i==(count($gezd)-1))
   {
	// son eleman
	// echo "son  eleman= " . $gezd[$i]. "<br>";
   }
 else
   {
  ////////////////////////////// 
   //  echo  $gezd[$i] . " -> " .  $gezd[$i+1]. "<br>";
   //  echo  $gezd[$i] . " <- " .  $gezd[$i-1] ."<br>"; 
   $yollar[]=$gezd[$i] . "-" . $gezd[$i+1] ;
   $komsuluk[$gezd[$i]][$gezd[$i+1]]=1; 
  ////////////////////////////// 	 
   }
}

//echo  "=>" . $komsuluk[0][1][2] ."<br>";



if(isset ($gezd)) 
{
$dugumler = array_unique($gezd);
sort($dugumler);

$yollar = array_unique($yollar);
sort($yollar);

$grafikciz= 1;

}











} // isset($_POST['gezinme']

/////////////////////////////////////////////////////////////



if(isset ($grafikciz))
{
?>
<div class="row"> <!-----------row----------->
  <div class="col-md-5">
  <h3> Komşuluk Matrisi </h3>
<table width="600" border="1">
  <tr>
    <th></th>
    <?php
	 for($i=0; $i < count($dugumler); $i++)
     {
       echo "<th>s"  . $dugumler[$i] .  "</th>" ; 
     }
	 ?> 
  </tr>
 <?php 

	 for($n=0; $n < count($dugumler); $n++)
     {  
       echo " <tr><th>s " .   $dugumler[$n] .     "</th>" ;
			
			
		   for($m=0; $m < count($dugumler); $m++)
             {	
			 
			 
			 	 if( isset($komsuluk[$dugumler[$n]][$dugumler[$m]]) || isset($komsuluk[$dugumler[$m]][$dugumler[$n]]) )
			 	 { $matris= 1; }
			  	else
				 {$matris= 0; }
			 
				 if(isset ($derece1[$dugumler[$n]]))
				 	{  $derece1[$dugumler[$n]]=  $derece1[$dugumler[$n]] + $matris;  }
				 else
			 		{  $derece1[$dugumler[$n]]= $matris; }
					
				 if(isset ($derece2[$dugumler[$m]]))
					 {  $derece2[$dugumler[$m]]=  $derece2[$dugumler[$m]] + $matris;  }
				 else
					 {  $derece2[$dugumler[$m]]= $matris; }
			 			 

			  echo "<td>".  $matris.  "</td>";
			   
			 }
		 
        echo "</tr> ";
     }
 ?> 
  
</table>
<h3> Dereceler </h3>
<?php 

// TOplam dereceleri bul
 for($r=0; $r < count($dugumler); $r++)
     {  
         $dereceler[$dugumler[$r]] =  $derece1[$dugumler[$r]] +  $derece2[$dugumler[$r]] ;
		//  echo $dugumler[$r] ." adlı sayfanın derecesi = " .$dereceler[$dugumler[$r]] .	"<br>"	; 
     }


arsort($dereceler);

// dereceleri yazdır

 foreach ($dereceler  as $node=>$der)
  {
   echo $node ." numaralı sayfanın derecesi = " .  $der . "<br>";
  }

// Renklendirme

$dereceler2= $dereceler;
$renk= 1; 

while (count($dereceler2) > 0) 
{
  //ilk i al
  reset($dereceler2);
  $siradaki = key($dereceler2);
  $renkler[$siradaki] = $renk;
 // echo  "İLK ALAN===> " .$siradaki .  " nın  renk  = " . $renkler[$siradaki] . "<br>" ;
  unset($dereceler2[$siradaki]);
 	// print_r($dereceler2);
  // diğerlerine bak
  foreach ($dereceler2  as $digerleri=>$derecesi)
  {

    if( isset($komsuluk[$siradaki][$digerleri]) || isset($komsuluk[$digerleri][$siradaki]) )
	    {				  
	     // farklı renk olacak. sona git
	    }
	    else
	    { $rengial= 1;
		 // renk alan diğer elemanlarla komşuluk var mı?
		    foreach ($renkler as $renkalan=>$rengi)
		       {
			     if( ($rengi == $renk) and  (isset($komsuluk[$renkalan][$digerleri])  || isset($komsuluk[$digerleri][$renkalan]))  )  // diğer elemanın rengi bu renge eşit 
				  {
				   $rengial= 0;
				  }
				  else
				  {
				  }
			   }
		   // herhangi bir komşuluk ya da renk kardeşliği olduysa    $rengial=0 oldu  
		   if($rengial== 1)
		   {
		     $renkler[$digerleri] = $renk;
		 	// ortadan kaldır
		     unset($dereceler2[$digerleri]);
		   }

		  // renk alan diğer elemanlarla komşuluk var mı bitiş.
	    }	 
   } // foreach bitiş
  	$renk++;
} // while bitiş

// print_r( $renkler);

// renk sayısı belirle:
$renkler2 = $renkler;
$renkler2 = array_unique($renkler2);

// rastgele renkleri oluştur.
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}
function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

?>
  </div> <!-----------/col md 12----------->
  </div> <!-----------/row----------->


<script type="text/javascript">
var redraw;

window.onload = function() {
    var width = $(document).width()-200;
    var height = $(document).height() - 200;

    /* Showcase of the Bellman-Ford search algorithm finding shortest paths 
       from one point to every node */
    
    /*  */

    /* We need to write a new node renderer function to display the computed
       distance.
       (the Raphael graph drawing implementation of Dracula can draw this shape,
       please consult the RaphaelJS reference for details http://raphaeljs.com/) */
	   
	   
	   
<?php 

for($t=0; $t < count($renkler2) ; $t++ )
  {
     $rastrenk= "#" . random_color();
  // renklere göre renderler oluştur.
   echo "
      var render" . ($t+1). "= function(r, n) {
            var set = r.set().push(
                r.rect(n.point[0]-30, n.point[1]-13, 90, 40).attr({'fill':'" . $rastrenk .  "', r : '16px', 'stroke-width' : n.distance == 0 ? '8px' : '2px' })).push(
                r.text(n.point[0], n.point[1] + 13, (n.label || n.id) + ' - Renk=".($t+1) ."'));
            return set;
        };
    ";
  }
  
  /*
   echo "
      var render1= function(r, n) {
            var set = r.set().push(
                r.rect(n.point[0]-30, n.point[1]-13, 90, 40).attr({'fill':'" . $rastrenk .  "', r : '16px', 'stroke-width' : n.distance == 0 ? '8px' : '2px' })).push(
                r.text(n.point[0], n.point[1] + 13, (n.label || n.id) + ' numara'));
            return set;
        };
    ";
*/
?>
	   
	   
	   
	   
	   
	   /*
	   
    var render = function(r, n) {
			
            var set = r.set().push(
                r.rect(n.point[0]-30, n.point[1]-13, 90, 40).attr({'fill': '#FFFF00', r : '16px', 'stroke-width' : n.distance == 0 ? '8px' : '2px' })).push(
                r.text(n.point[0], n.point[1] + 13, (n.label || n.id) + '\n numara'));
            return set;
        };
		*/
    
    var g = new Graph();
    
    /* modify the edge creation to attach random weights */
    g.edgeFactory.build = function(source, target) {
	var e = jQuery.extend(true, {}, this.template);
	e.source = source;
	e.target = target;
	// e.style.label = e.weight = Math.floor(Math.random() * 10) + 1 ;
    return e;
    }
    
	
	
	<?php 
	
   for($i=0; $i < count($dugumler); $i++)
   { 
   
   
   
    
     $node= "g.addNode('". $dugumler[$i] . "', {render:render". $renkler[$dugumler[$i]]  ."}); ";
	 echo $node; 
   }

//////////////



 for($j=0; $j < count($yollar); $j++)
   {
    $baglar=explode("-", $yollar[$j]);
    $bag= "g.addEdge('". $baglar[0] . "', '" .  $baglar[1]   . "', { directed : true } );";
	
	 echo $bag; 
   }

	?>
	
    /* creating nodes and passing the new renderer function to overwrite the default one 
    g.addNode('s1', {render:render}); // TODO add currying support for nicer code
    g.addNode("s2", {render:render});
    g.addNode("s3", {render:render});
    g.addNode("s4", {render:render});
    g.addNode("s5", {render:render});
    g.addNode("s6", {render:render});
    g.addNode("s7", {render:render});
	g.addNode("s8", {render:render});
	g.addNode("s9", {render:render});
	g.addNode("s10", {render:render});	*/
	
    /* connections 
   
    g.addEdge("s2", "s3", { directed : true } );
	g.addEdge("s3", "s2", { directed : true } );
    g.addEdge("s3", "s7");
    g.addEdge("s3", "s6");
    g.addEdge("s3", "s5");
    g.addEdge("s5", "s10");
    g.addEdge("s5", "s9");
    g.addEdge("s5", "s8");
    g.addEdge("s8", "s2"); */


    /* random edge weights (our undirected graph is modelled as a bidirectional graph) */
/*    for(e in g.edges)
        if(g.edges[e].backedge != undefined) {
            g.edges[e].weight = Math.floor(Math.random()*10) + 1;
            g.edges[e].backedge.weight = g.edges[e].weight;
        }
*/
    /* layout the graph using the Spring layout implementation */
    var layouter = new Graph.Layout.Spring(g);
    
    /* draw the graph using the RaphaelJS draw implementation */

    /* calculating the shortest paths via Bellman Ford */
//    bellman_ford(g, g.nodes["Berlin"]);
    
    /* calculating the shortest paths via Dijkstra 
    dijkstra(g, g.nodes["Berlin"]);*/
    
    /* calculating the shortest paths via Floyd-Warshall 
    floyd_warshall(g, g.nodes["Berlin"]);*/


    /* colourising the shortest paths and setting labels */
    for(e in g.edges) {
        if(g.edges[e].target.predecessor === g.edges[e].source || g.edges[e].source.predecessor === g.edges[e].target) {
            g.edges[e].style.stroke = "#bfa";
            g.edges[e].style.fill = "#56f";
        } else {
            g.edges[e].style.stroke = "#000";
        }
    }
    
    var renderer = new Graph.Renderer.Raphael('canvas', g, width, height);

    redraw = function() {
        layouter.layout();
        renderer.draw();
    };
    
/*    var pos=0;
    step = function(dir) {
        pos+=dir;
        var renderer = new Graph.Renderer.Raphael('canvas', g.snapshots[pos], width, height);
        renderer.draw();
    };*/
};
</script>
<div class="row"> <!-----------row----------->
  <div class="col-md-12">
  <h3> Graf Yapısı: (Wellsh Powell Colored) </h3>
 <div id="canvas"></div>

  <button id="redraw" onClick="redraw();">TEKRAR ÇİZ</button><br>
  </div>
  </div>
<?php 
 
}

?>
</div><!-----------/container-----------> 

</body>
</html>
