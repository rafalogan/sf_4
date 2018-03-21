<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 * @ORM\Table(name="users")
 *
 */
class Users {

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="string")
     */
    private $user_name;

    /**
     * @ORM\Column(type="string")
     */
    private $user_email;

    /**
     * @ORM\Column(type="string")
     */
    private $user_pass;

    /**
     * @ORM\Column(type="string", length=2 )
     */
    private $user_status;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_level;

    /**
     * @ORM\Column(type="datetime")
     */
    private $user_createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $user_updatedAt;


    // =================================================
    // =================|Methods|=======================
    // =================================================


    /**
     * @return mixed
     */
    public function getUserId() {
        return $this->user_id;
    }


    /**
     * @return mixed
     */
    public function getUserName() {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): Users {
        $this->user_name = $user_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserEmail() {
        return $this->user_email;
    }

    /**
     * @param mixed $user_email
     */
    public function setUserEmail($user_email): Users {
        $this->user_email = $user_email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserPass() {
        return $this->user_pass;
    }

    /**
     * @param mixed $user_pass
     */
    public function setUserPass($user_pass): Users {
        $this->user_pass = $user_pass;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserStatus() {
        return $this->user_status;
    }

    /**
     * @param mixed $user_status
     */
    public function setUserStatus($user_status): Users {
        $this->user_status = $user_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserLevel() {
        return $this->user_level;
    }

    /**
     * @param mixed $user_level
     */
    public function setUserLevel($user_level): Users {
        $this->user_level = $user_level;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserCreatedAt() {
        return $this->user_createdAt;
    }

    /**
     * @param mixed $user_createdAt
     */
    public function setUserCreatedAt($user_createdAt): Users {
        $this->user_createdAt = $user_createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserUpdatedAt() {
        return $this->user_updatedAt;
    }

    /**
     * @param mixed $user_updatedAt
     * @return Users
     */
    public function setUserUpdatedAt($user_updatedAt): Users {
        $this->user_updatedAt = $user_updatedAt;
        return $this;

    }




}
