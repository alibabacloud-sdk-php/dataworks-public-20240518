<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\dependencies;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\script;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\trigger;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The baseline ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $baseLineId;

    /**
     * @description The unique code of the client. This parameter is used to create a task asynchronously and implement the idempotence of the task. If you do not specify this parameter when you create the workflow, the system automatically generates a unique code. The unique code is uniquely associated with the workflow ID. If you specify this parameter when you update or delete the workflow, the value of this parameter must be the unique code that is used to create the workflow.
     *
     * @example Task_0bc5213917368545132902xxxxxxxx
     *
     * @var string
     */
    public $clientUniqueCode;

    /**
     * @description The information about the associated data source.
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description The dependency information.
     *
     * @var dependencies[]
     */
    public $dependencies;

    /**
     * @description The description.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The environment of the workspace. Valid values:
     *
     *   Prod
     *   Dev
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The task ID. If you configure this parameter, full update is performed on the task. If you do not configure this parameter, another task is created.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The input information.
     *
     * @var inputs
     */
    public $inputs;

    /**
     * @description The name of the task.
     *
     * This parameter is required.
     *
     * @example SQL node
     *
     * @var string
     */
    public $name;

    /**
     * @description The output information.
     *
     * @var outputs
     */
    public $outputs;

    /**
     * @description The account ID of the owner.
     *
     * This parameter is required.
     *
     * @example 1000
     *
     * @var string
     */
    public $owner;

    /**
     * @description The rerun interval. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $rerunInterval;

    /**
     * @description The rerun mode. Valid values:
     *
     *   AllDenied: The task cannot be rerun regardless of whether the task is successfully run or fails to run.
     *   FailureAllowed: The task can be rerun only after it fails to run.
     *   AllAllowed: The task can be rerun regardless of whether the task is successfully run or fails to run.
     *
     * This parameter is required.
     *
     * @example AllAllowed
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description The number of times that the task is rerun. This parameter takes effect only if the RerunMode parameter is set to AllAllowed or FailureAllowed.
     *
     * @example 3
     *
     * @var int
     */
    public $rerunTimes;

    /**
     * @description The configurations of the runtime environment, such as the resource group information.
     *
     * This parameter is required.
     *
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @description The script information.
     *
     * @var script
     */
    public $script;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The timeout period of task running. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The trigger method.
     *
     * This parameter is required.
     *
     * @var trigger
     */
    public $trigger;

    /**
     * @description The type of the task.
     *
     * This parameter is required.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'baseLineId' => 'BaseLineId',
        'clientUniqueCode' => 'ClientUniqueCode',
        'dataSource' => 'DataSource',
        'dependencies' => 'Dependencies',
        'description' => 'Description',
        'envType' => 'EnvType',
        'id' => 'Id',
        'inputs' => 'Inputs',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'owner' => 'Owner',
        'rerunInterval' => 'RerunInterval',
        'rerunMode' => 'RerunMode',
        'rerunTimes' => 'RerunTimes',
        'runtimeResource' => 'RuntimeResource',
        'script' => 'Script',
        'tags' => 'Tags',
        'timeout' => 'Timeout',
        'trigger' => 'Trigger',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseLineId) {
            $res['BaseLineId'] = $this->baseLineId;
        }
        if (null !== $this->clientUniqueCode) {
            $res['ClientUniqueCode'] = $this->clientUniqueCode;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
        }
        if (null !== $this->dependencies) {
            $res['Dependencies'] = [];
            if (null !== $this->dependencies && \is_array($this->dependencies)) {
                $n = 0;
                foreach ($this->dependencies as $item) {
                    $res['Dependencies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = null !== $this->outputs ? $this->outputs->toMap() : null;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->rerunInterval) {
            $res['RerunInterval'] = $this->rerunInterval;
        }
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->rerunTimes) {
            $res['RerunTimes'] = $this->rerunTimes;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toMap() : null;
        }
        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseLineId'])) {
            $model->baseLineId = $map['BaseLineId'];
        }
        if (isset($map['ClientUniqueCode'])) {
            $model->clientUniqueCode = $map['ClientUniqueCode'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }
        if (isset($map['Dependencies'])) {
            if (!empty($map['Dependencies'])) {
                $model->dependencies = [];
                $n = 0;
                foreach ($map['Dependencies'] as $item) {
                    $model->dependencies[$n++] = null !== $item ? dependencies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = outputs::fromMap($map['Outputs']);
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['RerunInterval'])) {
            $model->rerunInterval = $map['RerunInterval'];
        }
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['RerunTimes'])) {
            $model->rerunTimes = $map['RerunTimes'];
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }
        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
