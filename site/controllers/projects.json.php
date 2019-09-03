<?php

return function($page) {

      // fetch the basic set of pages
    $projectlist = $page->children()->listed();




  return compact('projectlist');

};
