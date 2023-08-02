<?php

namespace SiddharthPhp8;

// fdiv() was introduced in PHP8 and will not work on lower versions.
function func_only_supported_in_php8_or_more() {
    echo fdiv(5.7, 1.3);
}
