<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuRepository")
 * @ORM\Table(name="menu")
 */
class Menu {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $menu_id;

    /**
     * @ORM\Column(type="string")
     */
    private $menu_title;

    /**
     * @ORM\Column(type="string")
     */
    private $menu_href;

    /**
     * @ORM\Column(type="string")
     */
    private $menu_target;

    /**
     * @ORM\Column(type="string")
     */
    private $menu_cssid;

    /**
     * @ORM\Column(type="string")
     */
    private $menu_cssclass;

    /**
     * @ORM\Column(type="string", length=2 )
     */
    private $menu_status;

    /**
     * @ORM\Column(type="integer")
     */
    private $menu_menu_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $menu_createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $menu_updatedAt;

    // =====| method |====

    /**
     * @return mixed
     */
    public function getMenuId() {
        return $this->menu_id;
    }

    /**
     * @return mixed
     */
    public function getMenuTitle() {
        return $this->menu_title;
    }

    /**
     * @param mixed $menu_title
     */
    public function setMenuTitle($menu_title): Menu {
        $this->menu_title = $menu_title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuHref() {
        return $this->menu_href;
    }

    /**
     * @param mixed $menu_href
     */
    public function setMenuHref($menu_href): Menu {
        $this->menu_href = $menu_href;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuTarget() {
        return $this->menu_target;
    }

    /**
     * @param mixed $menu_target
     */
    public function setMenuTarget($menu_target): Menu {
        $this->menu_target = $menu_target;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuCssid() {
        return $this->menu_cssid;
    }

    /**
     * @param mixed $menu_cssid
     */
    public function setMenuCssid($menu_cssid): Menu {
        $this->menu_cssid = $menu_cssid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuCssclass() {
        return $this->menu_cssclass;
    }

    /**
     * @param mixed $menu_cssclass
     */
    public function setMenuCssclass($menu_cssclass): Menu {
        $this->menu_cssclass = $menu_cssclass;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuStatus() {
        return $this->menu_status;
    }

    /**
     * @param mixed $menu_status
     */
    public function setMenuStatus($menu_status): Menu {
        $this->menu_status = $menu_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuMenuId() {
        return $this->menu_menu_id;
    }

    /**
     * @param mixed $menu_menu_id
     */
    public function setMenuMenuId($menu_menu_id): Menu {
        $this->menu_menu_id = $menu_menu_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuCreatedAt() {
        return $this->menu_createdAt;
    }

    /**
     * @param mixed $menu_createdAt
     */
    public function setMenuCreatedAt($menu_createdAt): Menu {
        $this->menu_createdAt = $menu_createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuUpdatedAt() {
        return $this->menu_updatedAt;
    }

    /**
     * @param mixed $menu_updatedAt
     * @return Menu
     */
    public function setMenuUpdatedAt($menu_updatedAt): Menu {
        $this->menu_updatedAt = $menu_updatedAt;
        return $this;
    }



}
