<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponseBody\pagingInfo\alertRules\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class instanceErrorPercentage extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $percentage;
    protected $_name = [
        'percentage' => 'Percentage',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceErrorPercentage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        return $model;
    }
}
