<?php

declare(strict_types=1);

namespace Drupal\ai_content_suggestions\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;

/**
 * Attribute class for ai_content_suggestions plugins.
 *
 * @see \Drupal\ai_content_suggestions\Annotation\AiContentSuggestions
 * @see \Drupal\ai_content_suggestions\AiContentSuggestionsPluginManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class AiContentSuggestions extends Plugin {

  /**
   * Constructs an AiContentSuggestions attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param string $title
   *   The human-readable name of the plugin.
   * @param string $description
   *   The description of the plugin.
   * @param string $operation_type
   *   The AI operation type for the plugin.
   */
  public function __construct(
    public readonly string $id,
    public readonly string $title,
    public readonly string $description,
    public readonly string $operation_type,
  ) {
    parent::__construct($id);
  }

}
