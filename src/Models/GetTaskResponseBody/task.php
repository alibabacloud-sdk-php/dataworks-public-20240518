<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\dependencies;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\script;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\subTasks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\trigger;
use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1000
     *
     * @var string
     */
    public $createUser;

    /**
     * @var dataSource
     */
    public $dataSource;

    /**
     * @var dependencies[]
     */
    public $dependencies;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @var inputs
     */
    public $inputs;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example 1000
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @var string
     */
    public $name;

    /**
     * @var outputs
     */
    public $outputs;

    /**
     * @example 1000
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example Prod
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 60
     *
     * @var int
     */
    public $rerunInterval;

    /**
     * @example AllAllowed
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @example 3
     *
     * @var int
     */
    public $rerunTimes;

    /**
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @var script
     */
    public $script;

    /**
     * @var subTasks
     */
    public $subTasks;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 1
     *
     * @var int
     */
    public $tenantId;

    /**
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @var trigger
     */
    public $trigger;

    /**
     * @example ODPS_SQL
     *
     * @var string
     */
    public $type;

    /**
     * @example 1234
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'baselineId'      => 'BaselineId',
        'createTime'      => 'CreateTime',
        'createUser'      => 'CreateUser',
        'dataSource'      => 'DataSource',
        'dependencies'    => 'Dependencies',
        'description'     => 'Description',
        'id'              => 'Id',
        'inputs'          => 'Inputs',
        'modifyTime'      => 'ModifyTime',
        'modifyUser'      => 'ModifyUser',
        'name'            => 'Name',
        'outputs'         => 'Outputs',
        'owner'           => 'Owner',
        'priority'        => 'Priority',
        'projectEnv'      => 'ProjectEnv',
        'projectId'       => 'ProjectId',
        'rerunInterval'   => 'RerunInterval',
        'rerunMode'       => 'RerunMode',
        'rerunTimes'      => 'RerunTimes',
        'runtimeResource' => 'RuntimeResource',
        'script'          => 'Script',
        'subTasks'        => 'SubTasks',
        'tags'            => 'Tags',
        'tenantId'        => 'TenantId',
        'timeout'         => 'Timeout',
        'trigger'         => 'Trigger',
        'type'            => 'Type',
        'workflowId'      => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toMap() : null;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
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
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (null !== $this->subTasks) {
            $res['SubTasks'] = null !== $this->subTasks ? $this->subTasks->toMap() : null;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }
        if (isset($map['Dependencies'])) {
            if (!empty($map['Dependencies'])) {
                $model->dependencies = [];
                $n                   = 0;
                foreach ($map['Dependencies'] as $item) {
                    $model->dependencies[$n++] = null !== $item ? dependencies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
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
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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
        if (isset($map['SubTasks'])) {
            $model->subTasks = subTasks::fromMap($map['SubTasks']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
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
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}