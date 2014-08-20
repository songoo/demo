<?php
/**
 * Created by PhpStorm.
 * User: goku
 * Date: 19/08/2014
 * Time: 08:53
 */

namespace Demo\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Generated entity
 * @ORM\Entity
 * @ORM\Table(name = "Assigned_Service_Form_Header")
 * @package Demo\Model\Entity
 */
class RankNick
{

    /**
     * @ORM\Id @ORM\Column(type="integer", name="nickId")  @ORM\GeneratedValue
     * @var integer
     */
    protected $nickId;

    /**
     * @ORM\Column(type="string", name="gameStatus", length=20)
     * @var string
     */
    protected $nickName;

    /**
     * @ORM\Column(type="integer", name="shape")
     * @var integer
     */
    protected $points;

}
