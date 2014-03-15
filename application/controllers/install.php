<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use Doctrine\ORM\Mapping\Driver\DatabaseDriver,
    Doctrine\ORM\Tools\DisconnectedClassMetadataFactory,
    Doctrine\ORM\Tools\EntityGenerator;

class Install extends CI_Controller {
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    /**
     * generate entity objects automatically from mysql db tables
     * @return none
     */
    function index() {
        $em = $this->doctrine->em;
        $em->getConfiguration()->setMetadataDriverImpl(new DatabaseDriver($em->getConnection()->getSchemaManager()));

        $cmf = new DisconnectedClassMetadataFactory();
        $cmf->setEntityManager($em);
        $metadata = $cmf->getAllMetadata();
        $generator = new EntityGenerator();

        $generator->setUpdateEntityIfExists(true);
        $generator->setGenerateStubMethods(true);
        $generator->setGenerateAnnotations(true);
        // GOOD PRACTICE
        try {
            $generator->generate($metadata, APPPATH . "models/Entity");
        } catch (Exception $e) {
            die(
                    $e->getMessage() . '' .
                    $e->getTraceAsString() . ''
            );
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
