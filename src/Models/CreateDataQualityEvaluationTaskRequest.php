<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\dataQualityRules;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\hooks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\notifications;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\target;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\trigger;

class CreateDataQualityEvaluationTaskRequest extends Model
{
    /**
     * @var dataQualityRules[]
     */
    public $dataQualityRules;
    /**
     * @var int
     */
    public $dataSourceId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var hooks[]
     */
    public $hooks;
    /**
     * @var string
     */
    public $name;
    /**
     * @var notifications
     */
    public $notifications;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $runtimeConf;
    /**
     * @var target
     */
    public $target;
    /**
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'dataQualityRules' => 'DataQualityRules',
        'dataSourceId'     => 'DataSourceId',
        'description'      => 'Description',
        'hooks'            => 'Hooks',
        'name'             => 'Name',
        'notifications'    => 'Notifications',
        'projectId'        => 'ProjectId',
        'runtimeConf'      => 'RuntimeConf',
        'target'           => 'Target',
        'trigger'          => 'Trigger',
    ];

    public function validate()
    {
        if (\is_array($this->dataQualityRules)) {
            Model::validateArray($this->dataQualityRules);
        }
        if (\is_array($this->hooks)) {
            Model::validateArray($this->hooks);
        }
        if (null !== $this->notifications) {
            $this->notifications->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        if (null !== $this->trigger) {
            $this->trigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityRules) {
            if (\is_array($this->dataQualityRules)) {
                $res['DataQualityRules'] = [];
                $n1                      = 0;
                foreach ($this->dataQualityRules as $item1) {
                    $res['DataQualityRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hooks) {
            if (\is_array($this->hooks)) {
                $res['Hooks'] = [];
                $n1           = 0;
                foreach ($this->hooks as $item1) {
                    $res['Hooks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notifications) {
            $res['Notifications'] = null !== $this->notifications ? $this->notifications->toArray($noStream) : $this->notifications;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->runtimeConf) {
            $res['RuntimeConf'] = $this->runtimeConf;
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
        }

        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toArray($noStream) : $this->trigger;
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
        if (isset($map['DataQualityRules'])) {
            if (!empty($map['DataQualityRules'])) {
                $model->dataQualityRules = [];
                $n1                      = 0;
                foreach ($map['DataQualityRules'] as $item1) {
                    $model->dataQualityRules[$n1++] = dataQualityRules::fromMap($item1);
                }
            }
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Hooks'])) {
            if (!empty($map['Hooks'])) {
                $model->hooks = [];
                $n1           = 0;
                foreach ($map['Hooks'] as $item1) {
                    $model->hooks[$n1++] = hooks::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Notifications'])) {
            $model->notifications = notifications::fromMap($map['Notifications']);
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RuntimeConf'])) {
            $model->runtimeConf = $map['RuntimeConf'];
        }

        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
