<?php
/**
 * Created by PhpStorm.
 * User: emanuelevella
 * Date: 27/11/2017
 * Time: 14:39
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Item
 * @package App\Entity
 * @ORM\Entity
 * @Orm\Table(name="playeritems")
 */

class PlayerItem
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=40)
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="playeritems")
     * @@ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $player;

    /**
     * @ORM\ManyToOne(targetEntity="Item")
     * @@ORM\JoinColumn(name="item_id", referencedColumnName="id")
     */
    private $item;

    /**
     * @return int
     */

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=40)
     */
    protected $position;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=40)
     */
    protected $created_at;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



}