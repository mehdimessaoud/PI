<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppUserBundle:Default:index.html.twig', array('name' => $name));
    }
     public function adminAction($name)
    {
        return $this->render('MyAppUserBundle:Default:template_admin.html.twig', array('name' => $name));
    }

     
    public function queryAction($querystring)
{

    $finder = $this->container->get('fos_elastica.index.hortis.fruits');

        if (!empty($querystring)) {
            $query = new \Elastica\Query\Bool();
            $fieldQuery = new \Elastica\Query\Text();
            $fieldQuery->setFieldQuery('name', $querystring);
            $query->addShould($fieldQuery);
        }
        else {
            $query = new \Elastica\Query\MatchAll();
        }

        $elasticaQuery = new \Elastica\Query();
        $elasticaQuery->setQuery($query);

        //
        $vitamincFacet = new \Elastica\Facet\Range('vitaminc');
        $vitamincFacet
            ->setField('vitaminc')
            ->setRanges(
                array(array('to' => 10),
                    array('from' => 10, 'to' => 30),
                    array('from' => 30, 'to' => 50),
                    array('from' => 50)
                )
        );
        $elasticaQuery->addFacet($vitamincFacet);

        //
    $colorFacet = new \Elastica\Facet\Terms('color');
    $colorFacet->setField('color');
    $colorFacet->setName('color');
    $elasticaQuery->addFacet($colorFacet);


        $elasticaResultSet = $finder->search($elasticaQuery);
        $fruits = $elasticaResultSet->getResults();

        $facets = $elasticaResultSet->getFacets();

        return $this->render('HortisDemoBundle:Default:index.html.twig',
                array('querystring' => $querystring, 'fruits' => $fruits, 'facets' => $facets));
 }
    }
