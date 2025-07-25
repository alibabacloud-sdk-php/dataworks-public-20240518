<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceGroupResponseBody\resourceGroup;

use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @description The number of resources in the resource group.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The number of compute units (CUs) in the resource group.
     *
     * @example 2CU
     *
     * @var string
     */
    public $standard;
    protected $_name = [
        'amount' => 'Amount',
        'standard' => 'Standard',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->standard) {
            $res['Standard'] = $this->standard;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Standard'])) {
            $model->standard = $map['Standard'];
        }

        return $model;
    }
}
