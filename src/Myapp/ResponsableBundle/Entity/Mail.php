<?php
namespace Myapp\ResponsableBundle\Entity ;
use Doctrine\ORM\Mapping as ORM ; 
/**

* 

*

* @ORM\Entity

*/
class Mail {
/**

 * @var integer

 *

 * @ORM\Column(name="id", type="integer", nullable=false)

 * @ORM\Id

 * @ORM\GeneratedValue(strategy="IDENTITY")

 */

 private $id;
 /**

 * @var string

 *

 * @ORM\Column(type="string", nullable=false)

 */
private $nom;
/**

 * @var string

 *

 * @ORM\Column(type="string", nullable=false)

 */

 private $prenom;
/**
     * @ORM\Column(type="string",length=8)
     */
 private $tel;
/**
     * @ORM\Column(type="string",length=50)
     */
 private $from;
/**
     * @ORM\Column(type="string",length=50)
     */
 private $text;
 function getId() {
     return $this->id;
 }

 function getNom() {
     return $this->nom;
 }

 function getPrenom() {
     return $this->prenom;
 }

 function getTel() {
     return $this->tel;
 }

 function getFrom() {
     return $this->from;
 }

 function getText() {
     return $this->text;
 }

 function setId($id) {
     $this->id = $id;
 }

 function setNom($nom) {
     $this->nom = $nom;
 }

 function setPrenom($prenom) {
     $this->prenom = $prenom;
 }

 function setTel($tel) {
     $this->tel = $tel;
 }

 function setFrom($from) {
     $this->from = $from;
 }

 function setText($text) {
     $this->text = $text;
 }


}
