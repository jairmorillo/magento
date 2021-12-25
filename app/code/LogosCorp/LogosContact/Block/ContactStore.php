<?php

namespace LogosCorp\LogosContact\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class ContactStore extends \Magento\Framework\View\Element\Template
{
    // protected $flHelper;
    protected $_urlInterface;
    protected $scopeConfig;


    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
    }
    public function getPhoneNumber()
    {
        return $this->scopeConfig->getValue('general/store_information/phone', ScopeInterface::SCOPE_STORE);
    }

    public function getEmailUs()
    {
        return $this->scopeConfig->getValue('trans_email/ident_general/email', ScopeInterface::SCOPE_STORE);
    }

    public function getOpeningHours()
    {
        return $this->scopeConfig->getValue('general/store_information/hours', ScopeInterface::SCOPE_STORE);
    }

    public function getPostcode()
    {
        return $this->scopeConfig->getValue('general/store_information/postcode', ScopeInterface::SCOPE_STORE);
    }

    public function getCity()
    {
        return $this->scopeConfig->getValue('general/store_information/city', ScopeInterface::SCOPE_STORE);
    }

    public function getRegionId()
    {
        return $this->scopeConfig->getValue('general/store_information/region_id', ScopeInterface::SCOPE_STORE);
    }

    public function getStreetLine1()
    {
        return $this->scopeConfig->getValue('general/store_information/street_line1', ScopeInterface::SCOPE_STORE);
    }

    public function getStreetLine2()
    {
        return $this->scopeConfig->getValue('general/store_information/street_line2', ScopeInterface::SCOPE_STORE);
    }
}
