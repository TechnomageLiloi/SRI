<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Paper</title>

        <script><?php echo file_get_contents(__DIR__ . '/../vendor/technomage-liloi/rune-framework/Frontside/Library/Jquery.min.js'); ?></script>
        <script><?php echo file_get_contents(__DIR__ . '/../vendor/technomage-liloi/rune-framework/Frontside/Library/Underscore.min.js'); ?></script>
        <script><?php echo file_get_contents(__DIR__ . '/../vendor/technomage-liloi/rune-framework/Frontside/Library/Backbone.min.js'); ?></script>
        <script><?php echo file_get_contents(__DIR__ . '/../vendor/technomage-liloi/rune-api/Client/API.js'); ?></script>

        <script><?php echo file_get_contents(__DIR__ . '/API/Requests.js'); ?></script>
        <script><?php echo file_get_contents(__DIR__ . '/API/Thesis/Requests.js'); ?></script>

    </head>
    <body>

        <div id="menu">

        </div>

        <div id="page" class="stylo">
            <script>
                Requests.Thesis.show();
            </script>
        </div>
    </body>
</html>