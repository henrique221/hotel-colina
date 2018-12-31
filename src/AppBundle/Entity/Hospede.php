<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hospede
 *
 * @ORM\Table(name="hospede")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HospedeRepository")
 */
class Hospede
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=255, unique=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=255, unique=true)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=255)
     */
    private $telefone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrada", type="datetime")
     */
    private $dataEntrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_saida", type="datetime")
     */
    private $dataSaida;

    /**
     * @var int
     *
     * @ORM\Column(name="quarto", type="integer")
     */
    private $quarto;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Hospede
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set rg
     *
     * @param string $rg
     *
     * @return Hospede
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     *
     * @return Hospede
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     *
     * @return Hospede
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set dataEntrada
     *
     * @param \DateTime $dataEntrada
     *
     * @return Hospede
     */
    public function setDataEntrada($dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;

        return $this;
    }

    /**
     * Get dataEntrada
     *
     * @return \DateTime
     */
    public function getDataEntrada()
    {
        return $this->dataEntrada;
    }

    /**
     * Set dataSaida
     *
     * @param \DateTime $dataSaida
     *
     * @return Hospede
     */
    public function setDataSaida($dataSaida)
    {
        $this->dataSaida = $dataSaida;

        return $this;
    }

    /**
     * Get dataSaida
     *
     * @return \DateTime
     */
    public function getDataSaida()
    {
        return $this->dataSaida;
    }

    /**
     * Set quarto
     *
     * @param integer $quarto
     *
     * @return Hospede
     */
    public function setQuarto($quarto)
    {
        $this->quarto = $quarto;

        return $this;
    }

    /**
     * Get quarto
     *
     * @return int
     */
    public function getQuarto()
    {
        return $this->quarto;
    }
}

