<?php

/**
 * handles posts
 * @author Adam Behnke
 * @link http://www.accella.net
 */
require_once('./vendor/autoload.php');
use Parse\ParseUser;
use Parse\ParseQuery;

class Post
{

    public function __construct()
    {
    }

    public static function getPostData()
    {

        $query = new ParseQuery("Post");
        //$query->equalTo("playerName", "Dan Stemkoski");
        $query->limit(10);
        $results = $query->find();
        foreach ($results as $key => $value) {
          #echo'<pre>';
          #print_r($value);
          #echo'</pre>';?>
          <div id="postResult">
          <?php
          echo $value->text;
          ?>
          </div>
          <?php
        }
        //echo $object->getObjectId() . ' - ' . $object->get('playerName'));

        //code working for posts associated with logged in user
        /*
        $user = ParseUser::getCurrentUser();
        $query = new ParseQuery("Post");
        $query->equalTo("user", $user);
        $userPosts = $query->find();
        foreach ($userPosts as $key => $value) {
          echo'<pre>';
          print_r($value);
          echo'</pre>';
        }
        */

    }

}
