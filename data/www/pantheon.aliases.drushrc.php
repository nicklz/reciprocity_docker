<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['uceap-reciprocity.pr-sub-them'] = array(
    'uri' => 'pr-sub-them-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:7a4992c4f5e84e198642ab97698f9ae1@dbserver.pr-sub-them.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:12077/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.pr-sub-them.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'pr-sub-them.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.qatemp'] = array(
    'uri' => 'qatemp-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:fe729cfc5f8e4317ab789ebe3bfe8358@dbserver.qatemp.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:11098/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.qatemp.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'qatemp.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.pr-rws-263'] = array(
    'uri' => 'pr-rws-263-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:82f3350ccb474d17bc87a9367433ab69@dbserver.pr-rws-263.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:12576/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.pr-rws-263.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'pr-rws-263.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.dev'] = array(
    'uri' => 'dev-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e3289a22dbdc474cadcb79626d44bf11@dbserver.dev.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:14634/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'dev.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.test'] = array(
    'uri' => 'test-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:fe9f9caf09a84e0c967425bd5cb1ae2e@dbserver.test.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:11660/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'test.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.ci-406'] = array(
    'uri' => 'ci-406-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4e85e833fdcd4a9cbfcbe43756c40407@dbserver.ci-406.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:11801/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ci-406.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'ci-406.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.rwsdemo'] = array(
    'uri' => 'rwsdemo-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:9cf9f94a5cb9476999316f4708b6a7a0@dbserver.rwsdemo.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:11083/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.rwsdemo.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'rwsdemo.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.live'] = array(
    'uri' => 'live-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:2c8ef20e58254a73881ee8de5fae72d3@dbserver.live.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:11528/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'live.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.rws-49'] = array(
    'uri' => 'rws-49-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:1d87719ac15d419f8335a8872694a43a@dbserver.rws-49.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:11130/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.rws-49.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'rws-49.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.qa'] = array(
    'uri' => 'qa-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:45dd745daaa443ce81986a83ab7649a6@dbserver.qa.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:11405/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.qa.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'qa.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.pr-rws-327'] = array(
    'uri' => 'pr-rws-327-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4fd5e6a39f5349c691deb6cf917be986@dbserver.pr-rws-327.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:16979/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.pr-rws-327.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'pr-rws-327.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.application'] = array(
    'uri' => 'application-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:577b98df252f4a1eb4da06dabeb25bd1@dbserver.application.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:10998/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.application.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'application.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
