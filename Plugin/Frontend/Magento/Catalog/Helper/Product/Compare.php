<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unimix\DisableCompare\Plugin\Frontend\Magento\Catalog\Helper\Product;

class Compare
{

    public function __construct(
      \Unimix\DisableCompare\Helper\Data $helperData
    )
    {
        $this->helperData = $helperData;
    }

    public function aroundGetAddUrl(
        \Magento\Catalog\Helper\Product\Compare $subject,
        \Closure $proceed
    ) {
        //Your plugin code
        $result = $proceed();

        if( $this->helperData->isEnable() ) {

            return '';
        }
        return $result;
    }
}
