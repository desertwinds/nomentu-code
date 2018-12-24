<?php

namespace Nomentu\Customer\Block;

class Link extends \Magento\Customer\Block\Account\Link
{
    protected $_customerSession;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Customer\Model\Url $customerUrl,
        array $data = []
     ) {
         $this->_customerSession = $customerSession;
         parent::__construct($context, $customerUrl, $data);
     }

    protected function _toHtml()
    {    
        $responseHtml = null; //  need to return at-least null
        if($this->_customerSession->isLoggedIn()) {
            $responseHtml = parent::_toHtml();
        }
        return $responseHtml;
    }
}