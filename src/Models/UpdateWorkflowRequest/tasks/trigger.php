<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks;

use AlibabaCloud\Dara\Model;

class trigger extends Model
{
    /**
     * @var string
     */
    public $recurrence;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'recurrence' => 'Recurrence',
        'type'       => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recurrence) {
            $res['Recurrence'] = $this->recurrence;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Recurrence'])) {
            $model->recurrence = $map['Recurrence'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}