<?php



namespace Entity;
//use Doctrine\ORM\Mapping as ORM;

/**
 * BngDistribuidores
 *
 * @Table(name="bng_distribuidores")
 * @Entity
 */
class BngDistribuidores
{
    /**
     * @var integer
     *
     * @Column(name="dst_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $dstId;

    /**
     * @var string
     *
     * @Column(name="dst_cod_genexis", type="string", length=20, nullable=true)
     */
    private $dstCodGenexis;

    /**
     * @var string
     *
     * @Column(name="dst_cnpj", type="string", length=14, nullable=true)
     */
    private $dstCnpj;

    /**
     * @var string
     *
     * @Column(name="dst_nome_responsavel", type="string", length=100, nullable=true)
     */
    private $dstNomeResponsavel;

    /**
     * @var string
     *
     * @Column(name="dst_cpf_responsavel", type="string", length=11, nullable=true)
     */
    private $dstCpfResponsavel;

    /**
     * @var string
     *
     * @Column(name="dst_rg_responsavel", type="string", length=11, nullable=true)
     */
    private $dstRgResponsavel;

    /**
     * @var string
     *
     * @Column(name="dst_cargo_responsavel", type="string", length=50, nullable=true)
     */
    private $dstCargoResponsavel;

    /**
     * @var \DateTime
     *
     * @Column(name="dst_data_nascimento", type="date", nullable=true)
     */
    private $dstDataNascimento;

    /**
     * @var string
     *
     * @Column(name="dst_email", type="string", length=50, nullable=true)
     */
    private $dstEmail;

    /**
     * @var string
     *
     * @Column(name="dst_telefone", type="string", length=11, nullable=true)
     */
    private $dstTelefone;

    /**
     * @var string
     *
     * @Column(name="dst_celular", type="string", length=11, nullable=true)
     */
    private $dstCelular;

    /**
     * @var string
     *
     * @Column(name="dst_senha", type="string", length=250, nullable=true)
     */
    private $dstSenha;

    /**
     * @var \DateTime
     *
     * @Column(name="dst_data_cadastro", type="datetime", nullable=false)
     */
    private $dstDataCadastro;

    /**
     * @var integer
     *
     * @Column(name="dst_aceito_regulamento", type="integer", nullable=true)
     */
    private $dstAceitoRegulamento;

    /**
     * @var integer
     *
     * @Column(name="dst_status", type="integer", nullable=true)
     */
    private $dstStatus;

    /**
     * @var \BngBunges
     *
     * @ManyToOne(targetEntity="BngBunges")
     * @JoinColumns({
     *   @JoinColumn(name="bng_bunge_id", referencedColumnName="bgs_id")
     * })
     */
    private $bngBunge;


    /**
     * Get dstId
     *
     * @return integer 
     */
    public function getDstId()
    {
        return $this->dstId;
    }

    /**
     * Set dstCodGenexis
     *
     * @param string $dstCodGenexis
     * @return BngDistribuidores
     */
    public function setDstCodGenexis($dstCodGenexis)
    {
        $this->dstCodGenexis = $dstCodGenexis;
    
        return $this;
    }

    /**
     * Get dstCodGenexis
     *
     * @return string 
     */
    public function getDstCodGenexis()
    {
        return $this->dstCodGenexis;
    }

    /**
     * Set dstCnpj
     *
     * @param string $dstCnpj
     * @return BngDistribuidores
     */
    public function setDstCnpj($dstCnpj)
    {
        $this->dstCnpj = $dstCnpj;
    
        return $this;
    }

    /**
     * Get dstCnpj
     *
     * @return string 
     */
    public function getDstCnpj()
    {
        return $this->dstCnpj;
    }

    /**
     * Set dstNomeResponsavel
     *
     * @param string $dstNomeResponsavel
     * @return BngDistribuidores
     */
    public function setDstNomeResponsavel($dstNomeResponsavel)
    {
        $this->dstNomeResponsavel = $dstNomeResponsavel;
    
        return $this;
    }

    /**
     * Get dstNomeResponsavel
     *
     * @return string 
     */
    public function getDstNomeResponsavel()
    {
        return $this->dstNomeResponsavel;
    }

    /**
     * Set dstCpfResponsavel
     *
     * @param string $dstCpfResponsavel
     * @return BngDistribuidores
     */
    public function setDstCpfResponsavel($dstCpfResponsavel)
    {
        $this->dstCpfResponsavel = $dstCpfResponsavel;
    
        return $this;
    }

    /**
     * Get dstCpfResponsavel
     *
     * @return string 
     */
    public function getDstCpfResponsavel()
    {
        return $this->dstCpfResponsavel;
    }

