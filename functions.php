<?php
function returnResult($post) {
    //این تابع فقط پست را از ورودی گرفته و مجموع امتیازات را بر میگرداند
    $sumScore = 0;
    foreach($post as $ques => $answ) {
        switch($ques) {
            case 'Qone':
                switch($answ) {
                    case 'a':
                        $sumScore += 2;
                        break;
                    case 'b':
                        $sumScore += 4;
                        break;
                    case 'c':
                        $sumScore += 6;
                        break;
                }
                break;
            case 'Qtwo':
                switch($answ) {
                    case 'a':
                        $sumScore += 6;
                        break;
                    case 'b':
                        $sumScore += 4;
                        break;
                    case 'c':
                        $sumScore += 7;
                        break;
                    case 'd':
                        $sumScore += 2;
                        break;
                    case 'e':
                        $sumScore += 1;
                        break;
                }
                break;
            case 'Qthree':
                switch($answ) {
                    case 'a':
                        $sumScore += 4;
                        break;
                    case 'b':
                        $sumScore += 2;
                        break;
                    case 'c':
                        $sumScore += 5;
                        break;
                    case 'd':
                        $sumScore += 7;
                        break;
                    case 'e':
                        $sumScore += 6;
                        break;
                }
                break;
            case 'Qfour':
                switch($answ) {
                    case 'a':
                        $sumScore += 4;
                        break;
                    case 'b':
                        $sumScore += 6;
                        break;
                    case 'c':
                        $sumScore += 2;
                        break;
                    case 'd':
                        $sumScore += 1;
                        break;
                }
                break;
            case 'Qfive':
                switch($answ) {
                    case 'a':
                        $sumScore += 6;
                        break;
                    case 'b':
                        $sumScore += 4;
                        break;
                    case 'c':
                        $sumScore += 3;
                        break;
                    case 'd':
                        $sumScore += 5;
                        break;
                    case 'e':
                        $sumScore += 2;
                        break;
                }
                break;
            case 'Qsix':
                switch($answ) {
                    case 'a':
                        $sumScore += 6;
                        break;
                    case 'b':
                        $sumScore += 4;
                        break;
                    case 'c':
                        $sumScore += 2;
                        break;
                }
                break;
            case 'Qseven':
                switch($answ) {
                    case 'a':
                        $sumScore += 6;
                        break;
                    case 'b':
                        $sumScore += 2;
                        break;
                    case 'c':
                        $sumScore += 4;
                        break;
                }
                break;
            case 'Qeight':
                switch($answ) {
                    case 'a':
                        $sumScore += 6;
                        break;
                    case 'b':
                        $sumScore += 7;
                        break;
                    case 'c':
                        $sumScore += 5;
                        break;
                    case 'd':
                        $sumScore += 4;
                        break;
                    case 'e':
                        $sumScore += 3;
                        break;
                    case 'f':
                        $sumScore += 2;
                        break;
                    case 'g':
                        $sumScore += 1;
                        break;
                }
                break;
            case 'Qnine':
                switch($answ) {
                    case 'a':
                        $sumScore += 7;
                        break;
                    case 'b':
                        $sumScore += 6;
                        break;
                    case 'c':
                        $sumScore += 4;
                        break;
                    case 'd':
                        $sumScore += 2;
                        break;
                    case 'e':
                        $sumScore += 1;
                        break;
                }
                break;
            case 'Qten':
                switch($answ) {
                    case 'a':
                        $sumScore += 4;
                        break;
                    case 'b':
                        $sumScore += 2;
                        break;
                    case 'c':
                        $sumScore += 3;
                        break;
                    case 'd':
                        $sumScore += 5;
                        break;
                    case 'e':
                        $sumScore += 6;
                        break;
                    case 'f':
                        $sumScore += 1;
                        break;
                }
                break;
            default:
                echo "no one";
        }
    }
    return $sumScore;
}
function jomleNo($result) {
    $personalNo = 0;
    if($result > 60)
        $personalNo = 1;
    else if($result <= 60 && $result > 50)
        $personalNo = 2;
    else if($result <= 50 && $result > 40)
        $personalNo = 3;
    else if($result <= 40 && $result > 30)
        $personalNo = 4;
    else if($result <= 30 && $result > 20)
        $personalNo = 5;
    else if($result < 21)
        $personalNo = 6;
    return $personalNo;
}
function jomleString($number) {
    $jomalat = [];
    $countJomle = 0;
    $h = fopen("/home/mrs/Documents/PHPlala/TestKhodShenasi/finalQu.txt", "r");
    while(!feof($h)) {
        $jomalat[$countJomle++] = fgets($h);
    }
    fclose($h);

    return $jomalat[$number-1];
}
?>