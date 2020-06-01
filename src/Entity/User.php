<?php
 
namespace App\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements \JsonSerializable
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
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $imageUrl;
 
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
 
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
 
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
 
    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
 
    /**
     * @param string $imageUrl
     */
    public function setImageUrl(string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
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
            'name' => $this->name,
            'description' => $this->description,
            'imageUrl' => $this->imageUrl
        ];
    }
}