    /**
     * Set dstRgResponsavel
     *
     * @param string $dstRgResponsavel
     * @return BngDistribuidores
     */
    public function setDstRgResponsavel($dstRgResponsavel)
    {
        $this->dstRgResponsavel = $dstRgResponsavel;
    
        return $this;
    }

    /**
     * Get dstRgResponsavel
     *
     * @return string 
     */
    public function getDstRgResponsavel()
    {
        return $this->dstRgResponsavel;
    }

    /**
     * Set dstCargoResponsavel
     *
     * @param string $dstCargoResponsavel
     * @return BngDistribuidores
     */
    public function setDstCargoResponsavel($dstCargoResponsavel)
    {
        $this->dstCargoResponsavel = $dstCargoResponsavel;
    
        return $this;
    }

    /**
     * Get dstCargoResponsavel
     *
     * @return string 
     */
    public function getDstCargoResponsavel()
    {
        return $this->dstCargoResponsavel;
    }

    /**
     * Set dstDataNascimento
     *
     * @param \DateTime $dstDataNascimento
     * @return BngDistribuidores
     */
    public function setDstDataNascimento($dstDataNascimento)
    {
        $this->dstDataNascimento = $dstDataNascimento;
    
        return $this;
    }

    /**
     * Get dstDataNascimento
     *
     * @return \DateTime 
     */
    public function getDstDataNascimento()
    {
        return $this->dstDataNascimento;
    }

    /**
     * Set dstEmail
     *
     * @param string $dstEmail
     * @return BngDistribuidores
     */
    public function setDstEmail($dstEmail)
    {
        $this->dstEmail = $dstEmail;
    
        return $this;
    }

    /**
     * Get dstEmail
     *
     * @return string 
     */
    public function getDstEmail()
    {
        return $this->dstEmail;
    }

    /**
     * Set dstTelefone
     *
     * @param string $dstTelefone
     * @return BngDistribuidores
     */
    public function setDstTelefone($dstTelefone)
    {
        $this->dstTelefone = $dstTelefone;
    
        return $this;
    }

    /**
     * Get dstTelefone
     *
     * @return string 
     */
    public function getDstTelefone()
    {
        return $this->dstTelefone;
    }

    /**
     * Set dstCelular
     *
     * @param string $dstCelular
     * @return BngDistribuidores
     */
    public function setDstCelular($dstCelular)
    {
        $this->dstCelular = $dstCelular;
    
        return $this;
    }

    /**
     * Get dstCelular
     *
     * @return string 
     */
    public function getDstCelular()
    {
        return $this->dstCelular;
    }

    /**
     * Set dstSenha
     *
     * @param string $dstSenha
     * @return BngDistribuidores
     */
    public function setDstSenha($dstSenha)
    {
        $this->dstSenha = $dstSenha;
    
        return $this;
    }

    /**
     * Get dstSenha
     *
     * @return string 
     */
    public function getDstSenha()
    {
        return $this->dstSenha;
    }

    /**
     * Set dstDataCadastro
     *
     * @param \DateTime $dstDataCadastro
     * @return BngDistribuidores
     */
    public function setDstDataCadastro($dstDataCadastro)
    {
        $this->dstDataCadastro = $dstDataCadastro;
    
        return $this;
    }

    /**
     * Get dstDataCadastro
     *
     * @return \DateTime 
     */
    public function getDstDataCadastro()
    {
        return $this->dstDataCadastro;
    }

    /**
     * Set dstAceitoRegulamento
     *
     * @param integer $dstAceitoRegulamento
     * @return BngDistribuidores
     */
    public function setDstAceitoRegulamento($dstAceitoRegulamento)
    {
        $this->dstAceitoRegulamento = $dstAceitoRegulamento;
    
        return $this;
    }

    /**
     * Get dstAceitoRegulamento
     *
     * @return integer 
     */
    public function getDstAceitoRegulamento()
    {
        return $this->dstAceitoRegulamento;
    }

    /**
     * Set dstStatus
     *
     * @param integer $dstStatus
     * @return BngDistribuidores
     */
    public function setDstStatus($dstStatus)
    {
        $this->dstStatus = $dstStatus;
    
        return $this;
    }

    /**
     * Get dstStatus
     *
     * @return integer 
     */
    public function getDstStatus()
    {
        return $this->dstStatus;
    }

    /**
     * Set bngBunge
     *
     * @param \BngBunges $bngBunge
     * @return BngDistribuidores
     */
    public function setBngBunge(\BngBunges $bngBunge = null)
    {
        $this->bngBunge = $bngBunge;
    
        return $this;
    }

    /**
     * Get bngBunge
     *
     * @return \BngBunges 
     */
    public function getBngBunge()
    {
        return $this->bngBunge;
    }
}
