<?php
/**
 * @FishPig
 */
namespace Magento\GiftMessage\Model;

class Save extends \Magento\Framework\DataObject
{
    /**
     * @return $this
     */
    public function saveAllInQuote()
    {
        return $this;
    }

    /**
     * @return $this
     */
    public function saveAllInOrder()
    {
        return $this;
    }

    /**
     * @param array $items
     * @return $this
     */
    public function setAllowQuoteItems($items)
    {
        return $this;
    }

    /**
     * @param int $item
     * @return $this
     */
    public function addAllowQuoteItem($item)
    {
        return $this;
    }

    /**
     * @return array
     */
    public function getAllowQuoteItems()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getAllowQuoteItemsProducts()
    {
        return [];
    }

    /**
     * @param  \Magento\Framework\DataObject $item
     * @return bool
     * @SuppressWarnings(PHPMD.BooleanGetMethodName)
     */
    public function getIsAllowedQuoteItem($item)
    {
        return false;
    }

    /**
     * @param \Magento\Framework\DataObject $item
     * @return bool
     */
    public function isGiftMessagesAvailable($item)
    {
        return false;
    }

    /**
     * @param mixed $products
     * @return $this
     */
    public function importAllowQuoteItemsFromProducts($products)
    {
        return $this;
    }

    /**
     * @param mixed $items
     * @return $this
     */
    public function importAllowQuoteItemsFromItems($items)
    {
        return $this;
    }
}
