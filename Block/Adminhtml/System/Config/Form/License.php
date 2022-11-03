<?php
/**
 * Copyright © Codilya Technologies. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Codilya\Core\Block\Adminhtml\System\Config\Form;

class License extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var \Codilya\Core\Helper\MainConfig
     */
    protected $mainConfig;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Codilya\Core\Helper\MainConfig $mainConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Codilya\Core\Helper\MainConfig $mainConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->mainConfig = $mainConfig;
    }

    /**
     * Render element value
     *
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    protected function _renderValue(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $html = '<td class="license_key">';
        $html .= $this->_getElementHtml($element);
        $module = $element->getHint()->getText();
        $product = $this->mainConfig->loadModule();
         
        if ($product == $module.' = 1') {
            $msg = implode('', array_map('ch'.'r', explode('.', '89.111.117.114.32.108.105.99.101.110.115.101.32.107.101.121.32.105.115.32.118.97.108.105.100.46')));
            $html .= '<span class="info_icon" ><img title="'.$msg.'" src="'.$this->getViewFileUrl('Codilya_Core::images/success_icon.gif').'" style="margin-top: 2px;float: right;" /></span>';
        } elseif($product == $module.' = 0') {
            $msg = implode('', array_map('ch'.'r', explode('.', '89.111.117.114.32.108.105.99.101.110.115.101.32.107.101.121.32.105.115.32.105.110.118.97.108.105.100.46')));
            $html .= '<span class="info_icon"><img title="'.$msg.'" src="'.$this->getViewFileUrl('Codilya_Core::images/error_icon.gif').'" style="margin-top: 2px;float: right;" /></span>';
            $html .= base64_decode('WW91IGNhbiBmaW5kIExpY2Vuc2UgS2V5IGluIHlvdXIgYWNjb3VudCBhdCA8YSBocmVmPSdodHRwOi8vc3RvcmUuY29kaWx5YS5jb20vZG93bmxvYWRhYmxlL2N1c3RvbWVyL3Byb2R1Y3RzLycgdGFyZ2V0PSdfYmxhbmsnIHN0eWxlPSd0ZXh0LWRlY29yYXRpb246bm9uZSc+Q29kaWx5YSBTdG9yZTwvYT4gKDxhIGhyZWY9J2h0dHA6Ly9zdG9yZS5jb2RpbHlhLmNvbScgdGFyZ2V0PSdfYmxhbmsnIHN0eWxlPSd0ZXh0LWRlY29yYXRpb246bm9uZSc+R2V0IGtleTwvYT4gZm9yIE1hZ2VudG8gbWFya2VycGxhY2Ugb3JkZXJzKS4=');
        }  

        $html .= '</td>';
        return $html;
    }

     
}
