<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 * @ORM\Table(name="image")
 */
class Image {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $image_id;

    /**
     * @ORM\Column(type="string")
     */
    private $image_src;

    /**
     * @ORM\Column(type="string")
     */
    private $image_title;

    /**
     * @ORM\Column(type="string")
     */
    private $image_alt;

    /**
     * @ORM\Column(type="text")
     */
    private $image_description;

    /**
     * @ORM\Column(type="integer")
     */
    private $image_content_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $image_text_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $image_createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $image_updatedAt;


    // =================================================
    // =================|Methods|=======================
    // =================================================

    /**
     * @return mixed
     */
    public function getImageId() {
        return $this->image_id;
    }


    /**
     * @return mixed
     */
    public function getImageSrc() {
        return $this->image_src;
    }

    /**
     * @param mixed $image_src
     */
    public function setImageSrc($image_src): Image {
        $this->image_src = $image_src;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageTitle() {
        return $this->image_title;
    }

    /**
     * @param mixed $image_title
     */
    public function setImageTitle($image_title): Image {
        $this->image_title = $image_title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageAlt() {
        return $this->image_alt;
    }

    /**
     * @param mixed $image_alt
     */
    public function setImageAlt($image_alt): Image {
        $this->image_alt = $image_alt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageDescription() {
        return $this->image_description;
    }

    /**
     * @param mixed $image_description
     */
    public function setImageDescription($image_description): Image {
        $this->image_description = $image_description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageContentId() {
        return $this->image_content_id;
    }

    /**
     * @param mixed $image_content_id
     */
    public function setImageContentId($image_content_id): Image {
        $this->image_content_id = $image_content_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageTextId() {
        return $this->image_text_id;
    }

    /**
     * @param mixed $image_text_id
     */
    public function setImageTextId($image_text_id): Image {
        $this->image_text_id = $image_text_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageCreatedAt() {
        return $this->image_createdAt;
    }

    /**
     * @param mixed $image_createdAt
     */
    public function setImageCreatedAt($image_createdAt): Image {
        $this->image_createdAt = $image_createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageUpdatedAt() {
        return $this->image_updatedAt;
    }

    /**
     * @param mixed $image_updatedAt
     * @return Image
     */
    public function setImageUpdatedAt($image_updatedAt): Image {
        $this->image_updatedAt = $image_updatedAt;
        return $this;
    }

}
