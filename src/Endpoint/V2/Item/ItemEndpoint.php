<?php

namespace GW2Treasures\GW2Api\Endpoint\V2\Item;

use GW2Treasures\GW2Api\Endpoint\BulkEndpoint;
use GW2Treasures\GW2Api\Endpoint\Endpoint;
use GW2Treasures\GW2Api\Endpoint\LocalizedEndpoint;

class ItemEndpoint extends Endpoint {
    use BulkEndpoint, LocalizedEndpoint;

    /** @var bool $supportsIdsAll */
    protected $supportsIdsAll = false;

    /**
     * {@inheritdoc}
     */
    protected function url() {
        return 'v2/items';
    }
}