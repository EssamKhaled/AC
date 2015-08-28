<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use AppBundle\Entity\Event;

class DefaultController extends Controller {

    /**
     * @Route("/", name="endpoint_input")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request) {
        $endpoint = $request->query->get('endpoint');        

        if ($endpoint !== 'input') {
            return array(
                'success' => false,
                'message' => 'Error: Invalid Endpoint Request!',
            );
        }

        $eventName = $request->query->get('eventName');
        $eventValue = $request->query->get('eventValue');

        if (!empty($eventName) && !empty($eventValue)) {
            $em = $this->getDoctrine()->getManager();
            
            $entity = new Event();
            
            $entity->setEventName($eventName);
            $entity->setEventValue($eventValue);
            $entity->setReferrerUrl($this->getRequest()->getUri());
            
            $em->persist($entity);
            $em->flush();  
            
            return array(
                'success' => true,
                'message' => 'Success: Added a new Input Endpoint Request!',
            );            
        } 
        else {
            return array(
                'success' => false,
                'message' => 'Error: Invalid Endpoint Request!',
            );
        }
        
        return array(
            'success' => false,
            'message' => 'Error: Invalid Endpoint Request!',
        );        
    }

    /**
     * @Route("/dashboard", name="dashboard")
     * @Method("GET")
     * @Template()
     */
    public function dashboardAction(Request $request) {
        $em    = $this->get('doctrine.orm.entity_manager');
        
        $dql   = "SELECT e FROM AppBundle:Event e";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),10
        );        
        
        return array('entities' => $pagination);
    }
    
    /**
     * @Route("/event-group-by-name", name="event_group_by_name")
     * @Method("GET")
     * @Template()
     */
    public function eventGroupByNameAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        
        $events = $qb->select('e.eventName, COUNT(e.id)')
            ->from('AppBundle:Event', 'e')
            ->groupBy('e.eventName')
            ->getQuery()                
            ->getResult();
               
        return array('events' => $events);
    }
    
    /**
     * @Route("/event-group-by-date", name="event_group_by_date")
     * @Method("GET")
     * @Template()
     */
    public function eventGroupByDateAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        
        $sql = 'SELECT COUNT(*) AS count, DATE(created_date) as date FROM event GROUP BY DATE(created_date)';
        $events = $em->getConnection()->executeQuery($sql)->fetchAll();

        return array('events' => $events);
    }
}
