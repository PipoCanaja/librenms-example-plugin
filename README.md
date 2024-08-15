LibreNMS Example Plugin

Info goes here :)

Add the path to your plugin for local development (or deployment). That path must not be inside LibreNMS directory (so not in `/opt/librenms`).

    composer config --global repositories.example-plugin '{"type": "path", "url": "/full/path/to/librenms-example-plugin", "symlink": true}'

For users to use your plugin, you should publish it to packagist.org

Then run:

    lnms plugin:add murrant/librenms-example-plugin @dev
