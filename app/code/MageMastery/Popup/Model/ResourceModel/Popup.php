<?php
namespace MageMastery\Popup\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

//this class helps  to connect database and provide data to to our pupup entity

class popup extends AbstractDb
{
    private const TABLE_NAME = 'magemastery_popup';
    private const FIELD_NAME = 'popup_id';
    protected function _construct(
    ) {
        $this->_init(mainTable: self::TABLE_NAME, idFieldName: self::FIELD_NAME);
    }


}