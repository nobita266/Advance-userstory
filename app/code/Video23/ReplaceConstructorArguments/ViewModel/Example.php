<?php

namespace Video23\ReplaceConstructorArguments\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Video23\ReplaceConstructorArguments\Model\DefaultName;

class Example implements ArgumentInterface{
    protected DefaultName $defaultName;

    public function __construct(DefaultName $defaultName){
        $this->defaultName = $defaultName;
    }
    public function getName(): string {
        return $this->defaultName->getName();



    }
}