<?php



namespace Entity;
//use Doctrine\ORM\Mapping as ORM;

/**
 * BngBunges
 *
 * @Table(name="bng_bunges")
 * @Entity
 */
class BngBunges
{
    /**
     * @var integer
     *
     * @Column(name="bgs_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $bgsId;

    /**
     * @var string
     *
     * @Column(name="bgs_nome", type="string", length=100, nullable=false)
     */
    private $bgsNome;

    /**
     * @var string
     *
     * @Column(name="bgs_cpf", type="string", length=11, nullable=false)
     */
    private $bgsCpf;

    /**
     * @var string
     *
     * @Column(name="bgs_email", type="string", length=50, nullable=false)
     */
    private $bgsEmail;

    /**
     * @var string
     *
     * @Column(name="bgs_senha", type="string", length=250, nullable=false)
     */
    private $bgsSenha;

    /**
     * @var \DateTime
     *
     * @Column(name="bgs_data_cadastro", type="datetime", nullable=false)
     */
    private $bgsDataCadastro;

    /**
     * @var integer
     *
     * @Column(name="bgs_aceito_regulamento", type="integer", nullable=false)
     */
    private $bgsAceitoRegulamento;

    /**
     * @var integer
     *
     * @Column(name="bgs_status", type="integer", nullable=false)
     */
    private $bgsStatus;


    /**
     * Get bgsId
     *
     * @return integer 
     */
    public function getBgsId()
    {
        return $this->bgsId;
    }

    /**
     * Set bgsNome
     *
     * @param string $bgsNome
     * @return BngBunges
     */
    public function setBgsNome($bgsNome)
    {
        $this->bgsNome = $bgsNome;
    
        return $this;
    }

    /**
     * Get bgsNome
     *
     * @return string 
     */
    public function getBgsNome()
    {
        return $this->bgsNome;
    }

    /**
     * Set bgsCpf
     *
     * @param string $bgsCpf
     * @return BngBunges
     */
    public function setBgsCpf($bgsCpf)
    {
        $this->bgsCpf = $bgsCpf;
    
        return $this;
    }

    /**
     * Get bgsCpf
     *
     * @return string 
     */
    public function getBgsCpf()
    {
        return $this->bgsCpf;
    }

    /**
     * Set bgsEmail
     *
     * @param string $bgsEmail
     * @return BngBunges
     */
    public function setBgsEmail($bgsEmail)
    {
        $this->bgsEmail = $bgsEmail;
    
        return $this;
    }

    /**
     * Get bgsEmail
     *
     * @return string 
     */
    public function getBgsEmail()
    {
        return $this->bgsEmail;
    }

    /**
     * Set bgsSenha
     *
     * @param string $bgsSenha
     * @return BngBunges
     */
    public function setBgsSenha($bgsSenha)
    {
        $this->bgsSenha = $bgsSenha;
    
        return $this;
    }

    /**
     * Get bgsSenha
     *
     * @return string 
     */
    public function getBgsSenha()
    {
        return $this->bgsSenha;
    }

    /**
     * Set bgsDataCadastro
     *
     * @param \DateTime $bgsDataCadastro
     * @return BngBunges
     */
    public function setBgsDataCadastro($bgsDataCadastro)
    {
        $this->bgsDataCadastro = $bgsDataCadastro;
    
        return $this;
    }

    /**
     * Get bgsDataCadastro
     *
     * @return \DateTime 
     */
    public function getBgsDataCadastro()
    {
        return $this->bgsDataCadastro;
    }

    /**
     * Set bgsAceitoRegulamento
     *
     * @param integer $bgsAceitoRegulamento
     * @return BngBunges
     */
    public function setBgsAceitoRegulamento($bgsAceitoRegulamento)
    {
        $this->bgsAceitoRegulamento = $bgsAceitoRegulamento;
    
        return $this;
    }

    /**
     * Get bgsAceitoRegulamento
     *
     * @return integer 
     */
    public function getBgsAceitoRegulamento()
    {
        return $this->bgsAceitoRegulamento;
    }

    /**
     * Set bgsStatus
     *
     * @param integer $bgsStatus
     * @return BngBunges
     */
    public function setBgsStatus($bgsStatus)
    {
        $this->bgsStatus = $bgsStatus;
    
        return $this;
    }

    /**
     * Get bgsStatus
     *
     * @return integer 
     */
    public function getBgsStatus()
    {
        return $this->bgsStatus;
    }
}
