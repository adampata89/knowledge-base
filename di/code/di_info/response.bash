DI configuration for the class Magento\Quote\Model\Quote\Item\ToOrderItem in the GLOBAL area

Preference: Magento\Quote\Model\Quote\Item\ToOrderItem

Constructor Parameters:
+-------------------+--------------------------------------------------+------------------+
| Name              | Requested Type                                   | Configured Value |
+-------------------+--------------------------------------------------+------------------+
| orderItemFactory  | Magento\Sales\Api\Data\OrderItemInterfaceFactory |                  |
| objectCopyService | Magento\Framework\DataObject\Copy                |                  |
| dataObjectHelper  | Magento\Framework\Api\DataObjectHelper           |                  |
+-------------------+--------------------------------------------------+------------------+

Plugins:
+-----------------------------------------------------+---------+--------+
| Plugin                                              | Method  | Type   |
+-----------------------------------------------------+---------+--------+
| Magento\Catalog\Model\Plugin\QuoteItemProductOption | convert | before |
| Magento\GiftMessage\Model\Plugin\QuoteItem          | convert | after  |
| Magento\Bundle\Model\Plugin\QuoteItem               | convert | after  |
+-----------------------------------------------------+---------+--------+

Plugins for the Preference:
+-----------------------------------------------------+---------+--------+
| Plugin                                              | Method  | Type   |
+-----------------------------------------------------+---------+--------+
| Magento\Catalog\Model\Plugin\QuoteItemProductOption | convert | before |
| Magento\GiftMessage\Model\Plugin\QuoteItem          | convert | after  |
| Magento\Bundle\Model\Plugin\QuoteItem               | convert | after  |
+-----------------------------------------------------+---------+--------+
