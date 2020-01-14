<?php
namespace Pitchart\CocktailJv\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Julien Vitte <vitte.julien@gmail.com>
 */
class CocktailControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pitchart\CocktailJv\Controller\CocktailController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Pitchart\CocktailJv\Controller\CocktailController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCocktailsFromRepositoryAndAssignsThemToView()
    {

        $allCocktails = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $cocktailRepository = $this->getMockBuilder(\Pitchart\CocktailJv\Domain\Repository\CocktailRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $cocktailRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCocktails));
        $this->inject($this->subject, 'cocktailRepository', $cocktailRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cocktails', $allCocktails);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCocktailToView()
    {
        $cocktail = new \Pitchart\CocktailJv\Domain\Model\Cocktail();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('cocktail', $cocktail);

        $this->subject->showAction($cocktail);
    }
}
