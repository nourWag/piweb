<?php  


namespace Myapp\adminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Ob\HighchartsBundle\Highcharts\Highchart; 
use Zend\Json\Expr;   
class GrapheController extends Controller{
    public function chartHistogrammeAction() {
                $ob = new Highchart();
        $ob->chart->renderTo('container');// The #id of the div where to render the chart
        $ob->title->text('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
        

         $em = $this->getDoctrine()->getEntityManager();
         $query = $em->createQuery("SELECT u.collection  FROM MyappadminBundle:Categorie u");
         $collection = $query->getResult();
         
        
          $query1 = $em->createQuery("SELECT count(u) as adm1 FROM MyappadminBundle:Categorie u  where u.collection='automne' " );
        $automne =$query1->getResult();
       
         
         
         $query2 = $em->createQuery("SELECT count(u) as adm2 FROM MyappadminBundle:Categorie u  where u.collection='printemps' " );
         $printemps =$query2->getResult();
        
         
         $query3 = $em->createQuery("SELECT count(u) as adm3 FROM MyappadminBundle:Categorie u  where u.collection='ete' " );
         $ete =$query3->getResult();
         
         
         $query4 = $em->createQuery("SELECT count(u) as adm4 FROM MyappResponsableBundle:boutique  u " );
         $nb =$query4->getResult();
      
          $query5 = $em->createQuery("SELECT count(u) as adm5 FROM MyappadminBundle:Categorie u  where u.collection='hiver' " );
         $hiver =$query5->getResult();
       
          $query6 = $em->createQuery("SELECT count(u) as adm6 FROM MyappadminBundle:Categorie u  where u.collection='nouvelle' " );
         $nouvelle =$query6->getResult();
    
          $query7 = $em->createQuery("SELECT count(u) as adm7 FROM MyappadminBundle:Categorie u  where u.collection='ancienne' " );
         $ancienne =$query7->getResult();
        $data = array();
             foreach ($nb as $nb)
            {
              foreach ($automne as $values) 
             {
             $a = array('automne', intval($values['adm1'])*100/  intval($nb['adm4']));
              array_push($data, $a);
            }
        
        
        
        foreach ($printemps as $values) 
             {
            $b = array('printemps', intval($values['adm2'])*100/  intval($nb['adm4']));
            array_push($data, $b);
            }
            }
            
      foreach ($hiver as $values) 
             {
            $e = array('hiver', intval($values['adm5'])*100/  intval($nb['adm4']));
            array_push($data, $e);
            }
        
                 
        foreach ($ete as $values) 
             {
            $c = array('ete', intval($values['adm3'])*100/  intval($nb['adm4']));
            array_push($data, $c);
            }

             foreach ($nouvelle as $values) 
             {
            $c = array('nouvelle', intval($values['adm6'])*100/  intval($nb['adm4']));
            array_push($data, $c);
            }
             foreach ($ancienne as $values) 
             {
            $c = array('ancienne', intval($values['adm7'])*100/  intval($nb['adm4']));
            array_push($data, $c);
            }
        //$delegations = array($delegation);
       
        $series = array(
            array(
                'name' => 'Pourcentage',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data' => $data,
                
                
            ),

        );
       
        $yData = array(
            array(
                'name' => 'les collections',
                'type'  => 'spline', 
                
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value }'),
                    'style' => array('color' => '#AA4643'),
                    'title' => array(
                    'text' => 'Categorie')
                ),

                
            ),
            array(
                
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " %" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 'ete',
                'title' => array(
                    'text' => 'Pourcentage',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        
       

        $ob->chart->type('column');//print_r($data);exit();
      $description = array('automne','printemps','ete','hiver');
      $ob->chart->type('column');
$ob->title->text('Statistiques des collections dans chaque boutique(en %)');
$ob->xAxis->description($description);
$ob->yAxis($yData);
$ob->legend->enabled(false);
$formatter = new Expr('function () {
var unit = {
"Rainfall": "mm",
"Temperature": "degrees C"
}[this.series.name];
return this.x + ": <b>" + this.y + "</b> " + unit;
}');
        $ob->tooltip->formatter($formatter);
        
        $ob->series($series);
        
        return $this->render('MyappadminBundle:Graphe:histogramme.html.twig', array(
                    'chart' => $ob
        ));
    }
  
 
    
    public function PieAction(){

$ob = new Highchart();

$ob->chart->renderTo('piechart');

$ob->title->text('Statistiques Generales ');

$ob->plotOptions->pie(array(

 'allowPointSelect' => true,

 'cursor' => 'pointer',

 'dataLabels' => array('abled' => true),

 'showInLegend' => true

));
   $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT count(et.nom)
                 FROM MyappResponsableBundle:boutique et'
        );
        $Boutique = $query->getSingleScalarResult();
        $et=(int)$Boutique;

        $em1 = $this->getDoctrine()->getManager();
        $query1 = $em1->createQuery(
                'SELECT count(en.id)
                 FROM MyappadminBundle:Commande en'
        );
        $Commande = $query1->getSingleScalarResult();
        $en =(int)$Commande;
//        
//
//
        $em3 = $this->getDoctrine()->getManager();
        $query3 = $em3->createQuery(
                'SELECT count(en1.id)
                 FROM MyappadminBundle:Mall en1'
        );
        $Mall = $query3->getSingleScalarResult();
        $en1 =(int)$Mall;
        
         $em4 = $this->getDoctrine()->getManager();
        $query4 = $em4->createQuery(
                'SELECT count(en3.cin)
                 FROM MyappadminBundle:Compte en3'
        );
        $Compte = $query4->getSingleScalarResult();
        $en3 =(int)$Compte;
        
        $el = $this->getDoctrine()->getManager();
        $query = $el->createQuery(
                'SELECT count(el.id)
                 FROM MyappadminBundle:Facture el'
        );
        $Facture= $query->getSingleScalarResult();
        $el=(int)$Facture;
        
         $eh = $this->getDoctrine()->getManager();
        $query = $eh->createQuery(
                'SELECT count(eh.id)
                 FROM MyappadminBundle:Stock eh'
        );
        $Stock= $query->getSingleScalarResult();
        $eh=(int)$Stock;
        
          $ek = $this->getDoctrine()->getManager();
        $query = $ek->createQuery(
                'SELECT count(ek.id)
                 FROM MyappadminBundle:Client ek'
        );
        $Client= $query->getSingleScalarResult();
        $ek=(int)$Client;
        
        $data = array(
            array('Boutique', $et),
            array('Client', $ek),
            array('Mall', $en1),
           array('Stock',$eh),
            array('Commande', $en),
             array('Compte', $en3),
            array('Facture', $el),
            
             );
$ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));

return $this->render('MyappadminBundle:Graphe:pie.html.twig', array(

 'chart' => $ob

 ));
} 

     public function chartLineAction(){  
                 $em = $this->getDoctrine()->getEntityManager();
        // Chart
        $query1 = $em->createQuery("SELECT count(u) as adm1 FROM MyappResponsableBundle:Mail u  where u.nom='lougi' ");
        $lougi = $query1->getResult();
        $query2 = $em->createQuery("SELECT count(u) as adm2 FROM MyappResponsableBundle:Mail u  where u.nom='oswa' ");
        $oswa = $query2->getResult();
        $query3 = $em->createQuery("SELECT count(u) as adm3 FROM MyappResponsableBundle:Mail u  where u.nom='ahmed' ");
        $ahmed = $query3->getResult();
        
         $query4 = $em->createQuery("SELECT count(u) as adm4 FROM MyappResponsableBundle:Mail u  where u.nom='anas' ");
        $anas = $query4->getResult();
        
        $query5 = $em->createQuery("SELECT count(u) as adm5 FROM MyappResponsableBundle:Mail u  where u.nom='nebrass' ");
        $nebrass = $query5->getResult();
        
         $query6 = $em->createQuery("SELECT count(u) as adm6 FROM MyappResponsableBundle:Mail u  where u.nom='amine' ");
        $amine = $query6->getResult();
        
         $query7 = $em->createQuery("SELECT count(u) as adm7 FROM MyappResponsableBundle:Mail u  where u.nom='nour' ");
        $nour = $query7->getResult();
        
        $query8 = $em->createQuery("SELECT count(u) as adm8 FROM MyappResponsableBundle:Mail u " );
         $nb =$query8->getResult();

        $data = array();
        foreach ($nb as $nb) {
            foreach ($lougi as $values) {
                $a = array('lougi', intval($values['adm1']) * 100 / intval($nb['adm8']));
                array_push($data, $a);
            }
            foreach ($oswa as $values) {
                $b = array('oswa', intval($values['adm2']) * 100 / intval($nb['adm8']));
                array_push($data, $b);
            }

            foreach ($ahmed as $values) {
                $c = array('ahmed', intval($values['adm3']) * 100 / intval($nb['adm8']));
                array_push($data, $c);
            }
             foreach ($anas as $values) {
                $c = array('anas', intval($values['adm4']) * 100 / intval($nb['adm8']));
                array_push($data, $c);
            }
             foreach ($nebrass as $values) {
                $c = array('nebrass', intval($values['adm5']) * 100 / intval($nb['adm8']));
                array_push($data, $c);
            }
               foreach ($amine as $values) {
                $c = array('amine', intval($values['adm6']) * 100 / intval($nb['adm8']));
                array_push($data, $c);
            }
                foreach ($nour as $values) {
                $c = array('nour', intval($values['adm7']) * 100 / intval($nb['adm8']));
                array_push($data, $c);
            }
        }
        $series = array(
            array('name' => "taux de mails reçus ", 'data' => $data));
        $ob = new Highchart();
        $ob->chart->renderTo('linechart'); // #id du div où afficher le graphe
        $ob->title->text('graphe des mails envoyés par chaque client ');
        $ob->xAxis->title(array('text' => "les noms des clients  "));
        $ob->yAxis->title(array('text' => "Nombre des clients qui ont envoyé des mails par % "));
        $ob->series($series);
        return $this->render('MyappadminBundle:Graphe:LineChart.html.twig', array(
                    'chart' => $ob
        ));
    }
     } 
//         
//         // Chart
//         $series = array(         array("name" => "Statistiques Menstruelles",    "data" => array(1,2,4,5,6,3,8))     );  
//$ob = new Highchart();   
//$ob->chart->renderTo('linechart');  //  #id du div où afficher le graphe   
//$ob->title->text('Taux de visite'); 
//
//$ob->xAxis->title(array('text'  => "Categorie"));
//$ob->yAxis->title(array('text'  => "Nombre de visite "));  
//$ob->series($series);  
//    return $this->render('GrapheBundle:Graphe:LineChart.html.twig', array(         'chart' => $ob     
//            ));
//    } 
    
    

    
    
    
    
    
    
    
    
    
    