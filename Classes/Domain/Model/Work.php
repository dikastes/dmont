<?php
namespace Slub\DmOnt\Domain\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/***
*
 * This file is part of the "Publisher Database" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Matthias Richter <matthias.richter@slub-dresden.de>, SLUB Dresden
 *
 ***/
/**
 * GndWork
 */
class GndWork extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * mainMediumOfPerformance
     * 
     * @var \Slub\DmOnt\Domain\Model\MediumOfPerformance
     */
    protected $mainMediumOfPerformance = null;

    /**
     * altMediumsOfPerformance
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\DmOnt\Domain\Model\MediumOfPerformance>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $altMediumsOfPerformance = null;

    /**
     * genres
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\DmOnt\Domain\Model\Genre>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $genres = null;

    /**
     * Returns the mediumOfPerformance
     * 
     * @return string $mediumOfPerformance
     */
    public function getMediumOfPerformance()
    {
        return $this->mediumOfPerformance;
    }

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
        $this->instruments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->form = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->altInstrumentation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->genres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->publisherMakroItems = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the mainInstrumentation
     * 
     * @return \Slub\DmOnt\Domain\Model\MediumOfPerformance $mainInstrumentation
     */
    public function getMainMediumOfPerformance()
    {
        return $this->mainMediumOfPerformance;
    }

    /**
     * Adds a MvdbInstrumentation
     * 
     * @param \Slub\DmOnt\Domain\Model\MediumOfPerformance $altMediumOfPerformance
     * @return void
     */
    public function addAltMediumOfPerformance(MediumOfPerformance $mediumOfPerformance)
    {
        $this->altMediumsOfPerformance->attach($mediumOfPerformance);
    }

    /**
     * Removes a MvdbInstrumentation
     * 
     * @param \Slub\DmOnt\Domain\Model\MediumOfPerformance $altMediumOfPerformanceToRemove
     * @return void
     */
    public function removeAltInstrumentation(MediumOfPerformance $altInstrumentationToRemove)
    {
        $this->altInstrumentation->detach($altInstrumentationToRemove);
    }

    /**
     * Returns the altMediumsOfPerformance
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\DmOnt\Domain\Model\MediumOfPerformance> altMediumsOfPerformance
     */
    public function getMediumsOfPerformance()
    {
        return $this->altMediumsOfPerformance;
    }

    /**
     * Adds a genre
     * 
     * @param \Slub\DmOnt\Domain\Model\Genre $genre
     * @return void
     */
    public function addGenre(Genre $genre)
    {
        $this->genres->attach($genre);
    }

    /**
     * Removes a genre
     * 
     * @param \Slub\DmOnt\Domain\Model\genre $genreToRemove The genre to be removed
     * @return void
     */
    public function removeGenre(Genre $genreToRemove)
    {
        $this->genres->detach($genreToRemove);
    }

    /**
     * Returns the genres
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\DmOnt\Domain\Model\MvdbGenre> $genres
     */
    public function getGenres()
    {
        return $this->genres;
    }
}
