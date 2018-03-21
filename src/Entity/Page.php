<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageRepository")
 * @ORM\Table(name="page")
 */
class Page {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $page_id;

    /**
     * @ORM\Column(type="string")
     */
    private $page_name;

    /**
     * @ORM\Column(type="string")
     */
    private $page_title;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $page_status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $page_createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $page_updatedAt;


    // =================================================
    // =================|Methods|=======================
    // =================================================


    /**
     * @return mixed
     */
    public function getPageId() {
        return $this->page_id;
    }

    /**
     * @return mixed
     */
    public function getPageName() {
        return $this->page_name;
    }

    /**
     * @param mixed $page_name
     */
    public function setPageName($page_name): Page {
        $this->page_name = $page_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageTitle() {
        return $this->page_title;
    }

    /**
     * @param mixed $page_title
     */
    public function setPageTitle($page_title): Page {
        $this->page_title = $page_title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageStatus() {
        return $this->page_status;
    }

    /**
     * @param mixed $page_status
     */
    public function setPageStatus($page_status): Page {
        $this->page_status = $page_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageCreatedAt() {
        return $this->page_createdAt;
    }

    /**
     * @param mixed $page_createdAt
     */
    public function setPageCreatedAt($page_createdAt): Page {
        $this->page_createdAt = $page_createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageUpdatedAt() {
        return $this->page_updatedAt;
    }

    /**
     * @param mixed $page_updatedAt
     * @return Page
     */
    public function setPageUpdatedAt($page_updatedAt): Page {
        $this->page_updatedAt = $page_updatedAt;
        return $this;
    }
}
