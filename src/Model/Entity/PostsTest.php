<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PostsTest Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $doby
 * @property bool $published
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class PostsTest extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'title' => true,
        'description' => true,
        'doby' => true,
        'published' => true,
        'created' => true,
        'modified' => true,
    ];
}
