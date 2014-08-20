<?php
/**
 * Created by PhpStorm.
 * User: goku
 * Date: 19/08/2014
 * Time: 08:54
 */

namespace Demo\Model\Builder;

use Demo\Model\Entity\Game;

/**
 * Interface IDefaultEntityBuilder
 * @package Demo\Model\Builder
 */
interface IDefaultEntityBuilder
{

    /**
     * Factory to create new entity.
     * @return Game
     */
    public function createGame();

}
