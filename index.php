$date = strtotime("January 1, 2017 12:00 PM");
$remaining = $date - time();

$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
echo "There are $days_remaining days and $hours_remaining hours left until the launch of BTC-Crash.";