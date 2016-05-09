<?php
namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\Symfony\Bundle\FrameworkBundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttFoundation\Response;


class TestServiceController extends Controller
{
    public function listServiceAction(Request $req){
        
        if($req->isXmlHttpRequest()){
            
            $id=$req->get('username');
            $conn=$this->get('database_connection');
            //recuperer la liste des elements
            $query ="select * from fos_user where fos_user.name=".$id;
            $row=$conn->fetchAll($query);
            return new JsonRJsonResponse(array('data'=>  json_encode($row)));
            
        }
        return new Response("Erreur : Ce n'est pas une requete Ajax",400);
    }
}

