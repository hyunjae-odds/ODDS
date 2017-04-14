<?php
/**
 * Created by PhpStorm.
 * User: hyunjae
 * Date: 2017. 4. 13.
 * Time: PM 10:32
 */
class Test extends CI_Controller{
    public function world($to = 'World'){
        echo "Hello {$to}!".PHP_EOL;
    }
}
?>