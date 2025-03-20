<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class TagDataAssetsShrinkRequest extends Model
{
    /**
     * @description Specifies whether to enable lineage-based automatic backtracking.
     *
     * @example false
     *
     * @var bool
     */
    public $autoTraceEnabled;

    /**
     * @description The data asset IDs.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $dataAssetIdsShrink;

    /**
     * @description The type of the data asset. Valid values:
     *
     *   ACS::DataWorks::Table
     *   ACS::DataWorks::Task
     *
     * This parameter is required.
     *
     * @example ACS::DataWorks::Task
     *
     * @var string
     */
    public $dataAssetType;

    /**
     * @description The environment of the workspace to which the data asset belongs. Valid values:
     *
     *   Dev: development environment
     *   Prod: production environment
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The tags that you want to add to data assets.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'autoTraceEnabled' => 'AutoTraceEnabled',
        'dataAssetIdsShrink' => 'DataAssetIds',
        'dataAssetType' => 'DataAssetType',
        'envType' => 'EnvType',
        'projectId' => 'ProjectId',
        'tagsShrink' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoTraceEnabled) {
            $res['AutoTraceEnabled'] = $this->autoTraceEnabled;
        }
        if (null !== $this->dataAssetIdsShrink) {
            $res['DataAssetIds'] = $this->dataAssetIdsShrink;
        }
        if (null !== $this->dataAssetType) {
            $res['DataAssetType'] = $this->dataAssetType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagDataAssetsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoTraceEnabled'])) {
            $model->autoTraceEnabled = $map['AutoTraceEnabled'];
        }
        if (isset($map['DataAssetIds'])) {
            $model->dataAssetIdsShrink = $map['DataAssetIds'];
        }
        if (isset($map['DataAssetType'])) {
            $model->dataAssetType = $map['DataAssetType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
