<?php

namespace GW2Treasures\GW2Api\V2\Endpoint\Pet;

use GW2Treasures\GW2Api\V2\Bulk\BulkEndpoint;
use GW2Treasures\GW2Api\V2\Bulk\IBulkEndpoint;
use GW2Treasures\GW2Api\V2\Endpoint;
use GW2Treasures\GW2Api\V2\Localization\ILocalizedEndpoint;
use GW2Treasures\GW2Api\V2\Localization\LocalizedEndpoint;

class PetEndpoint extends Endpoint implements IBulkEndpoint, ILocalizedEndpoint {
    use BulkEndpoint, LocalizedEndpoint;

    /**
     * @inheritdoc
     */
    public function url() {
        return 'v2/pets';
    }
}