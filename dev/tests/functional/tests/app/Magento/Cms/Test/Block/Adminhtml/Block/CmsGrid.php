<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Cms\Test\Block\Adminhtml\Block;

use Magento\Ui\Test\Block\Adminhtml\DataGrid;

/**
 * Adminhtml Cms Block management grid.
 */
class CmsGrid extends DataGrid
{
    /**
     * Filters array mapping.
     *
     * @var array
     */
    protected $filters = [
        'title' => [
            'selector' => '[name="params[filters][title]"]',
        ],
        'identifier' => [
            'selector' => '[name="params[filters][identifier]"]',
        ],
        'is_active' => [
            'selector' => '[name="params[filters][is_active]"]',
            'input' => 'select',
        ],
        'creation_time_from' => [
            'selector' => '[name="params[filters][creation_time][from]"]',
        ],
        'update_time_from' => [
            'selector' => '[name="params[filters][update_time][from]"]',
        ],
        'store_id' => [
            'selector' => '[name="params[filters][store_id]"]',
            'input' => 'selectstore'
        ],
    ];
}
