<?php
/**
 *
 * Copyright © 2016 ShopGo. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ShopGo\QuickLinks\Controller\Adminhtml\Redirect;

class SupportPage extends \Magento\Backend\App\Action
{
    const SHOPGO_SUPPORT_URL = 'http://support.shopgo.me/';

    /**
     * Redirect to ShopGo support page
     *
     * @return void
     */
    public function execute()
    {
        $this->getResponse()->setRedirect(self::SHOPGO_SUPPORT_URL);
        return;
    }
}
