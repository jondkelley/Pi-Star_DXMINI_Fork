<?php
#  dxmini specific vendor customizations by jonkelley

$vendor_footer_string = <<<EOF
<big>DXMINI &copy; Jason Kingsbury (W9DXM) 2019</big><br />
Pi-Star / Pi-Star Dashboard, &copy; Andy Taylor (MW0MWZ) 2014-<?php echo date("Y"); ?>.<br />
ircDDBGateway Dashboard by Hans-J. Barthen (DL5DI),<br />
MMDVMDash developed by Kim Huebel (DG9VH), <br />
Need help? Click <a style="color: #ffffff;" href="https://www.dxmini.com/support.html" target="_new">here for the DXMini Help Pages</a><br />
EOF;

// path to latest vendored pistar build
define("VENDOR_UPDATE_INVENTORY", 'https://www.dxmini.com/resources/pistar.json');

// bash script to fetch that performs dxmini updates
define("VENDOR_UPDATE_SCRIPT", 'https://www.dxmini.com/resources/dxmini_update.sh');

define("VENDOR_FOOTER_STRING", $vendor_footer_string);

$vendor_device_revision_file = "/etc/dxmini_revision";
if (file_exists($vendor_device_revision_file)) {
    define("VENDOR_DEVICE_REVISION", file_get_contents($vendor_device_revision_file, FILE_USE_INCLUDE_PATH));
} else {
  define("VENDOR_DEVICE_REVISION", 'unknown_rev');
}

$vendor_device_serial_file = "/etc/dxmini_serial";
if (file_exists($vendor_device_serial_file)) {
    define("VENDOR_DEVICE_SERIAL", file_get_contents($vendor_device_serial_file, FILE_USE_INCLUDE_PATH));
} else {
    define("VENDOR_DEVICE_SERIAL", 'unknown_serial');
}

$vendor_device_model_file = "/etc/dxmini_model";
if (file_exists($vendor_device_model_file)) {
    define("VENDOR_DEVICE_MODEL", file_get_contents($vendor_device_model_file, FILE_USE_INCLUDE_PATH));
} else {
    define("VENDOR_DEVICE_MODEL", 'unknown_model');
}

?>
