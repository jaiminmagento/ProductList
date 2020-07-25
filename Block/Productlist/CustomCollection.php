<?php
declare(strict_types=1);

namespace Ecommistry\ProductList\Block\Productlist;

use Magento\Framework\View\Element\Template;
use Ecommistry\ProductList\Helper\Data;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use \Magento\Catalog\Block\Product\ListProduct;

class CustomCollection extends Template
{
	/** @var  \Magento\Catalog\Model\ResourceModel\Product\Collection */
    protected $collectionFactory;

    /** @var \Ecommistry\ProductList\Helper\Data */
    protected $helperdata;

    /** @var \Magento\Catalog\Block\Product\ListProduct */
    protected $abstractProduct;

    /**
     * Constructor
     *
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory
     * @param \Ecommistry\ProductList\Helper\Data $helperdata
     * @param \Magento\Catalog\Block\Product\ListProduct $abstractProduct
     * @param array $data
     */
	public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory,
        \Ecommistry\ProductList\Helper\Data $helperdata,
        \Magento\Catalog\Block\Product\ListProduct $abstractProduct,
        array $data = []
    ) {
        
        $this->productCollection = $collectionFactory;
        $this->helperdata = $helperdata;
        $this->absblock = $abstractProduct;
        parent::__construct($context, $data);
    }

    /**
     * Getting Custom Product Collection
     *
     * @return $collection
     */
    public function getProductCollection()
    {
        $collection = $this->productCollection->create();
        $limit = $this->helperdata->getProductLimitConfig();
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('visibility', \Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH);
        $collection->addAttributeToFilter('status',\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED);
        $collection->addAttributeToFilter('handle_display', array('eq' => 1));
        if($limit != '' && $limit > 0){
            $collection->setPageSize($limit)->setCurPage(1)->load();
        }
        return $collection;
    }
}

