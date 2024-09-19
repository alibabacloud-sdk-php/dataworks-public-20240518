<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class AbolishDeploymentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1606087c-9ac4-43f0-83a8-0b5ced21XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example 10000
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'id'        => 'Id',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AbolishDeploymentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}