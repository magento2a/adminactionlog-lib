<?php
/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento COMMUNITY edition
 * BSS Commerce does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * BSS Commerce does not provide extension support in case of
 * incorrect edition usage.
 * =================================================================
 *
 * @category   BSS
 * @package    Bss_AdminActionLog
 * @author     Extension Team
 * @copyright  Copyright (c) 2015-2017 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\AdminActionLog\Convert;

class FineDiffCopyOp extends \Bss\AdminActionLog\Convert\FineDiffOp
{
    /**
     * FineDiffCopyOp constructor.
     * @param $len
     */
    public function __construct($len)
    {
        $this->len = $len;
    }

    /**
     * @return mixed
     */
    public function getFromLen()
    {
        return $this->len;
    }

    /**
     * @return mixed
     */
    public function getToLen()
    {
        return $this->len;
    }

    /**
     * @return string
     */
    public function getOpcode()
    {
        if ( $this->len === 1 ) {
            return 'c';
            }
        return "c{$this->len}";
    }

    /**
     * @param $size
     * @return mixed
     */
    public function increase($size)
    {
        return $this->len += $size;
    }
}