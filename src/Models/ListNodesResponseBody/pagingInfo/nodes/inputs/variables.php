<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\inputs;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\inputs\variables\node;
use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @description 制品类型
     *
     * @example Variable
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description 变量id
     *
     * @example 543211286945488XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description 变量名
     *
     * @example input
     *
     * @var string
     */
    public $name;

    /**
     * @description 变量所属节点
     *
     * @var node
     */
    public $node;

    /**
     * @description 范围
     *
     * @example NodeParameter
     *
     * @var string
     */
    public $scope;

    /**
     * @description 类型
     *
     * @example Constant
     *
     * @var string
     */
    public $type;

    /**
     * @description 变量值
     *
     * @example 222
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'artifactType' => 'ArtifactType',
        'id'           => 'Id',
        'name'         => 'Name',
        'node'         => 'Node',
        'scope'        => 'Scope',
        'type'         => 'Type',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->node) {
            $res['Node'] = null !== $this->node ? $this->node->toMap() : null;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Node'])) {
            $model->node = node::fromMap($map['Node']);
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}