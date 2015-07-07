
function rootOfFramework()
{
    var pathFramework = window.location.protocol + '//'+ window.location.host + '<?php echo($this-> request-> base); ?>';
    return pathFramework;
}