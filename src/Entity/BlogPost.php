<?php


namespace App\Entity;


use DateTime;

class BlogPost
{

    private int $id;
    private DateTime $creationDate;
    private string $author;
    private string $title;
    private string $image;
    private float $price;

    /**
     * BlogPost constructor.
     * @param int $id
     * @param DateTime $creationDate
     * @param string $author
     * @param string $title
     * @param string $image
     * @param float $price
     */
    public function __construct(int $id, DateTime $creationDate, string $author, string $title, string $image, float $price)
    {
        $this->creationDate = $creationDate;
        $this->author = $author;
        $this->title = $title;
        $this->image = $image;
        $this->id = $id;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }



    /**
     * @return DateTime
     */
    public function getCreationDate(): DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param DateTime $creationDate
     */
    public function setCreationDate(DateTime $creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

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
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }




}