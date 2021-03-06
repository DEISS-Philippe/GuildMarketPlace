<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TradeRequest extends Model
{
    const STATE_DONE = 'done';
    const STATE_REMOVED = 'removed';
    const STATE_ON_GOING = 'ongoing';

    const TRADE_TYPE_OFFER = 'offer';
    const TRADE_TYPE_DEMAND = 'demand';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->state = $this::STATE_ON_GOING;
    }

    public function tradeObjects()
    {
        return $this->hasMany(TradeObject::class);
    }
}
