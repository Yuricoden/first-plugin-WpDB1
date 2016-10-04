<?php
 /*
 Plugin Name: Works for post
 Plugin URI: http://
 Description: Работа с базой данных вордпресс
 Version: 1.0
 Author: Yuri Zheludkov
 Author URI:  http://
 */

 function simple_dashboard_widget()
  {
    ?>

     <h2>Введите данные</h2>
 <form method="post" action="" id="generalform">
 <textarea id="amessage"></textarea>
 <input type="submit" name="ok" value="Добавить">

     <?php
    }
     function sdbw_register_widget()

       {
         wp_add_dashboard_widget('simple-dashboard-widget','Виджет ', 'simple_dashboard_widget');

        }

        add_action ('wp_dashboard_setup','sdbw_register_widget');

