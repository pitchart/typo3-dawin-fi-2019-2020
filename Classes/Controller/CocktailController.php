<?php
namespace Pitchart\CocktailJv\Controller;

/***
 *
 * This file is part of the "Cocktail JV" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Julien Vitte <vitte.julien@gmail.com>, Inside
 *
 ***/

/**
 * CocktailController
 */
class CocktailController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * cocktailRepository
     *
     * @var \Pitchart\CocktailJv\Domain\Repository\CocktailRepository
     * @inject
     */
    protected $cocktailRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $cocktails = $this->cocktailRepository->findAll();
        $this->view->assign('cocktails', $cocktails);
    }

    /**
     * action show
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Cocktail $cocktail
     * @return void
     */
    public function showAction(\Pitchart\CocktailJv\Domain\Model\Cocktail $cocktail)
    {
        $this->view->assign('cocktail', $cocktail);
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }

    /**
     * action highlight
     *
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action random
     *
     * @return void
     */
    public function randomAction()
    {

    }
}
