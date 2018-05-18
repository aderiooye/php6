<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * User preferences form
 *
 * @package PhpMyAdmin
 */
declare(strict_types=1);

namespace PhpMyAdmin\Config\Forms\User;

use PhpMyAdmin\Config\Forms\BaseFormList;

/**
 * Class UserFormList
 * @package PhpMyAdmin\Config\Forms\User
 */
class UserFormList extends BaseFormList
{
    /**
     * @var array
     */
    protected static $all = array(
        'Features',
        'Sql',
        'Navi',
        'Main',
        'Import',
        'Export',
    );
    /**
     * @var string
     */
    protected static $ns = '\\PhpMyAdmin\\Config\\Forms\\User\\';
}
