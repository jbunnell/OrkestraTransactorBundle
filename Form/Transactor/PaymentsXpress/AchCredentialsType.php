<?php

/*
 * This file is part of OrkestraTransactorBundle.
 *
 * Copyright (c) Orkestra Community
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace Orkestra\Bundle\TransactorBundle\Form\Transactor\PaymentsXpress;

use Symfony\Component\Form\FormBuilderInterface;
use Orkestra\Bundle\TransactorBundle\Form\AbstractCredentialsType;

/**
 * Credentials form type for the Payments Xpress ACH Transactor
 */
class AchCredentialsType extends AbstractCredentialsType
{
    /**
     * Gets the internal type of the associated Transactor
     *
     * @return string
     */
    protected function getTransactorType()
    {
        return 'orkestra.payments_xpress.ach';
    }

    /**
     * @param \Symfony\Component\Form\FormBuilder $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('providerId', 'text', array('label' => 'Provider ID'))
            ->add('providerGateId', 'text', array('label' => 'Provider Gate ID'))
            ->add('providerGateKey', 'text', array('label' => 'Provider Gate Key'))
            ->add('merchantId', 'text', array('label' => 'Merchant ID'))
            ->add('merchantGateId', 'text', array('label' => 'Merchant Gate ID'))
            ->add('merchantGateKey', 'text', array('label' => 'Merchant Gate Key'));
    }
}
