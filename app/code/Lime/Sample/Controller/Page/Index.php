<?php

namespace Lime\Sample\Controller\Page;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        echo "<style>
                    a:link, a:visited {
                        background-color: white;
                        color: black;
                        border: 3px solid #2f52bd;
                        padding: 10px 20px;
                        text-align: center;
                        text-decoration: none;
                        margin-top: 60px;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        -ms-transform: translate(-50%, -50%);
                        transform: translate(-50%, -50%);
                    }
                    a:hover, a:active {
                        background-color: #2f52bd;
                        color: white;
                    }
                </style>
            <div style='height: 200px;
                            position: relative;
                            border: 3px solid #2f52bd;'>" .
            "<h1 style='text-align: center;
                        font-family: Arial, Helvetica, sans-serif;
                        margin: 0;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        -ms-transform: translate(-50%, -50%);
                        transform: translate(-50%, -50%);
                        font-size: 50px;'>
                Hello World!
            </h1>" .
            "<a href='http://local.magento.com/'>Back To Home</a>"
            . "</div>";
        exit;
    }
}
