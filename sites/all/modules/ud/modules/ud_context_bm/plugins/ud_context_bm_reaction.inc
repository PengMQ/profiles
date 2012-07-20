<?php

/**
 * @file
 * context plugin that allows to set the build mode for a user display
 */

class ud_context_bm_reaction extends context_reaction {
  function options_form($context) {
    $values = array();
    $build_modes = ds_get_build_modes('ud');
    foreach ($build_modes as $key => $bm) {
      $values[$key] = $bm['title'];
    }
    return array(
      '#title' => $this->title,
      '#description' => $this->description,
      '#options' => $values,
      '#type' => 'select',
      '#default_value' => $this->fetch_from_context($context),
    );
  }

  /**
   * Output a list of active contexts.
   */
  function execute($account) {
    $contexts = $this->get_contexts();
    foreach ($contexts as $context) {
      if (!empty($context->reactions[$this->plugin])) {
        $account->build_mode = $context->reactions[$this->plugin];
      }
    }
  }
}
