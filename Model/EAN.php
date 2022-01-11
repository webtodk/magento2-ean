<?php
/**
 * Copyright © 2017 Webto ApS. All rights reserved.
 * https://www.webto.dk - info@webto.dk
 * See LICENSE.txt for license details (http://opensource.org/licenses/osl-3.0.php).
 */
namespace Webto\EAN\Model;

/**
 * Pay In Store payment method model
 */
class EAN extends \Magento\Payment\Model\Method\AbstractMethod
{

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'ean';

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;
	
    /**
     * @var string
     */
    protected $_infoBlockType = 'Webto\EAN\Block\Info\Ean';
	
	/**
     * Assign data to info model instance
     *
     * @param \Magento\Framework\DataObject|mixed $data
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function assignData(\Magento\Framework\DataObject $data)
    {
        parent::assignData($data);

        $additionalData = $data->getData(\Magento\Quote\Api\Data\PaymentInterface::KEY_ADDITIONAL_DATA);

        if (!is_array($additionalData)) {
            return $this;
        }

        $info = $this->getInfoInstance();
        $info->setAdditionalInformation('ean_number', $additionalData['ean_number'] ?? '');
	$info->setAdditionalInformation('ean_ref', $additionalData['ean_ref'] ?? '');
	$info->setAdditionalInformation('ean_rekv', $additionalData['ean_rekv'] ?? '');
	$info->setAdditionalInformation('ean_company', $additionalData['ean_company'] ?? '');

        return $this;
    }
}
