<?php

switch ($_REQUEST["name"]) {
    case "message":
        $attrs = &$_REQUEST["attrs"];
        $payload = $_REQUEST["children"];
        snatch_send_binary(snatch_message($attrs["to"], $attrs["from"],
                                          $attrs["id"], $attrs["type"],
                                          $payload));
        break;
}
