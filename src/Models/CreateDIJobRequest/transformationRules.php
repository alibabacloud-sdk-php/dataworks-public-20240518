<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest;

use AlibabaCloud\Tea\Model;

class transformationRules extends Model
{
    /**
     * @example Rename
     *
     * @var string
     */
    public $ruleActionType;

    /**
     * @example {"expression":"${srcDatasoureName}_${srcDatabaseName}"}
     *
     * @var string
     */
    public $ruleExpression;

    /**
     * @example rename_rule_1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example Table
     *
     * @var string
     */
    public $ruleTargetType;
    protected $_name = [
        'ruleActionType' => 'RuleActionType',
        'ruleExpression' => 'RuleExpression',
        'ruleName'       => 'RuleName',
        'ruleTargetType' => 'RuleTargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleActionType) {
            $res['RuleActionType'] = $this->ruleActionType;
        }
        if (null !== $this->ruleExpression) {
            $res['RuleExpression'] = $this->ruleExpression;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleTargetType) {
            $res['RuleTargetType'] = $this->ruleTargetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transformationRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleActionType'])) {
            $model->ruleActionType = $map['RuleActionType'];
        }
        if (isset($map['RuleExpression'])) {
            $model->ruleExpression = $map['RuleExpression'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleTargetType'])) {
            $model->ruleTargetType = $map['RuleTargetType'];
        }

        return $model;
    }
}
