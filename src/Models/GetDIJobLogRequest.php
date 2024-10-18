<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetDIJobLogRequest extends Model
{
    /**
     * @description The ID of the synchronization task.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The failover ID.
     *
     * @example 10
     *
     * @var int
     */
    public $failoverId;

    /**
     * @description The instance ID.
     *
     * @example 6153616438
     *
     * @var int
     */
    public $instanceId;
    protected $_name = [
        'DIJobId'    => 'DIJobId',
        'failoverId' => 'FailoverId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->failoverId) {
            $res['FailoverId'] = $this->failoverId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDIJobLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['FailoverId'])) {
            $model->failoverId = $map['FailoverId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}