<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NewsLetterRepository")
 * @ORM\Table(name="newsLetter")
 */
class NewsLetter
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $newsLetter_id;

    /**
     * @ORM\Column(type="string")
     */
    private $newsLetter_nome;

    /**
     * @ORM\Column(type="string")
     */
    private $newsLetter_email;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $newsLetter_status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $newsLetter_createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $newsLetter_updatedAt;



    // =================================================
    // =================|Methods|=======================
    // =================================================

    /**
     * @return mixed
     */
    public function getNewsLetterId() {
        return $this->newsLetter_id;
    }

    /**
     * @return mixed
     */
    public function getNewsLetterNome() {
        return $this->newsLetter_nome;
    }

    /**
     * @param mixed $newsLetter_nome
     */
    public function setNewsLetterNome($newsLetter_nome): NewsLetter {
        $this->newsLetter_nome = $newsLetter_nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewsLetterEmail() {
        return $this->newsLetter_email;
    }

    /**
     * @param mixed $newsLetter_email
     */
    public function setNewsLetterEmail($newsLetter_email): NewsLetter {
        $this->newsLetter_email = $newsLetter_email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewsLetterStatus() {
        return $this->newsLetter_status;
    }

    /**
     * @param mixed $newsLetter_status
     */
    public function setNewsLetterStatus($newsLetter_status): NewsLetter {
        $this->newsLetter_status = $newsLetter_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewsLetterCreatedAt() {
        return $this->newsLetter_createdAt;
    }

    /**
     * @param mixed $newsLetter_createdAt
     */
    public function setNewsLetterCreatedAt($newsLetter_createdAt): NewsLetter {
        $this->newsLetter_createdAt = $newsLetter_createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewsLetterUpdatedAt() {
        return $this->newsLetter_updatedAt;
    }

    /**
     * @param mixed $newsLetter_updatedAt
     * @return NewsLetter
     */
    public function setNewsLetterUpdatedAt($newsLetter_updatedAt): NewsLetter {
        $this->newsLetter_updatedAt = $newsLetter_updatedAt;
        return $this;
    }


}
