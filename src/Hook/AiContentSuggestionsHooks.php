<?php

namespace Drupal\ai_content_suggestions\Hook;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Hook\Attribute\Hook;
/**
 * Hook implementations for ai_content_suggestions.
 */
class AiContentSuggestionsHooks
{
    /**
     * Implements hook_form_FORM_ID_alter().
     */
    #[Hook('form_node_form_alter')]
    public static function formNodeFormAlter(&$form, \Drupal\Core\Form\FormStateInterface $form_state): void
    {
        ai_content_suggestions_alter_form($form, $form_state);
    }
    /**
     * Implements hook_form_FORM_ID_alter().
     */
    #[Hook('form_taxonomy_term_form_alter')]
    public static function formTaxonomyTermFormAlter(&$form, \Drupal\Core\Form\FormStateInterface $form_state): void
    {
        ai_content_suggestions_alter_form($form, $form_state);
    }
    /**
     * Implements hook_form_FORM_ID_alter().
     */
    #[Hook('form_block_content_form_alter')]
    public static function formBlockContentFormAlter(&$form, \Drupal\Core\Form\FormStateInterface $form_state): void
    {
        ai_content_suggestions_alter_form($form, $form_state);
    }
}
