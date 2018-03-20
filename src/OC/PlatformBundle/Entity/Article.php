<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\ArticleRepository")
 * @ORM\Embedded
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $title;
    private $param;

    /**
     * Article constructor.
     */
    public function __construct($param)
    {
        $this->param = $param;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


}

