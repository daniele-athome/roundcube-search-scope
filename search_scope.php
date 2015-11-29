<?php

/**
  * This plugin lets you set the default search scope for the search box.
  * 
  * Configure this plugin in config.inc.php by copying config.inc.php.dist 
  * and adding your preferred fields. 
  *
  * @author Daniele Ricci
  */

class search_scope extends rcube_plugin 
{
    function init()
    {
        $this->add_hook('login_after', array($this, 'set_search_scope'));
    }

    function set_search_scope($args)
    { 
        $this->load_config('config.inc.php.dist');
        $this->load_config('config.inc.php');

        $scope = rcmail::get_instance()->config->get('search_scope');
        $_SESSION['search_scope'] = $scope;
    }
}
