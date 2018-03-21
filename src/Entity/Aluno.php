<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlunoRepository")
 * @ORM\Table(name="aluno")
 */
class Aluno {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $aluno_id;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_name;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_nomePai;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_nomeMae;


    /**
     * @ORM\Column(type="integer")
     */
    private $aluno_cpf;


    /**
     * @ORM\Column(type="integer")
     */
    private $aluno_rg;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_ssp;


    /**
     * @ORM\Column(type="datetime")
     */
    private $aluno_dataNascimento;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_nacional;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_natural;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_sexo;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_endereco;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_bairro;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_cidade;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_uf;


    /**
     * @ORM\Column(type="integer")
     */
    private $aluno_cep;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_lateralidade;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_estadoCivil;


    /**
     * @ORM\Column(type="integer")
     */
    private $aluno_foneResidencial;


    /**
     * @ORM\Column(type="integer")
     */
    private $aluno_foneComercial;


    /**
     * @ORM\Column(type="integer")
     */
    private $aluno_celular;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_email;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_curso;


    /**
     * @ORM\Column(type="integer")
     */
    private $aluno_anoConclusao;


    /**
     * @ORM\Column(type="string")
     */
    private $aluno_indicado;


    /**
     * @ORM\Column(type="datetime")
     */
    private $aluno_createdAt;


    /**
     * @ORM\Column(type="datetime")
     */
    private $aluno_updatedAt;

    // =================================================
    // =================|Methods|=======================
    // =================================================

    /**
     * @return mixed
     */
    public function getAlunoId() {
        return $this->aluno_id;
    }

    /**
     * @return mixed
     */
    public function getAlunoName() {
        return $this->aluno_name;
    }

