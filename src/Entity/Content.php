<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContentRepository")
 * @ORM\Table(name="content")
 */
class Content {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $content_id;

    /**
     * @ORM\Column(type="string")
     */
    private $content_title;

    /**
     * @ORM\Column(type="string")
     */
    private $content_subTitle;

    /**
     * @ORM\Column(type="integer")
     */
    private $content_page_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $content_banner_id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $content_status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $content_createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $content_updatedAt;


    // =================================================
    // =================|Methods|=======================
    // =================================================


    /**
     * @return mixed
     */
    public function getContentId() {
        return $this->content_id;
    }

    /**
     * @return mixed
     */
    public function getContentTitle() {
        return $this->content_title;
    }

    /**
     * @param mixed $content_title
     */
    public function setContentTitle($content_title): Content {
        $this->content_title = $content_title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentSubTitle() {
        return $this->content_subTitle;
    }

    /**
     * @param mixed $content_subTitle
     */
    public function setContentSubTitle($content_subTitle): Content {
        $this->content_subTitle = $content_subTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentPageId() {
        return $this->content_page_id;
    }

    /**
     * @param mixed $content_page_id
     */
    public function setContentPageId($content_page_id): Content {
        $this->content_page_id = $content_page_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentBannerId() {
        return $this->content_banner_id;
    }

    /**
     * @param mixed $content_banner_id
     */
    public function setContentBannerId($content_banner_id): Content {
        $this->content_banner_id = $content_banner_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentStatus() {
        return $this->content_status;
    }

    /**
     * @param mixed $content_status
     */
    public function setContentStatus($content_status): Content {
        $this->content_status = $content_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentCreatedAt() {
        return $this->content_createdAt;
    }

    /**
     * @param mixed $content_createdAt
     */
    public function setContentCreatedAt($content_createdAt): Content {
        $this->content_createdAt = $content_createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentUpdatedAt() {
        return $this->content_updatedAt;
    }

    /**
     * @param mixed $content_updatedAt
     * @return Content
     */
    public function setContentUpdatedAt($content_updatedAt): Content {
        $this->content_updatedAt = $content_updatedAt;
        return $this;
    }


}
