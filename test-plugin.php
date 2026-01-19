<?php
// plugins/managed/test-plugin/test-plugin.php

add_action('init', function () {
    error_log('Managed Test Plugin loaded');
});
