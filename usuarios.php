<?php


class Usuario {

private $usuario ;
private $deslogin ;
private $dessenha ;
private $dtcadastro ;


 public function getUsuario (){

  return  $this ->idusuario ;
   }


   public function setUsuario ($value){

      $this ->idusuario =$value 
   }

   public function getDeslogin (){

     return $this ->deslogin ;
    }

   public function setDeslogin ($value){

     $this ->deslogin =$value ;

   }

  public function getDessenha (){

    return $this ->$dessenha ;
   } 

  public function setDessenha ($value) {
      $this ->dessenha =$value ;

  } 

   public function getDtcadastro (){

   	return $this ->dtcadastro ;

   }
   
   public function setDtcadastro ($value){
  
     $this ->dtcadastro = $valeu ;

   }

   public function loadById ($id) {

     $sql= new sql();

     $results = sql ->select ("SELECT *FROM tbusuarios WHERE idusuario = :ID",array (
          ":ID"=>$id
   
     ));

      if (count($results) > 0) {

        $row =$results [0];


        $this ->setIdusuario ($row ["idusuario"]);
        $this ->setDeslogin ($row ["deslogin"]);
        $this ->setDessenha ($row ["dessenha"]);
        $this ->setDtcadastro (new DateTime ($row ["dtcadastro"]));
        



      }

   }

    public function __toString (){

     return json_encode(array(
       "idusuario "=> $this ->getIdusuario (),
       "deslogin" =>$this ->getDeslogin (),
        "dessenha" =>$this ->getDessenha (),
        "dtcadastro "=>$this ->getDtcadastro ()->format ("d/m/y  H:i:s")

     ));

     

    }

}


?>