<?php
/**
 * Class DisplayLayouts
 *
 * PHP version 7
 *
 * @category Sparsh
 * @package  Sparsh_AutoRelatedProducts
 * @author   Sparsh <magento@sparsh-technologies.com>
 * @license  https://www.sparsh-technologies.com  Open Software License (OSL 3.0)
 * @link     https://www.sparsh-technologies.com
 */
namespace Sparsh\AutoRelatedProducts\Ui\Component\Form;

/**
 * Class DisplayLayouts
 *
 * @category Sparsh
 * @package  Sparsh_AutoRelatedProducts
 * @author   Sparsh <magento@sparsh-technologies.com>
 * @license  https://www.sparsh-technologies.com  Open Software License (OSL 3.0)
 * @link     https://www.sparsh-technologies.com
 */
class DisplayLayouts implements \Magento\Framework\Data\OptionSourceInterface
{
    const GRID = 0;
    const SLIDER = 1;
    const ANIMATED_SLIDER = 2;
    const MOOD_BOARD = 3;
  
    /**
     * Return options for Display layouts
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::GRID, 'label' => __('Grid')],
            ['value' => self::SLIDER, 'label' => __('Slider')],
            ['value' => self::ANIMATED_SLIDER, 'label' => __('Animated Slider')],
            ['value' => self::MOOD_BOARD, 'label' => __('Mood Board')],
        ];
    }
}
