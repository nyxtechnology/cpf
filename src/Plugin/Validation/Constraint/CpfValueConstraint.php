<?php

/**
 * @file
 * Contains \Drupal\cpf\Plugin\Validation\Constraint\CpfValueConstraint.
 */

namespace Drupal\cpf\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Drupal\cpf\Plugin\Validation\Constraint\CpfValueConstraintValidator;

/**
 * Supports validating CPF numbers.
 *
 * @Constraint(
 *   id = "CpfValue",
 *   label = @Translation("CPF Value", context = "Validation")
 * )
 */
class CpfValueConstraint extends Constraint {
  public $message = 'The CPF number %value is not valid';

  /**
   * {@inheritdoc}
   */
  public function validatedBy() {
    return '\Drupal\cpf\Plugin\Validation\Constraint\CpfValueConstraintValidator';
  }
}
