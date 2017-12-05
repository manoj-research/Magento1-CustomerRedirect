<?php
/**
 * Class RicardoMartins_CustomerRedirect_Model_Observer
 *
 * @author    Ricardo Martins
 * @copyright 2017 MIT License
 */
class RicardoMartins_CustomerRedirect_Model_Observer
{
    /**
     * @param $observer Varien_Event_Observer
     */
    public function setRedirectUrl(Varien_Event_Observer $observer)
    {
        $redirectUrl = $observer->getControllerAction()->getRequest()->getParam('redirectUrl', false);
        if($redirectUrl){
            $customerSession = Mage::getSingleton('customer/session');
            $customerSession->setBeforeAuthUrl($redirectUrl);
        }

    }
}