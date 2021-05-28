<?php
if (!defined('ABSPATH')) {
    exit;
}
// Exit if accessed directly

return [
    'title'              => esc_html__('Time Zone', 'bdthemes-element-pack'),
    'required'           => true,
    'default_activation' => false,
    'has_style'          => true,
];