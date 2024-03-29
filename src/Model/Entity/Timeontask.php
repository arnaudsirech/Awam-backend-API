<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Timeontask Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $created
 * @property int $timespent
 * @property int $task_id
 *
 * @property \App\Model\Entity\Task $task
 */
class Timeontask extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'created' => true,
        'timespent' => true,
        'task_id' => true,
        'task' => true
    ];
}
