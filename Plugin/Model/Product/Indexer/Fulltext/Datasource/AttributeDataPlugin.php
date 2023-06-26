<?php
declare(strict_types=1);

namespace GhoSter\OutOfStockAtLast\Plugin\Model\Product\Indexer\Fulltext\Datasource;

use GhoSter\OutOfStockAtLast\Model\Elasticsearch\Adapter\DataMapper\Stock as StockDataMapper;
use GhoSter\OutOfStockAtLast\Model\ResourceModel\Inventory;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class AttributeDataPlugin for fulltext datasource mapping
 */
class AttributeDataPlugin
{
    /**
     * @var StockDataMapper
     */
    protected $stockDataMapper;

    /**
     * @var Inventory
     */
    protected $inventory;

    /**
     * AttributeDataPlugin constructor.
     *
     * @param StockDataMapper $stockDataMapper
     * @param Inventory $inventory
     */
    public function __construct(StockDataMapper $stockDataMapper, Inventory $inventory)
    {
        $this->stockDataMapper = $stockDataMapper;
        $this->inventory = $inventory;
    }

    /**
     * Add data for datasource
     *
     * @param mixed $subject
     * @param array $result
     * @param mixed $storeId
     * @param array $indexData
     * @return array
     * @throws NoSuchEntityException
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterAddData(
        $subject,
        array $result,
        $storeId,
        array $indexData
    ): array {
        $this->inventory->saveRelation(array_keys($indexData));
        foreach ($result as $productId => $item) {
            //phpcs:ignore Magento2.Performance.ForeachArrayMerge.ForeachArrayMerge
            $item = array_merge($item, $this->stockDataMapper->map($productId, $storeId));
            $result[$productId] = $item;
        }
        $this->inventory->clearRelation();

        return $result;
    }
}
