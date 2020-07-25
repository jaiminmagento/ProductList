<?php
declare(strict_types=1); 
namespace Ecommistry\ProductList\Helper; 
class Data extends \Magento\Framework\App\Helper\AbstractHelper 
{ 
    const PRODUCT_LIMIT = 'ecommistry/productlist/number_of_products';
    /** 
     * @var \Magento\Framework\App\Config\ScopeConfigInterface 
     */
    protected $scopeConfig; 
 
    /** 
     * Data constructor 
     * @param \Magento\Framework\App\Helper\Context $context 
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig 
     */
    public function __construct( 
        \Magento\Framework\App\Helper\Context $context, 
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) { 
        parent::__construct($context); 
        $this->scopeConfig = $scopeConfig; 
    } 
 
    /** 
     * @return $ProductLimitConfig 
     */
    public function getProductLimitConfig() { 
        $ProductLimitConfig = $this->scopeConfig->getValue( 
            self::PRODUCT_LIMIT, 
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE 
        );  
        return $ProductLimitConfig; 
    } 
}