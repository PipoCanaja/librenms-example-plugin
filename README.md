LibreNMS Example Plugin

Info goes here :)

Add this to LibreNMS composer.json for local development:

    "repositories": [
        {
            "type": "path",
            "url": "../librenms-example-plugin",
            "symlink": true
        }
    ]

For users to use your plugin, you should publish it to packagist.org

Then run:

    lnms plugin:add "murrant/librenms-example-plugin @dev"
