<?php

namespace GW2Treasures\GW2Api\V2\Endpoint\Commerce;

use GW2Treasures\GW2Api\V2\Endpoint;

class ExchangeEndpoint extends Endpoint {

    /**
     * {@inheritdoc}
     */
    protected function url() {
        return 'v2/commerce/prices';
    }

    /**
     * Current gem to coins exchange rate.
     *
     * @param int $quantity gems
     * @return mixed
     */
    public function gems( $quantity ) {
        return $this->request([ 'quantity' => $quantity ], $this->url() . '/gems' )->json();
    }

    /**
     * Current coins to gems exchange rate.
     *
     * @param int $quantity coins
     * @return mixed
     */
    public function coins( $quantity ) {
        return $this->request([ 'quantity' => $quantity ], $this->url() . '/coins' )->json();
    }
}
