<?php

namespace GW2Treasures\GW2Api\V2\Endpoint\Map;

use GW2Treasures\GW2Api\V2\Bulk\BulkEndpoint;
use GW2Treasures\GW2Api\V2\Bulk\IBulkEndpoint;
use GW2Treasures\GW2Api\V2\Endpoint;
use GW2Treasures\GW2Api\V2\Localization\ILocalizedEndpoint;
use GW2Treasures\GW2Api\V2\Localization\LocalizedEndpoint;

class MapEndpoint extends Endpoint implements IBulkEndpoint, ILocalizedEndpoint {
    use BulkEndpoint, LocalizedEndpoint;

    /** @var bool $supportsIdsAll */
    protected $supportsIdsAll = false;

    /**
     * {@inheritdoc}
     */
    protected function url() {
        return 'v2/maps';
    }
}
