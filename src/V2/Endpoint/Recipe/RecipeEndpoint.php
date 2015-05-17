<?php

namespace GW2Treasures\GW2Api\V2\Endpoint\Recipe;

use GW2Treasures\GW2Api\V2\BulkEndpoint;
use GW2Treasures\GW2Api\V2\Endpoint;
use GW2Treasures\GW2Api\V2\Interfaces\IBulkEndpoint;

class RecipeEndpoint extends Endpoint implements IBulkEndpoint {
    use BulkEndpoint;

    /** @var bool $supportsIdsAll */
    protected $supportsIdsAll = false;

    /**
     * {@inheritdoc}
     */
    protected function url() {
        return 'v2/recipes';
    }

    /**
     * @return SearchEndpoint
     */
    public function search() {
        return new SearchEndpoint( $this->client );
    }
}