<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\periods;

use AlibabaCloud\Tea\Model;

class bizDates extends Model
{
    /**
     * @description The data timestamp at which data is no longer backfilled. Configure this parameter in the `yyyy-mm-dd` format.
     *
     * This parameter is required.
     *
     * @example 2024-11-24
     *
     * @var string
     */
    public $endBizDate;

    /**
     * @description The data timestamp at which the data starts to be backfilled. Configure this parameter in the `yyyy-mm-dd` format.
     *
     * This parameter is required.
     *
     * @example 2024-11-20
     *
     * @var string
     */
    public $startBizDate;
    protected $_name = [
        'endBizDate' => 'EndBizDate',
        'startBizDate' => 'StartBizDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
        }
        if (null !== $this->startBizDate) {
            $res['StartBizDate'] = $this->startBizDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizDates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
        }
        if (isset($map['StartBizDate'])) {
            $model->startBizDate = $map['StartBizDate'];
        }

        return $model;
    }
}
