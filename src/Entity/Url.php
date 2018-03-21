<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UrlRepository")
 * @ORM\Table(name="url")
 */
class Url {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $url_id;

    /**
     * @ORM\Column(type="string")
     */
    private $url_href;

    /**
     * @ORM\Column(type="string")
     */
    private $url_title;

    /**
     * @ORM\Column(type="string")
     */
    private $url_target;

    /**
     * @ORM\Column(type="string")
     */
    private $url_cssId;

    /**
     * @ORM\Column(type="string")
     */
    private $url_cssClass;

    /**
     * @ORM\Column(type="integer")
     */
    private $url_text_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $url_image_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $url_content_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $url_ceatedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $url_updatedAt;


    // =================================================
    // =================|Methods|=======================
    // =================================================

    /**
     * @return mixed
     */
    public function getUrlId() {
        return $this->url_id;
    }

    /**
     * @return mixed
     */
    public function getUrlHref() {
        return $this->url_href;
    }

    /**
     * @param mixed $url_href
     */
    public function setUrlHref($url_href): Url {
        $this->url_href = $url_href;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlTitle() {
        return $this->url_title;
    }

    /**
     * @param mixed $url_title
     */
    public function setUrlTitle($url_title): Url {
        $this->url_title = $url_title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlTarget() {
        return $this->url_target;
    }

    /**
     * @param mixed $url_target
     */
    public function setUrlTarget($url_target): Url {
        $this->url_target = $url_target;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlCssId() {
        return $this->url_cssId;
    }

    /**
     * @param mixed $url_cssId
     */
    public function setUrlCssId($url_cssId): Url {
        $this->url_cssId = $url_cssId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlCssClass() {
        return $this->url_cssClass;
    }

    /**
     * @param mixed $url_cssClass
     */
    public function setUrlCssClass($url_cssClass): Url {
        $this->url_cssClass = $url_cssClass;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlTextId() {
        return $this->url_text_id;
    }

    /**
     * @param mixed $url_text_id
     */
    public function setUrlTextId($url_text_id): Url {
        $this->url_text_id = $url_text_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlImageId() {
        return $this->url_image_id;
    }

    /**
     * @param mixed $url_image_id
     */
    public function setUrlImageId($url_image_id): Url {
        $this->url_image_id = $url_image_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlContentId() {
        return $this->url_content_id;
    }

    /**
     * @param mixed $url_content_id
     */
    public function setUrlContentId($url_content_id): Url {
        $this->url_content_id = $url_content_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlCeatedAt() {
        return $this->url_ceatedAt;
    }

    /**
     * @param mixed $url_ceatedAt
     */
    public function setUrlCeatedAt($url_ceatedAt): Url {
        $this->url_ceatedAt = $url_ceatedAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlUpdatedAt() {
        return $this->url_updatedAt;
    }

    /**
     * @param mixed $url_updatedAt
     */
    public function setUrlUpdatedAt($url_updatedAt): Url {
        $this->url_updatedAt = $url_updatedAt;
        return $this;
    }

}
