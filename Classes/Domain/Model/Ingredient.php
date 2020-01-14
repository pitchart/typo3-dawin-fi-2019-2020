<?php
namespace Pitchart\CocktailJv\Domain\Model;

/***
 *
 * This file is part of the "cocktail jv" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Julien Vitte <pitchart@machin.fr>, Balkany Corp.
 *
 ***/

/**
 * Ingrédient
 */
class Ingredient extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Alcoolisé
     *
     * @var bool
     * @validate NotEmpty
     */
    protected $alcoholised = false;

    /**
     * allergène
     *
     * @var bool
     * @validate NotEmpty
     */
    protected $allergenFree = false;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the alcoholised
     *
     * @return bool $alcoholised
     */
    public function getAlcoholised()
    {
        return $this->alcoholised;
    }

    /**
     * Sets the alcoholised
     *
     * @param bool $alcoholised
     * @return void
     */
    public function setAlcoholised($alcoholised)
    {
        $this->alcoholised = $alcoholised;
    }

    /**
     * Returns the boolean state of alcoholised
     *
     * @return bool
     */
    public function isAlcoholised()
    {
        return $this->alcoholised;
    }

    /**
     * Returns the allergenFree
     *
     * @return bool $allergenFree
     */
    public function getAllergenFree()
    {
        return $this->allergenFree;
    }

    /**
     * Sets the allergenFree
     *
     * @param bool $allergenFree
     * @return void
     */
    public function setAllergenFree($allergenFree)
    {
        $this->allergenFree = $allergenFree;
    }

    /**
     * Returns the boolean state of allergenFree
     *
     * @return bool
     */
    public function isAllergenFree()
    {
        return $this->allergenFree;
    }
}
