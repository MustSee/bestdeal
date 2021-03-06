<?php

namespace BestDeal\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Picture
 *
 * @ORM\Table(name="picture")
 * @ORM\Entity(repositoryClass="BestDeal\MainBundle\Repository\PictureRepository")
 */

class Picture
{
    /**
     * Plusieurs Pictures(Many) dans(To) Une(One) Ad
     * @ORM\ManyToOne(targetEntity="BestDeal\MainBundle\Entity\Ad")
     * @ORM\JoinColumn(name="id_ad", referencedColumnName="id", onDelete="CASCADE")
     */
    private $ad;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_main", type="boolean")
     */
    private $isMain;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Picture
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set isMain
     *
     * @param boolean $isMain
     *
     * @return Picture
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;

        return $this;
    }

    /**
     * Get isMain
     *
     * @return bool
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * Set ad
     *
     * @param \BestDeal\MainBundle\Entity\Ad $ad
     *
     * @return Picture
     */
    public function setAd(\BestDeal\MainBundle\Entity\Ad $ad = null)
    {
        $this->ad = $ad;

        return $this;
    }

    /**
     * Get ad
     *
     * @return \BestDeal\MainBundle\Entity\Ad
     */
    public function getAd()
    {
        return $this->ad;
    }
}
