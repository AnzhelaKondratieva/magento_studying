<?php


namespace Training\ProductGetInfo\Controller\Info;


use Magento\CatalogInventory\Model\Stock\StockItemRepository;
use Magento\Cms\Api\PageRepositoryInterface;
use Magento\Cms\Helper\Page;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\ForwardFactory;

class Stock extends \Magento\Cms\Controller\Page\View
{
    /** @var JsonFactory */
    private $jsonResultFactory;

    protected $pageRepository;

    protected $resultForwardFactory;

    protected $_request;

    protected $stockItemRepository;

    public function __construct(
        Context $context,
        RequestInterface $request,
        ForwardFactory $resultForwardFactory,
        JsonFactory $resultJsonFactory,
        PageRepositoryInterface $pageRepository,
        Page $page,
        StockItemRepository $stockItemRepository
    ) {
        $this->jsonResultFactory = $resultJsonFactory;
        $this->_request = $request;
        $this->pageRepository = $pageRepository;
        $this->resultForwardFactory = $resultForwardFactory;
        $this->stockItemRepository = $stockItemRepository;
        parent::__construct($context, $request, $page, $resultForwardFactory);
    }

    public function execute()
    {
        if ($this->getRequest()->isAjax()) {
            $productId = (int)$this->getRequest()->getParam('id');
            $result = $this->jsonResultFactory->create();
            $result->setData($this->getProductStock($productId));

            return $result;
        }
        return parent::execute();
    }

    public function getProductStock($productId)
    {
        return $this->stockItemRepository->get($productId);
    }
}
