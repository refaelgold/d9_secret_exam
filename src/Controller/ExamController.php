<?php
namespace Drupal\israel_innovation_exam_module\Controller;

class ExamController {

  /**
   * Returns a render-able array for a test page.
   */
  public function content(): array {


//    Easy Solution - Will render faster but want to show some skills
//    $build = [
//      '#markup' => 'Hello World!'
//    ];
//    return $build;

    $short_description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
    $long_description = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using';

    return [
      '#theme' => 'israel_innovation_exam_module-theme-trigger',
      '#short_description' => $short_description,
      '#long_description' => $long_description,

    ];
  }
}
