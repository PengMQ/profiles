<?php

/**
 * @file
 * context plugin that allows to detect the build mode for a user display
 */

class ud_context_bm_condition extends context_condition {
  /**
   * Generate a list of available build modes
   */
  function condition_values() {
    $values = array();
    $build_modes = ds_get_build_modes('ud');
    foreach ($build_modes as $key => $bm) {
      $values[$key] = $bm['title'];
    }
    return $values;
  }

  function options_form($context) {
    // @todo: expose options like: overrule views node views etc ...
    return array();
  }

  function execute($account, $op) {
    foreach ($this->get_contexts($account->build_mode) as $context) {
      $this->condition_met($context, $account->build_mode);
    }
  }
}
