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
 * RecipeController
 */
class RecipeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * recipeRepository
     *
     * @var \Pitchart\CocktailJv\Domain\Repository\RecipeRepository
     * @inject
     */
    protected $recipeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $recipes = $this->recipeRepository->findAll();
        $this->view->assign('recipes', $recipes);
    }

    /**
     * action show
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Recipe $recipe
     * @return void
     */
    public function showAction(\Pitchart\CocktailJv\Domain\Model\Recipe $recipe)
    {
        $this->view->assign('recipe', $recipe);
    }

    /**
     * action random
     *
     * @return void
     */
    public function randomAction()
    {

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
}
