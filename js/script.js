/*global $*/

$('#navcomp').click(function () {
    'use strict';
    $("#comp").css("display", "block");
    $("#exp").css("display", "none");
    $("#proj").css("display", "none");
    $("#formation").css("display", "none");
    $("#int").css("display", "none");
});

$('#navexp').click(function () {
    'use strict';
    $("#comp").css("display", "none");
    $("#exp").css("display", "block");
    $("#proj").css("display", "none");
    $("#formation").css("display", "none");
    $("#int").css("display", "none");
});

$('#navproj').click(function () {
    'use strict';
    $("#comp").css("display", "none");
    $("#exp").css("display", "none");
    $("#proj").css("display", "block");
    $("#formation").css("display", "none");
    $("#int").css("display", "none");
});

$('#navform').click(function () {
    'use strict';
    $("#comp").css("display", "none");
    $("#exp").css("display", "none");
    $("#proj").css("display", "none");
    $("#formation").css("display", "block");
    $("#int").css("display", "none");
});

$('#navint').click(function () {
    'use strict';
    $("#comp").css("display", "none");
    $("#exp").css("display", "none");
    $("#proj").css("display", "none");
    $("#formation").css("display", "none");
    $("#int").css("display", "block");
});