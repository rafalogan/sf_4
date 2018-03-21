<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BannerRepository")
 * @ORM\Table(name="banner")
 */
class Banner {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $banner_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $banner_page_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $banner_content_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $banner_createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $banner_updatedAt;


    // =================================================
    // =================|Methods|=======================
    // =================================================

    /**
     * @return mixed
     */
    public function getBannerId() {
        return $this->banner_id;
    }


    /**
     * @return mixed
     */
    public function getBannerPageId() {
        return $this->banner_page_id;
    }

    /**
     * @param mixed $banner_page_id
     */
    public function setBannerPageId($banner_page_id): Banner {
        $this->banner_page_id = $banner_page_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBannerContentId() {
        return $this->banner_content_id;
    }

    /**
     * @param mixed $banner_content_id
     */
    public function setBannerContentId($banner_content_id): Banner {
        $this->banner_content_id = $banner_content_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBannerCreatedAt() {
        return $this->banner_createdAt;
    }

    /**
     * @param mixed $banner_createdAt
     */
    public function setBannerCreatedAt($banner_createdAt): Banner {
        $this->banner_createdAt = $banner_createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBannerUpdatedAt() {
        return $this->banner_updatedAt;
    }

    /**
     * @param mixed $banner_updatedAt
     * @return Banner
     */
    public function setBannerUpdatedAt($banner_updatedAt): Banner {
        $this->banner_updatedAt = $banner_updatedAt;
        return $this;
    }





}
