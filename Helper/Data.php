<?php

namespace Unimix\DisableCompare\Helper;

use Magento\Framework\App\Helper\Context;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_scopeConfig;

    public function __construct(
        Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;

         parent::__construct($context);
    }

    public function isEnable()
    {
        return $this->scopeConfig->isSetFlag('disable_compare/disable_compare_group/isEnable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
