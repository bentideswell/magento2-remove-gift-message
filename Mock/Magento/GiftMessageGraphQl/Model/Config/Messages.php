<?php
/**
 * Copyright 2025 Adobe
 * All Rights Reserved.
 */
declare(strict_types=1);

namespace Magento\GiftMessageGraphQl\Model\Config;

use Magento\Framework\DataObject;
use Magento\Store\Model\Store;

class Messages
{
    public const XPATH_CONFIG_GIFT_MESSAGE_ALLOW_ITEMS = 'sales/gift_options/allow_items';

    /**
     *
     */
    public function isMessagesAllowed(
        string $type,
        DataObject $entity,
        int|Store|null $store = null
    ): bool {
        return false;
    }

    /**
     *
     */
    public function isGiftMessageAllowedForProduct(
        ?string $productConfig,
        Store|int|null $store
    ): bool {
        return false;
    }
}
