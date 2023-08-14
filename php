<!DOCTYPE html>
<html>
<head>
    <title>Zone Information</title>
</head>
<body>
    <h1>Version_1</h1>
    <h2>Current Zone:</h2>
    <?php
        $ZONE = shell_exec('curl "http://metadata.google.internal/computeMetadata/v1/instance/zone" -H "Metadata-Flavor: Google"');
        $CURRENT_ZONE = explode('/', $ZONE)[3];
        echo "<h3>Your Zone: $CURRENT_ZONE</h3>";
    ?>
</body>
</html>
