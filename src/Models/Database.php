<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class Database extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $locationUri;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentMetaEntityId;
    protected $_name = [
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'locationUri' => 'LocationUri',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'parentMetaEntityId' => 'ParentMetaEntityId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->locationUri) {
            $res['LocationUri'] = $this->locationUri;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentMetaEntityId) {
            $res['ParentMetaEntityId'] = $this->parentMetaEntityId;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LocationUri'])) {
            $model->locationUri = $map['LocationUri'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentMetaEntityId'])) {
            $model->parentMetaEntityId = $map['ParentMetaEntityId'];
        }

        return $model;
    }
}