    /**
     * @param mixed $aluno_name
     */
    public function setAlunoName($aluno_name): Aluno {
        $this->aluno_name = $aluno_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoNomePai() {
        return $this->aluno_nomePai;
    }

    /**
     * @param mixed $aluno_nomePai
     */
    public function setAlunoNomePai($aluno_nomePai): Aluno {
        $this->aluno_nomePai = $aluno_nomePai;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoNomeMae() {
        return $this->aluno_nomeMae;
    }

    /**
     * @param mixed $aluno_nomeMae
     */
    public function setAlunoNomeMae($aluno_nomeMae): Aluno {
        $this->aluno_nomeMae = $aluno_nomeMae;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoCpf() {
        return $this->aluno_cpf;
    }

    /**
     * @param mixed $aluno_cpf
     */
    public function setAlunoCpf($aluno_cpf): Aluno {
        $this->aluno_cpf = $aluno_cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoRg() {
        return $this->aluno_rg;
    }

    /**
     * @param mixed $aluno_rg
     */
    public function setAlunoRg($aluno_rg): Aluno {
        $this->aluno_rg = $aluno_rg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoSsp() {
        return $this->aluno_ssp;
    }

    /**
     * @param mixed $aluno_ssp
     */
    public function setAlunoSsp($aluno_ssp): Aluno {
        $this->aluno_ssp = $aluno_ssp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoDataNascimento() {
        return $this->aluno_dataNascimento;
    }

    /**
     * @param mixed $aluno_dataNascimento
     */
    public function setAlunoDataNascimento($aluno_dataNascimento): Aluno {
        $this->aluno_dataNascimento = $aluno_dataNascimento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoNacional() {
        return $this->aluno_nacional;
    }

    /**
     * @param mixed $aluno_nacional
     */
    public function setAlunoNacional($aluno_nacional): Aluno {
        $this->aluno_nacional = $aluno_nacional;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoNatural() {
        return $this->aluno_natural;
    }

    /**
     * @param mixed $aluno_natural
     */
    public function setAlunoNatural($aluno_natural): Aluno {
        $this->aluno_natural = $aluno_natural;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoSexo() {
        return $this->aluno_sexo;
    }

    /**
     * @param mixed $aluno_sexo
     */
    public function setAlunoSexo($aluno_sexo): Aluno {
        $this->aluno_sexo = $aluno_sexo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoEndereco() {
        return $this->aluno_endereco;
    }

    /**
     * @param mixed $aluno_endereco
     */
    public function setAlunoEndereco($aluno_endereco): Aluno {
        $this->aluno_endereco = $aluno_endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoBairro() {
        return $this->aluno_bairro;
    }

    /**
     * @param mixed $aluno_bairro
     */
    public function setAlunoBairro($aluno_bairro): Aluno {
        $this->aluno_bairro = $aluno_bairro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoCidade() {
        return $this->aluno_cidade;
    }

    /**
     * @param mixed $aluno_cidade
     */
    public function setAlunoCidade($aluno_cidade): Aluno {
        $this->aluno_cidade = $aluno_cidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoUf() {
        return $this->aluno_uf;
    }

    /**
     * @param mixed $aluno_uf
     */
    public function setAlunoUf($aluno_uf): Aluno {
        $this->aluno_uf = $aluno_uf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoCep() {
        return $this->aluno_cep;
    }

    /**
     * @param mixed $aluno_cep
     */
    public function setAlunoCep($aluno_cep): Aluno {
        $this->aluno_cep = $aluno_cep;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoLateralidade() {
        return $this->aluno_lateralidade;
    }

    /**
     * @param mixed $aluno_lateralidade
     */
    public function setAlunoLateralidade($aluno_lateralidade): Aluno {
        $this->aluno_lateralidade = $aluno_lateralidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoEstadoCivil() {
        return $this->aluno_estadoCivil;
    }

    /**
     * @param mixed $aluno_estadoCivil
     */
    public function setAlunoEstadoCivil($aluno_estadoCivil): Aluno {
        $this->aluno_estadoCivil = $aluno_estadoCivil;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoFoneResidencial() {
        return $this->aluno_foneResidencial;
    }

    /**
     * @param mixed $aluno_foneResidencial
     */
    public function setAlunoFoneResidencial($aluno_foneResidencial): Aluno {
        $this->aluno_foneResidencial = $aluno_foneResidencial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoFoneComercial() {
        return $this->aluno_foneComercial;
    }

    /**
     * @param mixed $aluno_foneComercial
     */
    public function setAlunoFoneComercial($aluno_foneComercial): Aluno {
        $this->aluno_foneComercial = $aluno_foneComercial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoCelular() {
        return $this->aluno_celular;
    }

    /**
     * @param mixed $aluno_celular
     */
    public function setAlunoCelular($aluno_celular): Aluno {
        $this->aluno_celular = $aluno_celular;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoEmail() {
        return $this->aluno_email;
    }

    /**
     * @param mixed $aluno_email
     */
    public function setAlunoEmail($aluno_email): Aluno {
        $this->aluno_email = $aluno_email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoCurso() {
        return $this->aluno_curso;
    }

    /**
     * @param mixed $aluno_curso
     */
    public function setAlunoCurso($aluno_curso): Aluno {
        $this->aluno_curso = $aluno_curso;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoAnoConclusao() {
        return $this->aluno_anoConclusao;
    }

    /**
     * @param mixed $aluno_anoConclusao
     */
    public function setAlunoAnoConclusao($aluno_anoConclusao): Aluno {
        $this->aluno_anoConclusao = $aluno_anoConclusao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoIndicado() {
        return $this->aluno_indicado;
    }

    /**
     * @param mixed $aluno_indicado
     */
    public function setAlunoIndicado($aluno_indicado): Aluno {
        $this->aluno_indicado = $aluno_indicado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoCreatedAt() {
        return $this->aluno_createdAt;
    }

    /**
     * @param mixed $aluno_createdAt
     */
    public function setAlunoCreatedAt($aluno_createdAt): Aluno {
        $this->aluno_createdAt = $aluno_createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlunoUpdatedAt() {
        return $this->aluno_updatedAt;
    }

    /**
     * @param mixed $aluno_updatedAt
     * @return Aluno
     */
    public function setAlunoUpdatedAt($aluno_updatedAt): Aluno {
        $this->aluno_updatedAt = $aluno_updatedAt;
        return $this;
    }



}
