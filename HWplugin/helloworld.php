<?php
/**
 * Short description for helloworld.php
 *
 * @package helloworld
 * @author gabbar1947 <gabbar1947@Rathore1947>
 * @version 0.1
 * @copyright (C) 2016 gabbar1947 <gabbar1947@Rathore1947>
 * @license MIT
 */


class plgContentHelloworld extends JPlugin
{
    public function onContentAfterTitle($context, &$article, &$params, $limitstart)
    {
        return "<p>Hello World!</p>";
    }
}

?>
