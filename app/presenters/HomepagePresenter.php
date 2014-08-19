<?php
/**
 * Created by PhpStorm.
 * User: goku
 * Date: 18/08/2014
 * Time: 20:30
 */
namespace App\Presenters;

/**
 * Class HomepagePresenter
 *
 * @package App\Presenters
 */
class HomepagePresenter extends BasePresenter
{

    public function renderDefault()
    {
        $this->template->variable = "Text";
    }
}
