<?php
/**
 * Created by PhpStorm.
 * User: goku
 * Date: 18/08/2014
 * Time: 20:29
 */
namespace App\Presenters;

use Kdyby\Translation\Translator;
use Nette\Application\UI\Presenter;

/**
 * Class BasePresenter is base class for all application presenters.
 *
 * @package App\Presenters
 */
abstract class BasePresenter extends Presenter
{

    /** @var  Translator */
    protected $translator;

    /**
     * @param Translator $translator
     */
    public function injectTranslator(Translator $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @return Translator
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    public function formatLayoutTemplateFiles()
    {
        $layoutFiles = parent::formatLayoutTemplateFiles();
        $dir = dirname($this->reflection->getFileName());
        $layoutFiles[] = "{$dir}/../../../templates/@layout.latte";
        return $layoutFiles;
    }
}
