<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class instanceTransferFluctuate extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $percentage;

    /**
     * @example abs
     *
     * @var string
     */
    public $trend;
    protected $_name = [
        'percentage' => 'Percentage',
        'trend'      => 'Trend',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTransferFluctuate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }

        return $model;
    }
}
