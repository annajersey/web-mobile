<?php
include(plugin_dir_path(__FILE__) . "data.php");
?>
<div id="web-or-mobile">
    <div class="wom-title">Form Title</div>

        <?php foreach ($data as $key=>$row): $key++; ?>
            <div class="wom-block">
                <div class="wom-block-title"><?php echo $key.'. '.$row[0]; ?></div>
                <div class="wom-block-content"><?php echo $row[1]; ?></div>
                <div class="buttons">
                    <input type="radio" checked="checked" name="wom<?php echo $key; ?>" id="wom-<?php echo $key; ?>-yes" data-result=1 data-mobile-only="<?php echo $row[5]; ?>"
                           data-web-only="<?php echo $row[4]; ?>" value="<?php echo $row[2]; ?>">
                    <label for="wom-<?php echo $key; ?>-yes">Yes</label>
                    <input type="radio" name="wom<?php echo $key; ?>" id="wom-<?php echo $key; ?>-no" data-result=0 data-mobile-only="<?php echo $row[5]; ?>"
                           data-web-only="<?php echo $row[4]; ?>" value="<?php echo $row[3]; ?>">
                    <label for="wom-<?php echo $key; ?>-no">No</label>

                </div>
            </div>
        <?php endforeach; ?>

    <div class="submit-block"><img id="wom-loader" src="<?php echo plugin_dir_url( __FILE__ ). "assets/img/loader.gif" ?>" /><div id="wom-submit">Submit</div><div id="wom-message"></div></div>
</div>
