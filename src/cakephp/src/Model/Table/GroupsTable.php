<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * Group Entity
 *
 * @package     app
 * @subpackage  Model.Entity
 * @since       2018/08/15
 * @author      Ronie Vincent Horca <ronievincent.gss@gmail.com>
 */
class GroupsTable extends Table
{
	/**
     * initialize
     *
     * @param  array $config
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('groups');
        $this->displayField('label');
        $this->addBehavior('Acl.Acl', ['type' => 'requester']);
        $this->addBehavior('Timestamp');

        $this->hasMany('Users');
    }
}