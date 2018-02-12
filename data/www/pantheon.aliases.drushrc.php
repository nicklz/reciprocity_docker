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

  $aliases['uceap-reciprocity.rws-480'] = array(
    'uri' => 'rws-480-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:fc0d5d4fee3b47acac593950e8736dd7@dbserver.rws-480.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:14677/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.rws-480.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'rws-480.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.rws-492'] = array(
    'uri' => 'rws-492-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:8bb7686ef28f45fd9e942b9525ead753@dbserver.rws-492.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:15176/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.rws-492.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'rws-492.124a2a40-4bd3-440e-950c-e2302f8952bf',
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
  $aliases['uceap-reciprocity.rws-493'] = array(
    'uri' => 'rws-493-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e16b924917b447529c080fbec65a3a12@dbserver.rws-493.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:14255/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.rws-493.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'rws-493.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['uceap-reciprocity.test'] = array(
    'uri' => 'test-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4b9e2adca9c847c4a2602b25b99b8716@dbserver.test.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:13300/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'test.124a2a40-4bd3-440e-950c-e2302f8952bf',
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
  $aliases['uceap-reciprocity.demo'] = array(
    'uri' => 'demo-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:96b3b10fbac8466a95e0e8c59142b9ae@dbserver.demo.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:14515/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.demo.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'demo.124a2a40-4bd3-440e-950c-e2302f8952bf',
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
  $aliases['uceap-reciprocity.rws-384h'] = array(
    'uri' => 'rws-384h-uceap-reciprocity.pantheonsite.io',
    'db-url' => 'mysql://pantheon:2f8ed9ac2f0e463d986dd329f14ee84c@dbserver.rws-384h.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:14808/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.rws-384h.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in',
    'remote-user' => 'rws-384h.124a2a40-4bd3-440e-950c-e2302f8952bf',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
