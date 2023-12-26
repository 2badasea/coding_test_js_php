<?php


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // 자바스크립트로 풀이
    function solution(s) {
        var answer = true;

        const small_s = s.toLowerCase().replace('/\s/g', '');

        let chk_num = 0;
        for (var i = 0; i < small_s.length; i++) {
            if (small_s.charAt(i) == 'p') {
                chk_num += 1;
            } else if (small_s.charAt(i) == 'y') {
                chk_num += -1;
            }
        }

        return (chk_num == 0) ? true : false

    }
</script>
<script>
    $(function(){
        // 제이쿼리로 풀이



    })
</script>