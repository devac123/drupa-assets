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
	protected $step = 1;
	protected $totel_step = 20;
	protected $storage = [];

	public function getFormId()
	{
		return 'multi_step_form';
	}
	public function buildForm(array $form, FormStateInterface $form_state)
	{
		$form['#theme'] = 'manage_cmodule';
		$form['#prefix'] = '<div id="ajax_form_multistep_form">';
		$form['#suffix'] = '</div>';
		if ($this->step == 1) {
			$form['message-step'] = [
				'#markup' => '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];
			$form['message-title'] = [
				'#markup' => "<div> Select the word that most describes you and the word that least describes you. Once you complete the DISC test below, you'll be able to see your DISC type results.</div>",
			];
                              
			$options = array(
				'restrained' => $this->t('restrained'),
				'decisive' => $this->t('decisive'),
				'chatty' => $this->t('chatty'),
				'traditional' => $this->t('traditional'),
			);
                         
			$form['most'] = array(
				'#type' => 'radios',
				'#options' => $options,
				'#title' => $this->t('Most'),
				'#description' => $this->t(' '),
				'#attributes' => array('class' => array('my-class-1')),
				'#prefix' => '<div class = "custom-field-wrapper">',
				'#sufix' => '</div>'
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#attributes' => array('class' => array('my-class-1')),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}

		if ($this->step == 2) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'fearless' => $this->t('fearless'),
				'inspiring' => $this->t('inspiring'),
				'supporting' => $this->t('supporting'),
				'reserved' => $this->t('reserved'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
				
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 3) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'excitable' => $this->t('excitable'),
				'firm' => $this->t('firm'),
				'obedient' => $this->t('obedient'),
				'critical' => $this->t('critical'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
				
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#default_value' => $options['excitable'],
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 4) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'agreeable' => $this->t('agreeable'),
				'hesitant' => $this->t('hesitant'),
				'extroverted' => $this->t('extroverted'),
				'blunt' => $this->t('blunt'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
				
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#default_value' => $options['agreeable'],
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 5) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'calm' => $this->t('calm'),
				'outspoken' => $this->t('outspoken'),
				'precise' => $this->t('precise'),
				'sociable' => $this->t('sociable'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
				
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 6) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'light-hearted' => $this->t('light-hearted'),
				'soft-spoken' => $this->t('soft-spoken'),
				'systematic' => $this->t('systematic'),
				'persuasive' => $this->t('persuasive'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 7) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'dominant' => $this->t('dominant'),
				'expressive' => $this->t('expressive'),
				'accepting' => $this->t('accepting'),
				'meticulous' => $this->t('meticulous'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 8) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'entertaining' => $this->t('entertaining'),
				'modest' => $this->t('modest'),
				'serious' => $this->t('serious'),
				'restless' => $this->t('restless'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 9) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'forceful' => $this->t('forceful'),
				'private' => $this->t('private'),
				'accommodating' => $this->t('accommodating'),
				'magnetic' => $this->t('magnetic'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 10) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'independent' => $this->t('independent'),
				'analytical' => $this->t('analytical'),
				'kind' => $this->t('kind'),
				'dynamic' => $this->t('dynamic'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 11) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'prudent' => $this->t('prudent'),
				'compassionate' => $this->t('compassionate'),
				'competitive' => $this->t('competitive'),
				'cheerful' => $this->t('cheerful'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 12) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'even-tempered' => $this->t('even-tempered'),
				'stubborn' => $this->t('stubborn'),
				'introverted' => $this->t('introverted'),
				'charming' => $this->t('charming'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 13) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'detail-oriented' => $this->t('detail-oriented'),
				'impatient' => $this->t('impatient'),
				'lenient' => $this->t('lenient'),
				'lively' => $this->t('lively'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#default_value' => $options['agreeable'],
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 14) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'straight-shooter' => $this->t('straight-shooter'),
				'objective' => $this->t('objective'),
				'disciplined' => $this->t('disciplined'),
				'tough' => $this->t('tough'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#default_value' => $options['agreeable'],
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 15) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'open' => $this->t('open'),
				'gentle' => $this->t('gentle'),
				'disciplined' => $this->t('disciplined'),
				'tough' => $this->t('tough'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 16) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'warm' => $this->t('warm'),
				'methodical' => $this->t('methodical'),
				'enthusiastic' => $this->t('enthusiastic'),
				'vigorous' => $this->t('vigorous'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 17) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'intense' => $this->t('intense'),
				'perfectionist' => $this->t('perfectionist'),
				'enthusiastic' => $this->t('enthusiastic'),
				'sympathetic' => $this->t('sympathetic'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 18) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'direct' => $this->t('direct'),
				'accurate' => $this->t('accurate'),
				'joyful' => $this->t('joyful'),
				'practical' => $this->t('practical'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		if ($this->step == 19) {
			$form['message-step'] = [
				'#markup' =>  '<div class="step"> Step ' . $this->step . ' of ' . $this->totel_step . '</div>',
			];

			$options = array(
				'persistent' => $this->t('persistent'),
				'cautious' => $this->t('cautious'),
				'helpful' => $this->t('helpful'),
				'optimistic' => $this->t('optimistic'),
			);

			$form['most'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Most'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);

			$form['least'] = array(
				'#type' => 'radios',
				'#title' => $this->t('Least'),
				'#options' => $options,
				'#description' => $this->t(' '),
			);
		}
		

		if ($this->step == $this->totel_step ) {
			$form['message-step'] = [
				'#markup' => '<p class="complete">' . $this->t('- Complete -') . '</p>',
			];
		}

		if ($this->step != $this->totel_step) {
			$form['buttons']['forward'] = array(
				'#type' => 'submit',
				'#value' => $this->t('Next'),
				'#prefix' => '<div class="step1-button">',
				'#suffix' => '</div>',
				'#ajax' => array(
					'wrapper' => 'ajax_form_multistep_form',
					'callback' => '::ajax_form_multistep_form_ajax_callback',
					'event' => 'click',
				),
			);
		} else {
			$form['buttons']['forward'] = array(
				'#type' => 'submit',
				'#value' => $this->t('Submit'),
				'#ajax' => array(
					'wrapper' => 'ajax_form_multistep_form',
					'callback' => '::ajax_form_multistep_form_ajax_callback',
					'event' => 'click',
				),
			);
		}
		$form['#attached']['library'][] = 'student_registration/myform';
		return $form;
	}
	public function validateForm(array &$form, FormStateInterface $form_state)
	{
		return parent::validateForm($form, $form_state);
	}

	public function submitForm(array &$form, FormStateInterface $form_state)
	{
		$most = $form_state->getValues('most')["most"];
		$least = $form_state->getValues('leasr')["least"];
		$this->storage[$this->step]['most'] = $most;	
		$this->storage[$this->step]['least'] = $least;
		\Drupal::logger('module_name')->notice('<pre><code>' . print_r($this->storage, TRUE) . '</code></pre>' );
		$this->step++;
		$form_state->setRebuild();
	}

	public function ajax_form_multistep_form_ajax_callback(array &$form, FormStateInterface $form_state)
	{
		return $form;
	}
}
