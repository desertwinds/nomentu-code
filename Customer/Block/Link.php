<?php

namespace Nomentu\Customer\Block;

use Magento\Customer\Model\Context;

class Link extends \Magento\Customer\Block\Account\Link
{
    protected $_httpContext;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Http\Context $httpContext,
        \Magento\Customer\Model\Url $customerUrl,
        array $data = []
     ) {
         $this->_httpContext = $httpContext;
         parent::__construct($context, $customerUrl, $data);
     }

     /**
     * Is logged in
     *
     * @return bool
     */
    public function isLoggedIn()
    {
        return $this->_httpContext->getValue(Context::CONTEXT_AUTH);
    }

    protected function _toHtml()
    {    
        $responseHtml = null; //  need to return at-least null
        if($this->isLoggedIn()) {
            $responseHtml = parent::_toHtml();
        }
        return $responseHtml;
    }
}