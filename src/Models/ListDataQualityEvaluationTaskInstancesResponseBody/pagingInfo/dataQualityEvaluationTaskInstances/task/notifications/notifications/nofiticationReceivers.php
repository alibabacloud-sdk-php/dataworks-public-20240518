<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task\notifications\notifications;

use AlibabaCloud\Dara\Model;

class nofiticationReceivers extends Model
{
    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $receiverType;

    /**
     * @var string[]
     */
    public $receiverValues;
    protected $_name = [
        'extension' => 'Extension',
        'receiverType' => 'ReceiverType',
        'receiverValues' => 'ReceiverValues',
    ];

    public function validate()
    {
        if (\is_array($this->receiverValues)) {
            Model::validateArray($this->receiverValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->receiverType) {
            $res['ReceiverType'] = $this->receiverType;
        }

        if (null !== $this->receiverValues) {
            if (\is_array($this->receiverValues)) {
                $res['ReceiverValues'] = [];
                $n1 = 0;
                foreach ($this->receiverValues as $item1) {
                    $res['ReceiverValues'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['ReceiverType'])) {
            $model->receiverType = $map['ReceiverType'];
        }

        if (isset($map['ReceiverValues'])) {
            if (!empty($map['ReceiverValues'])) {
                $model->receiverValues = [];
                $n1 = 0;
                foreach ($map['ReceiverValues'] as $item1) {
                    $model->receiverValues[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
