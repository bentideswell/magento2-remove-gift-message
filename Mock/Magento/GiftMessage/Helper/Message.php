<?php
/**
 *
 */
namespace Magento\GiftMessage\Helper;

class Message extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Gift messages allow section in configuration
     *
     */
    const XPATH_CONFIG_GIFT_MESSAGE_ALLOW_ITEMS = 'sales/gift_options/allow_items';
    const XPATH_CONFIG_GIFT_MESSAGE_ALLOW_ORDER = 'sales/gift_options/allow_order';
    
    /**
     * @return false
     */
    public function isMessagesAllowed($type, \Magento\Framework\DataObject $entity, $store = null)
    {
        return false;
    }
}
