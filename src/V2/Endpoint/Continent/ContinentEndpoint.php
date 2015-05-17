<?php

namespace GW2Treasures\GW2Api\V2\Endpoint\Continent;

use GW2Treasures\GW2Api\V2\BulkEndpoint;
use GW2Treasures\GW2Api\V2\Endpoint;
use GW2Treasures\GW2Api\V2\Interfaces\IBulkEndpoint;
use GW2Treasures\GW2Api\V2\Interfaces\ILocalizedEndpoint;
use GW2Treasures\GW2Api\V2\LocalizedEndpoint;

class ContinentEndpoint extends Endpoint implements IBulkEndpoint, ILocalizedEndpoint {
    use BulkEndpoint, LocalizedEndpoint;

    /**
     * {@inheritdoc}
     */
    protected function url() {
        return 'v2/continent';
    }
}
