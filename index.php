<!DOCTYPE html>
<html>
<body>

<?php
$var= "saturday";
switch ($var) {
  case "monday":
    echo "today is  work day" ."<br>";
    break;
  case "tuesday":
    echo"today is work day";
  case "wednesday":
    echo "today is work day";
    break;
    case "thrusday":
        echo "today is work day";
        break;
        case "friday":
            echo "today is workday";
            break;
            case "saturday":
                echo "today is halfday";
                break;
                case "sunday":
                    echo "today is holyday";
                    break;
  default:
    echo "invalid day";
    }
?>
 
</body>
</html>