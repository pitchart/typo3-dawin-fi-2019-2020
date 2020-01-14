<?php
namespace Pitchart\CocktailJv\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Julien Vitte <vitte.julien@gmail.com>
 */
class IngredientTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pitchart\CocktailJv\Domain\Model\Ingredient
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Pitchart\CocktailJv\Domain\Model\Ingredient();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlcoholisedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAlcoholised()
        );
    }

    /**
     * @test
     */
    public function setAlcoholisedForBoolSetsAlcoholised()
    {
        $this->subject->setAlcoholised(true);

        self::assertAttributeEquals(
            true,
            'alcoholised',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAllergenFreeReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAllergenFree()
        );
    }

    /**
     * @test
     */
    public function setAllergenFreeForBoolSetsAllergenFree()
    {
        $this->subject->setAllergenFree(true);

        self::assertAttributeEquals(
            true,
            'allergenFree',
            $this->subject
        );
    }
}
