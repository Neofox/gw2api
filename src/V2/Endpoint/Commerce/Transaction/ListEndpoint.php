<?php

namespace GW2Treasures\GW2Api\V2\Endpoint\Commerce\Transaction;

use GW2Treasures\GW2Api\GW2Api;
use GW2Treasures\GW2Api\V2\Authentication\AuthenticatedEndpoint;
use GW2Treasures\GW2Api\V2\Pagination\IPaginatedEndpoint;
use GW2Treasures\GW2Api\V2\Pagination\PaginatedEndpoint;
use InvalidArgumentException;

class ListEndpoint extends AuthenticatedEndpoint implements IPaginatedEndpoint {
    use PaginatedEndpoint;

    protected static $types = [ 'current', 'history' ];
    protected static $lists = [ 'buys', 'sells' ];

    /** @var string $type */
    protected $type;

    /** @var string $list */
    protected $list;

    public function __construct( GW2Api $api, $apiKey, $type, $list ) {
        if( !in_array( $type, self::$types )) {
            throw new InvalidArgumentException(
                'Invalid $type ("' . $type . '""), has to be one of: ' . implode(', ', self::$types)
            );
        }

        if( !in_array( $list, self::$lists )) {
            throw new InvalidArgumentException(
                'Invalid $list ("' . $list . '""), has to be one of: ' . implode(', ', self::$lists)
            );
        }

        $this->type = $type;
        $this->list = $list;

        parent::__construct( $api, $apiKey );
    }

    /**
     * {@inheritdoc}
     */
    protected function url() {
        return 'v2/commerce/transactions/' . $this->type . '/' . $this->list;
    }
}
