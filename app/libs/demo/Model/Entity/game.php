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
class Game
{
    /**
     * @ORM\Id @ORM\Column(type="integer", name="gameId")  @ORM\GeneratedValue
     * @var integer
     */
    protected $gameId;

    /**
     * @ORM\Column(type="string", name="gameStatus", length=20)
     * @var string
     */
    protected $gameStatus;

    /**
     * @ORM\Column(type="string", name="shape", length=20)
     * @var string
     */
    protected $shape;

    /**
     * @ORM\Column(type="string", name="color", length=20)
     * @var string
     */
    protected $color;

    /**
     * @ORM\Column(type="string", name="winCombination", length=255)
     * @var string
     */
    protected $winCombination;

    /**
     * @ORM\Column(type="string", name="gameMapJson", length=255)
     * @var string
     */
    protected $gameMapJson;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @param int $gameId
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * @return string
     */
    public function getGameMapJson()
    {
        return $this->gameMapJson;
    }

    /**
     * @param string $gameMapJson
     */
    public function setGameMapJson($gameMapJson)
    {
        $this->gameMapJson = $gameMapJson;
    }

    /**
     * @return string
     */
    public function getGameStatus()
    {
        return $this->gameStatus;
    }

    /**
     * @param string $gameStatus
     */
    public function setGameStatus($gameStatus)
    {
        $this->gameStatus = $gameStatus;
    }

    /**
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * @param string $shape
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
    }

    /**
     * @return string
     */
    public function getWinCombination()
    {
        return $this->winCombination;
    }

    /**
     * @param string $winCombination
     */
    public function setWinCombination($winCombination)
    {
        $this->winCombination = $winCombination;
    }

}
