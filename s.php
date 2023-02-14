<form action="" method="post">

<input type="text" name="stad">
<input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $stad = $_POST['stad'];

}

    include ("fetch/dom_parser.php");
    $html = file_get_html('https://boneo.se/bostad?sort=field_property_publish_date&order=desc&locs_field_name=[{"locs_field_name":"Stockholm":"locs_field_combination":"field_propety_lan"}]');

    echo $html->find('.header-row',0)->plaintext;

    echo '</div>';

    ?>