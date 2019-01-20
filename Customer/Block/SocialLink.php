<?php
namespace Nomentu\Customer\Block;

use Magento\Customer\Block\Account\SortLinkInterface;

class SocialLink extends \Magento\Framework\View\Element\Html\Link implements SortLinkInterface
{



    /**
     * {@inheritdoc}
     * @since 100.2.0
     */
    public function getSortOrder()
    {
        return $this->getData(self::SORT_ORDER);
    }

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {

        return '<li class="social-links ib-wrapper--square"><a ' . $this->getLinkAttributes() . ' > <span class="ib ib-hover ic ic-lg ic-' . $this->escapeHtml($this->getLabel()) .'"></span></a></li>';
    }
}