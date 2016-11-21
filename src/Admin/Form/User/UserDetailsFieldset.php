<?php
/**
 * @copyright: DotKernel
 * @package: dotkernel/dot-admin
 * @author: n3vrax
 * Date: 11/20/2016
 * Time: 4:54 AM
 */

namespace Dot\Admin\Form\User;

use Zend\Form\Fieldset;

/**
 * Class UserDetailsFieldset
 * @package Dot\Admin\Form\User
 */
class UserDetailsFieldset extends Fieldset
{
    /**
     * UserDetailsFieldset constructor.
     * @param string $name
     * @param array $options
     */
    public function __construct($name = 'user_details_fieldset', array $options = [])
    {
        parent::__construct($name, $options);
    }
    public function init()
    {
        $this->add([
            'type' => 'text',
            'name' => 'firstName',
            'options' => [
                'label' => 'First Name',
            ],
            'attributes' => [
                'placeholder' => 'First Name'
            ]
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'lastName',
            'options' => [
                'label' => 'Last Name'
            ],
            'attributes' => [
                'placeholder' => 'Last Name'
            ]
        ]);
    }
}