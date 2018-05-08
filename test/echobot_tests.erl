-module(echobot_tests).
-author('manuel@altenwald.com').

-include_lib("eunit/include/eunit.hrl").

echo_test_() ->
    snatch_fun_test:check([
        "echo"
    ]).
