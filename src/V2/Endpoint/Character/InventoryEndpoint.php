<?php

namespace GW2Treasures\GW2Api\V2\Endpoint\Character;

use GW2Treasures\GW2Api\GW2Api;
use GW2Treasures\GW2Api\V2\Authentication\AuthenticatedEndpoint;
use GW2Treasures\GW2Api\V2\Authentication\IAuthenticatedEndpoint;
use GW2Treasures\GW2Api\V2\Endpoint;

class InventoryEndpoint extends Endpoint implements IAuthenticatedEndpoint {
    use AuthenticatedEndpoint;

    protected $character;

    public function __construct( GW2Api $api, $apiKey, $character ) {
        parent::__construct( $api );

        $this->apiKey = $apiKey;
        $this->character = $character;
    }

    /**
     * {@inheritdoc}
     */
    protected function url() {
        return 'v2/characters/' . rawurlencode( $this->character ) . '/inventory';
    }

    /**
     * @return array
     */
    public function get() {
        return $this->request()->json()->bags;
    }
}
