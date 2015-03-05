<?php
function smarty_outputfilter_trimhitespace($tpl_output, &$smarty)
{
       return $tpl_output."\n".output_action ('bottom').'</body></html>';
}

?>