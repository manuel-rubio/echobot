<?php

switch ($_REQUEST["name"]) {
    case "message":
        var_dump($_REQUEST["children"]);
        $attrs = &$_REQUEST["attrs"];
        $num = count($_REQUEST["children"]) - 1;
        $text = strrev($_REQUEST["children"][$num]["children"][0]);
        $payload = [["name" => "body", "attrs" => [], "children" => [$text]]];
        snatch_send_binary(snatch_message($attrs["to"], $attrs["from"],
                                          $attrs["id"], $attrs["type"],
                                          $payload));
        break;
}
