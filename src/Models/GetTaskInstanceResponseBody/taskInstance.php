<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\runtime;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\script;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance\tags;
use AlibabaCloud\Tea\Model;

class taskInstance extends Model
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
    public $bizdate;

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
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $finishedTime;

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
     * @example AllAllowed
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @example 1
     *
     * @var int
     */
    public $runNumber;

    /**
     * @var runtime
     */
    public $runtime;

    /**
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @var script
     */
    public $script;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $startedTime;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 1234
     *
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @example ODPS_SQL
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 1
     *
     * @var int
     */
    public $tenantId;

    /**
     * @example 1
     *
     * @var int
     */
    public $timeout;

    /**
     * @example Normal
     *
     * @var string
     */
    public $triggerRecurrence;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $triggerTime;

    /**
     * @example Scheduler
     *
     * @var string
     */
    public $triggerType;

    /**
     * @example 1234
     *
     * @var int
     */
    public $workflowId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @example Normal
     *
     * @var string
     */
    public $workflowInstanceType;

    /**
     * @var string
     */
    public $workflowName;
    protected $_name = [
        'baselineId'           => 'BaselineId',
        'bizdate'              => 'Bizdate',
        'createTime'           => 'CreateTime',
        'createUser'           => 'CreateUser',
        'dataSource'           => 'DataSource',
        'description'          => 'Description',
        'finishedTime'         => 'FinishedTime',
        'id'                   => 'Id',
        'inputs'               => 'Inputs',
        'modifyTime'           => 'ModifyTime',
        'modifyUser'           => 'ModifyUser',
        'outputs'              => 'Outputs',
        'owner'                => 'Owner',
        'priority'             => 'Priority',
        'projectEnv'           => 'ProjectEnv',
        'projectId'            => 'ProjectId',
        'rerunMode'            => 'RerunMode',
        'runNumber'            => 'RunNumber',
        'runtime'              => 'Runtime',
        'runtimeResource'      => 'RuntimeResource',
        'script'               => 'Script',
        'startedTime'          => 'StartedTime',
        'status'               => 'Status',
        'tags'                 => 'Tags',
        'taskId'               => 'TaskId',
        'taskName'             => 'TaskName',
        'taskType'             => 'TaskType',
        'tenantId'             => 'TenantId',
        'timeout'              => 'Timeout',
        'triggerRecurrence'    => 'TriggerRecurrence',
        'triggerTime'          => 'TriggerTime',
        'triggerType'          => 'TriggerType',
        'workflowId'           => 'WorkflowId',
        'workflowInstanceId'   => 'WorkflowInstanceId',
        'workflowInstanceType' => 'WorkflowInstanceType',
        'workflowName'         => 'WorkflowName',
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
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
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
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->runNumber) {
            $res['RunNumber'] = $this->runNumber;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toMap() : null;
        }
        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toMap() : null;
        }
        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->triggerRecurrence) {
            $res['TriggerRecurrence'] = $this->triggerRecurrence;
        }
        if (null !== $this->triggerTime) {
            $res['TriggerTime'] = $this->triggerTime;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }
        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }
        if (null !== $this->workflowInstanceType) {
            $res['WorkflowInstanceType'] = $this->workflowInstanceType;
        }
        if (null !== $this->workflowName) {
            $res['WorkflowName'] = $this->workflowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
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
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['RunNumber'])) {
            $model->runNumber = $map['RunNumber'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = runtime::fromMap($map['Runtime']);
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }
        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }
        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['TriggerRecurrence'])) {
            $model->triggerRecurrence = $map['TriggerRecurrence'];
        }
        if (isset($map['TriggerTime'])) {
            $model->triggerTime = $map['TriggerTime'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }
        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }
        if (isset($map['WorkflowInstanceType'])) {
            $model->workflowInstanceType = $map['WorkflowInstanceType'];
        }
        if (isset($map['WorkflowName'])) {
            $model->workflowName = $map['WorkflowName'];
        }

        return $model;
    }
}
