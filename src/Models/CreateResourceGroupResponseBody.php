<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceGroupResponseBody\resourceGroupOrder;

class CreateResourceGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceGroupOrder
     */
    public $resourceGroupOrder;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceGroupOrder' => 'ResourceGroupOrder',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->resourceGroupOrder) {
            $this->resourceGroupOrder->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupOrder) {
            $res['ResourceGroupOrder'] = null !== $this->resourceGroupOrder ? $this->resourceGroupOrder->toArray($noStream) : $this->resourceGroupOrder;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupOrder'])) {
            $model->resourceGroupOrder = resourceGroupOrder::fromMap($map['ResourceGroupOrder']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
