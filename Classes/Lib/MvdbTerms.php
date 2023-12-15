<?php
namespace SLUB\PublisherDb\Lib;

use SLUB\PublisherDb\Domain\Model\MvdbGenre;
use SLUB\PublisherDb\Domain\Model\MvdbInstrument;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/***
 *
 * This file is part of the "Publisher Database" Extension for TYPO3 CMS.
 *
 * It defines common functionality for the GND derived Terminology System
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Matthias Richter <matthias.richter@slub-dresden.de>, SLUB Dresden
 *
 ***/

/**
 * MvdbTerms
 */
class MvdbTerms
{
    const classMap = [
        'MvdbGenre' => MvdbGenre::class,
        'MvdbInstrument' => MvdbInstrument::class ];

    public static function makeOrFind(string $gndId, array $items, string $type)
    {
        $item = $items[$gndId] ?? self::pull($gndId, $type);
        $items[$gndId] = $item;
        return [ $items, $item ];
    }

    private static function pull(string $gndId, string $type)
    {
        $item = GeneralUtility::makeInstance( self::classMap[$type] );

        $url = 'https://data.slub-dresden.de/source/gnd_marc21/' . $gndId;
        $headers = @get_headers($url);
        if (!$headers || $headers[0] == 'HTTP/1.0 404 Not Found' || $headers[0] == 'HTTP/1.1 404 Not Found') {
            throw new GndIdNotFoundException();
        }
        $array = json_decode(file_get_contents($url), true);
        if ($type == 'MvdbInstrument' && isset($array[450])) {
            $item->setShorthand(self::getShorthand($array));
        }
        $array = GndLib::flattenDataSet($array);

        $item->setGndId($gndId);
        $item->setName($array[150][0]['a']);
        $item->setBaseLevel(FALSE);

        return $item;
    }

    private static function getShorthand ($array) {
        $mapMerge  = function ($a) {
            return 
                (new DbArray())
                    ->set($a['__'])
                    ->merge()
                    ->toArray();
        };

        $isShorthand = function ($a) {
            foreach ($a as $cell) {
                if (str_contains($cell, 'RAK-M')) {
                    return true;
                }
            }
            return false;
        };

        $geta = function ($a) {
            return $a['a'];
        };

        $isCap = function ($c) {
            return ctype_upper(str_split($c)[0]);
        };

        $possibleShorthands = (new DbArray())
            ->set( $array[450] )
            ->map( $mapMerge )
            ->filter( $isShorthand )
            ->map( $geta );

        if (
            isset($possibleShorthands->toArray()[1]) && 
            isset($possibleShorthands->filter($isCap)->toArray()[0])
        ) {
            $possibleShorthands = $possibleShorthands->filter( $isCap );
        }

        $shorthand = isset($possibleShorthands->toArray()[0]) ? $possibleShorthands->toArray()[0] : '';

        return $shorthand;
    }
}


