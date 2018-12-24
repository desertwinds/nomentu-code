<?php

namespace Nomentu\Customer\Block;

use Magento\Customer\Model\Context;
use Magento\Customer\Block\Account\SortLinkInterface;

class RegisterLink extends \Magento\Customer\Block\Account\RegisterLink implements SortLinkInterface
{



    /**
     * {@inheritdoc}
     * @since 100.2.0
     */
    public function getSortOrder()
    {
        return $this->getData(self::SORT_ORDER);
    }
}