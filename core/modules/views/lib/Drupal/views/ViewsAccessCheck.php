<?php

/**
 * @file
 * Contains \Drupal\views\ViewsAccessCheck.
 */

namespace Drupal\views;

use Drupal\Core\Access\AccessCheckInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;

/**
 * Defines a route access checker for the _access_all_views permission.
 *
 * @todo We could leverage the permission one as well?
 */
class ViewsAccessCheck implements AccessCheckInterface {

  /**
   * {@inheritdoc}
   */
  public function applies(Route $route) {
    return $route->hasDefault('view_id');
  }

  /**
   * Implements AccessCheckInterface::applies().
   */
  public function access(Route $route, Request $request, AccountInterface $account) {
    $access = $account->hasPermission('access all views');

    return $access ? static::ALLOW : static::DENY;
  }

}
