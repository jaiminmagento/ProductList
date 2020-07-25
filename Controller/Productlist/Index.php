<?php
declare(strict_types=1);

namespace Ecommistry\ProductList\Controller\Productlist;

use Ecommistry\ProductList\Controller\Productlist\Customer as CustomerController;
use Magento\Customer\Model\Session;

class Index extends CustomerController
{
    /** @var \Magento\Framework\View\Result\PageFactory */
    protected $resultPageFactory;

    /**
     * Customer session model
     *
     * @var \Magento\Customer\Model\Session
     */
    protected $customerSession;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Customer\Model\Session $customerSession
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        Session $customerSession,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct(
        $context,
        $customerSession
        );
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $result = $this->resultPageFactory->create();
        $viewmode = $this->getRequest()->getParam("viewmode");
        if($viewmode == 'slider'){
           $list = $result->getLayout()->getBlock('custom.products.list');
           $list->setTemplate('Ecommistry_ProductList::productlist/index.phtml')->toHtml(); 
        } else {
           $list = $result->getLayout()->getBlock('custom.products.list');
           $list->setTemplate('Ecommistry_ProductList::productlist/view.phtml')->toHtml();
        }
        return $result;
    }
}

