<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
    public function index() {
        //$this->load->library('doctrine');
        $em = $this->doctrine->em;

        $bunge = new Entity\BngBunges;
        //$bunge->setBgsId();
        $bunge->setBgsNome('Teste');
        $bunge->setBgsCpf('29391380875');
        $bunge->setBgsEmail('rainereduardolopez@gmail.com');
        $bunge->setBgsSenha('q1w2e3');
        //$bunge->setBgsDataCadastro();
        $bunge->setBgsAceitoRegulamento(1);
        $bunge->setBgsStatus(1);
        
        $em->persist($bunge);
        $em->flush();
        $created_id = $bunge->getBgsId();

        $rep = $em->getRepository('Entity\BngBunges');

        $bunges = $rep->findAll();
        echo "<b>findAll()</b>";
        echo '<pre>';
        var_dump($bunges);
        echo '</pre>';


        $bunge = $rep->find($created_id);
        echo "<b>find(1)</b>";
        echo '<pre>';
        if ($bunge) {
            var_dump($bunge->getBgsId());
            var_dump($bunge->getBgsNome());
            var_dump($bunge->getBgsCpf());
            var_dump($bunge->getBgsEmail());
            var_dump($bunge->getBgsSenha());
            var_dump($bunge->getBgsDataCadastro());
            var_dump($bunge->getBgsAceitoRegulamento());
            var_dump($bunge->getBgsStatus());
        }
        echo '</pre>';
        
        
        //var_dump($bunge);
        $distribuidor = new Entity\BngDistribuidores;
        $distribuidor->setBngBunge($bunge);
        $distribuidor->setDstAceitoRegulamento(1);
        $distribuidor->setDstCargoResponsavel('Teste Cargo');
        $distribuidor->setDstCelular('11997989898');
        $distribuidor->setDstCnpj('73776102000177');
        $distribuidor->setDstCodGenexis('123123');
        $distribuidor->setDstCpfResponsavel('29391380875');
        //$distribuidor->setDstDataCadastro($dstDataCadastro);
        //$distribuidor->setDstDataNascimento('1981-12-06');
        $distribuidor->setDstEmail('rainer@enc.com.br');
        $distribuidor->setDstNomeResponsavel('Teste nome resp');
        $distribuidor->setDstRgResponsavel('3425740408');
        $distribuidor->setDstSenha('123456');
        $distribuidor->setDstStatus(1);
        $distribuidor->setDstTelefone('1139393939');
        
        $bunge->setBgsNome('Teste Objeto');
        
        $em->persist($distribuidor);
        $em->flush();
        $dist_created_id = $distribuidor->getDstId();
        
        $rep_dist = $em->getRepository('Entity\BngDistribuidores');

        $distribuidor = $rep_dist->find($dist_created_id);
        
        echo '<b>find($dist_created_id)</b>';
        echo '<pre>';
        var_dump($distribuidor);
        echo '</pre>';
        
        $em->remove($bunge);
        $em->flush();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
