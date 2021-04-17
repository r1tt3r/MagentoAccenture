<?php

namespace GamaAcademy\SampleModule\Model;

class OptionModel implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            ['value' => 'option1', 'label' => __('Option1')],
            ['value' => 'option2', 'label' => __('Option2')],
        ];
    }
}
