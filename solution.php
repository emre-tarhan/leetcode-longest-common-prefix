<?php
class Solution {
    function longestCommonPrefix($strs) {
    $strs_count = count($strs);
    if ($strs_count < 2) {
        return $strs_count ? $strs[0] : '';
    }
    
    $equal = $strs[0];
    for ($n = 1; $n < $strs_count; $n++) {
        $a = str_split($equal);
        $b = str_split($strs[$n]);
        $equal = '';
        $max = min(count($a), count($b));
        
        for($i = 0; $i < $max; $i++) {
            if ($a[$i] == $b[$i]) {
                $equal .= $b[$i];
            }else {
                break;
            }
        }
        
        if (!$equal) return $equal;
    }
    
    return $equal;
  }
}
?>
