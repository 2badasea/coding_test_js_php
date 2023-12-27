<?php


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // 순수자바스크립트로 풀이
    // "pPoooyY"	true 
    // "Pyy"	false
    // 주어지는 문자열 s 
   
    function js_solution(s){

        var s = s.toLowerCase();
        s = s.replace(/\s/g, '');

        // 공백 체크
        if( s.length == 0){
            console.log('공백이다!!');
            return false;
        }

        // 값이 존재하는지 체크
        if( s.indexOf('p') == -1 && s.indexOf('y') == -1){
            console.log('p랑 y 없음');
            return false;
        }

        let chk_num = 0; 
        for(var i = 0; i<s.length; i++){
            if( s.charAt[i] == 'p'){
                chk_num++;
            }else if(s.charAt[i] == 'y'){
                chk_num--;
            }
        }

        var answer = chk_num == 0 ? true : false;
        return answer;
    }

    function js_solution2(s){
        // 배열로 만들고 for...of 사용해볼 것 
        var s = s.toLowerCase();
        s = s.replace(/\s/g, '');

        var temp_arr = [...s];

        var num_chk = 0;
        for(const el of temp_arr){
            if( el == 'y') num_chk ++;
            if( el == 'p') num_chk --;
        }

        return num_chk == 0 ? true : false;

    }



    // 두 번째 풀이(제이쿼리 풀이)
    function jq_solution(s){
        // console.log('+ jquery');

        var s = s.toLowerCase().replace(/\s/g, '');
        if(s.length == 0 || (s.indexOf('p') == -1 && s.indexOf('y') == -1)){
            return false;
        } 

        // 문자열을 배열로 반환해서 처리해보기 
        let tmp_ary = [...s]; // 전개연산자 or split('');

        var chk_num = 0;
        $.each(tmp_ary, function(index,item){
            if(item == 'p'){
                chk_num++;
            }else if(item == 'y'){
                chk_num--;
            }
        });

        return chk_num == 0 ? true : false;
    }



</script>
<script>
    $(function(){
        // 제이쿼리로 풀이

        let s1 = "abcde";
        let s2 = "pPoooyY";
        console.log('제이쿼리답');
        console.log(jq_solution(s1));
        console.log(jq_solution(s2));

        // reduce함수답
        console.log(js_solution2(s2));

    })
</script>