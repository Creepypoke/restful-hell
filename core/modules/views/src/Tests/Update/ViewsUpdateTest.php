<?php

/**
 * @file
 * Contains \Drupal\views\Tests\ViewsUpdateTest.
 */

namespace Drupal\views\Tests\Update;

use Drupal\system\Tests\Update\UpdatePathTestBase;

/**
 * Ensures that update hook is run properly for REST Export config.
 *
 * @group Update
 */
class ViewsUpdateTest extends UpdatePathTestBase {

  /**
   * {@inheritdoc}
   */
  protected function setDatabaseDumpFiles() {
    $this->databaseDumpFiles = [
      __DIR__ . '/../../../../system/tests/fixtures/update/drupal-8.bare.standard.php.gz',
      __DIR__ . '/../../../tests/fixtures/update/rest-export-with-authentication.php',
    ];
  }

  /**
   * Ensures that update hook is run for views module.
   */
  public function testUpdate() {
    $this->runUpdates();

    // Get particular view.
    $view = \Drupal::entityManager()->getStorage('view')->load('rest_export');
    $displays = $view->get('display');
    $this->assertIdentical($displays['rest_export_1']['display_options']['auth']['basic_auth'], 'basic_auth', 'Basic authentication is set as authentication method.');
  }

}
