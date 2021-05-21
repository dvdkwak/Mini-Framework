<?php

/**
 * This method checks wether the settings file exists, if not, this will put out a form to create it.
 */
function checkConfig() {
    if(!file_exists($_SERVER['DOCUMENT_ROOT'] . "/config.php")) {
        // if the root folder form has been submitted, create the config
        if(isset($_POST['saveConfig'])) {
            $configFile = fopen($_SERVER['DOCUMENT_ROOT'] . "/config.php", "w");
            $config = '<?php

// if the application is within a sub-folder call it here, you will be able to use "ROOT" for further references
define("DIRECTORY", "' . $_POST['rootFolder'] . '");

// defining the folder in which the assets are stored
define("ASSETS_DIR", "assets");

// if you want to be able to see php errors set this one to true (otherwise false of course)
define("DEBUGMODE", true);';
            fwrite($configFile, $config);
            fclose($configFile);
            echo "<script>window.location.href='/'</script>"; // redirecting to the same page
        }
        echo "<h1>The config does not exist!</h1>
            <hr>
            <form method='POST'>
                <input type='text' name='rootFolder' placeholder='root folder' />
                <input type='submit' name='saveConfig' value='install' />
            </form>";
        die(); // simple die to stop the rest of the code :3
    } // end of config existence check
} // end of checkConfig