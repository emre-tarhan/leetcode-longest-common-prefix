# leetcode-longest-common-prefix
Leetcode.com Longest Common Prefix Solution (PHP)  
`[Runtime 8ms (faster than 90%), 19MB memory usage (less than 80%) ]`  
<https://leetcode.com/problems/longest-common-prefix/>  

![a](https://user-images.githubusercontent.com/106887102/189538712-d5cead80-1cf5-485e-865c-08a898c6e5e4.png)

## Problem
Write a function to find the longest common prefix string amongst an array of strings.  

If there is no common prefix, return an empty string `""`.

#### Example 1:

```
Input: strs = ["flower","flow","flight"]
Output: "fl"
Example 2:
```
  
#### Example 2:
```
Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.
```
 

#### Constraints:

- `1 <= strs.length <= 200`
- `0 <= strs[i].length <= 200`
- `strs[i]` consists of only lowercase English letters.

## Solution
```PHP
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
```
