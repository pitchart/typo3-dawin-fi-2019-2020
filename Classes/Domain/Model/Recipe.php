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
 * Recette
 */
class Recipe extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Photos
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $photos = null;

    /**
     * Nb personnes
     *
     * @var int
     * @validate NotEmpty
     */
    protected $nbPeople = 0;

    /**
     * Description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * Difficulté
     *
     * @var int
     * @validate NotEmpty
     */
    protected $difficulty = 0;

    /**
     * Temps de préparation
     *
     * @var string
     * @validate NotEmpty
     */
    protected $prepTime = '';

    /**
     * Tags
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Tag>
     * @lazy
     */
    protected $tags = null;

    /**
     * Etapes
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Step>
     * @cascade remove
     * @lazy
     */
    protected $steps = null;

    /**
     * Avis
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Review>
     * @cascade remove
     * @lazy
     */
    protected $reviews = null;

    /**
     * Cocktail
     *
     * @var \Pitchart\CocktailJv\Domain\Model\Cocktail
     */
    protected $cocktail = null;

    /**
     * Ustensiles
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Utensil>
     * @lazy
     */
    protected $utensils = null;

    /**
     * Quantités
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Quantity>
     * @cascade remove
     * @lazy
     */
    protected $quantities = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->photos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->steps = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->utensils = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->quantities = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

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
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function addPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photos->attach($photo);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photoToRemove The FileReference to be removed
     * @return void
     */
    public function removePhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photoToRemove)
    {
        $this->photos->detach($photoToRemove);
    }

    /**
     * Returns the photos
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $photos
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Sets the photos
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $photos
     * @return void
     */
    public function setPhotos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $photos)
    {
        $this->photos = $photos;
    }

    /**
     * Returns the nbPeople
     *
     * @return int $nbPeople
     */
    public function getNbPeople()
    {
        return $this->nbPeople;
    }

    /**
     * Sets the nbPeople
     *
     * @param int $nbPeople
     * @return void
     */
    public function setNbPeople($nbPeople)
    {
        $this->nbPeople = $nbPeople;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the difficulty
     *
     * @return int $difficulty
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Sets the difficulty
     *
     * @param int $difficulty
     * @return void
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    }

    /**
     * Returns the prepTime
     *
     * @return string $prepTime
     */
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    /**
     * Sets the prepTime
     *
     * @param string $prepTime
     * @return void
     */
    public function setPrepTime($prepTime)
    {
        $this->prepTime = $prepTime;
    }

    /**
     * Adds a Tag
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Pitchart\CocktailJv\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Pitchart\CocktailJv\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }

    /**
     * Adds a Step
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Step $step
     * @return void
     */
    public function addStep(\Pitchart\CocktailJv\Domain\Model\Step $step)
    {
        $this->steps->attach($step);
    }

    /**
     * Removes a Step
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Step $stepToRemove The Step to be removed
     * @return void
     */
    public function removeStep(\Pitchart\CocktailJv\Domain\Model\Step $stepToRemove)
    {
        $this->steps->detach($stepToRemove);
    }

    /**
     * Returns the steps
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Step> $steps
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Sets the steps
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Step> $steps
     * @return void
     */
    public function setSteps(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $steps)
    {
        $this->steps = $steps;
    }

    /**
     * Adds a Review
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Review $review
     * @return void
     */
    public function addReview(\Pitchart\CocktailJv\Domain\Model\Review $review)
    {
        $this->reviews->attach($review);
    }

    /**
     * Removes a Review
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Review $reviewToRemove The Review to be removed
     * @return void
     */
    public function removeReview(\Pitchart\CocktailJv\Domain\Model\Review $reviewToRemove)
    {
        $this->reviews->detach($reviewToRemove);
    }

    /**
     * Returns the reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Review> $reviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Sets the reviews
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Review> $reviews
     * @return void
     */
    public function setReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Returns the cocktail
     *
     * @return \Pitchart\CocktailJv\Domain\Model\Cocktail $cocktail
     */
    public function getCocktail()
    {
        return $this->cocktail;
    }

    /**
     * Sets the cocktail
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Cocktail $cocktail
     * @return void
     */
    public function setCocktail(\Pitchart\CocktailJv\Domain\Model\Cocktail $cocktail)
    {
        $this->cocktail = $cocktail;
    }

    /**
     * Adds a Utensil
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Utensil $utensil
     * @return void
     */
    public function addUtensil(\Pitchart\CocktailJv\Domain\Model\Utensil $utensil)
    {
        $this->utensils->attach($utensil);
    }

    /**
     * Removes a Utensil
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Utensil $utensilToRemove The Utensil to be removed
     * @return void
     */
    public function removeUtensil(\Pitchart\CocktailJv\Domain\Model\Utensil $utensilToRemove)
    {
        $this->utensils->detach($utensilToRemove);
    }

    /**
     * Returns the utensils
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Utensil> $utensils
     */
    public function getUtensils()
    {
        return $this->utensils;
    }

    /**
     * Sets the utensils
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Utensil> $utensils
     * @return void
     */
    public function setUtensils(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $utensils)
    {
        $this->utensils = $utensils;
    }

    /**
     * Adds a Quantity
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Quantity $quantity
     * @return void
     */
    public function addQuantity(\Pitchart\CocktailJv\Domain\Model\Quantity $quantity)
    {
        $this->quantities->attach($quantity);
    }

    /**
     * Removes a Quantity
     *
     * @param \Pitchart\CocktailJv\Domain\Model\Quantity $quantityToRemove The Quantity to be removed
     * @return void
     */
    public function removeQuantity(\Pitchart\CocktailJv\Domain\Model\Quantity $quantityToRemove)
    {
        $this->quantities->detach($quantityToRemove);
    }

    /**
     * Returns the quantities
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Quantity> $quantities
     */
    public function getQuantities()
    {
        return $this->quantities;
    }

    /**
     * Sets the quantities
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pitchart\CocktailJv\Domain\Model\Quantity> $quantities
     * @return void
     */
    public function setQuantities(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $quantities)
    {
        $this->quantities = $quantities;
    }
}
