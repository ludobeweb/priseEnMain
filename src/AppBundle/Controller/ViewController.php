<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Ce controlleur s'occupe de retournez les vues de l'application
 *
 * @author ludovic-castro
 */
class ViewController extends Controller {
    
    /**
     * La route correspond à l'URI passée dans la requete HTT
     * ici l'URI = yellow
     * @Route("/yellow", name="jaune")
     * @return Response correspond à la couleur passée dans l'URI
     */
    
    
    public function getYellow(Request $r){
       if($r->getMethod() == "GET"){
          return $this->render("default/couleurs/yellow.twig");  
        }else{
        $reponse = new Response("Yellow");
        return $reponse;
    }
    }
    
    
    /**
     * La methode getRed prend en parametre $rqui est de type request
     * @Route("/red", name="rouge")
     * @return Response correspond à la couleur passée dans l'URI
     */
    
    
    public function getRed(Request $r){
        // getMethod() retourne le type de request
        // si $r est de type GET
        if($r->getMethod() == "GET"){
            // on retourne une page web
          return $this->render("default/couleurs/red.twig");  
        }else{
        $reponse = new Response("Red");
        return $reponse;
    }
    }
    
    /**
     * @Route("/blue", name="bleu")
     * @return Response correspond à la couleur passée dans l'URI
     */

    
    public function getBlue(Request $r){
    if($r->getMethod() == "GET"){
          return $this->render("default/couleurs/blue.twig");  
        }else{
        $reponse = new Response("Blue");
        return $reponse;
    }
    }
    
    
    /**
     * @Route("/green", name="vert")
     * @return Response 
     */

    
    public function getGreen(Request $r){
    if($r->getMethod() == "GET"){
          return $this->render("default/couleurs/green.twig");  
        }else{
        $reponse = new Response("Green");
        return $reponse;
    }
    }
 }

