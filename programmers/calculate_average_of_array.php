<?php
// php로 배열의 평균값 구하기
$arr = [1,2,3,4,5,6,7,8,9,10];

// array_reduce() 활용
$answer = array_reduce($arr, function($pre, $cur){
    return $pre + $cur;
}, 0);

echo $answer/count($arr);



?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // 제이쿼리
    $(function() {

        let answer2 = 0;

        let arr2 = [1, 2, 3, 4, 5];

        $.each(arr2, function(index, item) {
            answer2 += item;
        })

        console.log('제이쿼리 답');
        console.log(answer2 / arr2.length);



    })
</script>
<script>
    // 자바스크립트. 배열의 평균값 구하기
    const arr = [1, 2, 3, 4];

    // 1. reduce() 메서드 활용
    function reduce_solution(arr) {
        // 1. reduce() 메서드 활용    
        let answer = arr.reduce((pre, cur) => {
            return pre + cur;
        }, 0);

        // 자바스크립트 답
        return answer / arr.length;
    }
</script>
<div>

</div>