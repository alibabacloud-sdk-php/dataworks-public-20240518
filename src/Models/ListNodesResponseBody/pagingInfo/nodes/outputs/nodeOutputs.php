<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\outputs;

use AlibabaCloud\Tea\Model;

class nodeOutputs extends Model
{
    /**
     * @description 节点输出
     *
     * @example 860438872620113XXXX
     *
     * @var string
     */
    public $data;
    protected $_name = [
        'data' => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeOutputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}