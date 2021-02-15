<?php
function convertDate($str)
{
    $digit_1 = $str[0] - '0';
    $digit_2 = $str[1] - '0';

    $dd = $digit_1 * 10 + $digit_2;

    $digit_3 = $str[3] - '0';
    $digit_4 = $str[4] - '0';

    $mm = $digit_3 * 10 + $digit_4;
    $month = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];

    echo $dd . " ";
    switch($mm)
    {
        case 1:
            echo $month[$mm-1];
            break;
        case 2:
            echo $month[$mm-1];
            break;
        case 3:
            echo $month[$mm-1];
            break;
        case 4:
            echo $month[$mm-1];
            break;
        case 5:
            echo $month[$mm-1];
            break;
        case 6:
            echo $month[$mm-1];
            break;
        case 7:
            echo $month[$mm-1];
            break;
        case 8:
            echo $month[$mm-1];
            break;
        case 9:
            echo $month[$mm-1];
            break;
        case 10:
            echo $month[$mm-1];
            break;
        case 11:
            echo $month[$mm-1];
            break;
        case 12:
            echo $month[$mm-1];
            break;
        default:
            echo "Wrong month!";
    }

    echo ", ".$str[6].$str[7].$str[8].$str[9];
}
$date_1 = '14-02-2021';
$date_2 = '12-05-1977';
$date_3 = '04-06-1997';
convertDate($date_3);
?>