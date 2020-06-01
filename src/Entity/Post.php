<?php
 
namespace App\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post implements \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $body;
 
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
 
    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
 
    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }
 
    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }
 
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function jsonSerialize() : array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }
}
