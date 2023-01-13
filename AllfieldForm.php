<?php

/**
 * @file
 * Contains \Drupal\student_registration\Form\RegistrationForm.
 */

namespace Drupal\student_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class MultiStepSingleForm extends FormBase
{
	public function getFormId()
	{
		return 'multi_step_form';
	}
  
  public function buildForm(array $form, FormStateInterface $form_state){}
  public function validateForm(array &$form, FormStateInterface $form_state){}
  public function submitForm(array &$form, FormStateInterface $form_state){}
  
}  
  
