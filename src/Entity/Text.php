<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TextRepository")
 * @ORM\Table(name="text")
 */
class Text {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $text_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $text_content_id;

    /**
     * @ORM\Column(type="string")
     */
    private $text_content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $text_createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $text_updatedAt;

    // =================================================
    // =================|Methods|=======================
    // =================================================

    /**
     * @return mixed
     */
    public function getTextId() {
        return $this->text_id;
    }

    /**
     * @return mixed
     */
    public function getTextContentId() {
        return $this->text_content_id;
    }

    /**
     * @param mixed $text_content_id
     */
    public function setTextContentId($text_content_id): Text {
        $this->text_content_id = $text_content_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTextContent() {
        return $this->text_content;
    }

    /**
     * @param mixed $text_content
     */
    public function setTextContent($text_content): Text {
        $this->text_content = $text_content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTextCreatedAt() {
        return $this->text_createdAt;
    }

    /**
     * @param mixed $text_createdAt
     */
    public function setTextCreatedAt($text_createdAt): Text {
        $this->text_createdAt = $text_createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTextUpdatedAt() {
        return $this->text_updatedAt;
    }

    /**
     * @param mixed $text_updatedAt
     * @return Text
     */
    public function setTextUpdatedAt($text_updatedAt): Text {
        $this->text_updatedAt = $text_updatedAt;
        return $this;
    }


}
