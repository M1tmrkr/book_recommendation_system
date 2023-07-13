<?php
function uploadImage($file, $dir, $name = null, $thumb = null)
{
    $path = public_path() . '/uploads/' . $dir;
    if (!File::exists($path)) {
        File::makedirectory($path, 0777, true, true);
    }
    if ($name == null) {
        $file_name = "Application" . "_" . date('YmdHis') . rand(0, 999) . "." . $file->getClientOriginalExtension();
    } else {
        $file_name = $name . "-" . date('YmdHis') . rand(0, 999) . "." . $file->getClientOriginalExtension();
        dd($file_name);
    }
    $success = $file->move($path, $file_name);
    if ($success) :
        if ($thumb) {
            list($width, $height) = explode('x', $thumb);
            Image::make($path . '/' . $file_name)->resize($width, $height, function ($constraints) {
                return $constraints->aspectRatio();
            })->save($path . '/Thumb-' . $file_name);
        }
        return $file_name;
    else :
        return false;
    endif;
}

function deleteImage($file, $dir, $thumb = false)
{
    if (file_exists(public_path() . '/uploads/' . $dir . '/' . $file) && !empty($file)) {
        unlink(public_path() . '/uploads/' . $dir . '/' . $file);
        if (file_exists(public_path() . '/uploads/' . $dir . '/Thumb-' . $file)) {
            unlink(public_path() . '/uploads/' . $dir . '/Thumb-' . $file);
        }
    }
}
//get getUnicodeNumber number
function getUnicodeNumber($input)
{
    $standard_numsets = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    $nepali_numsets = array("०", "१", "२", "३", "४", "५", "६", "७", "८", "९");
    return str_replace($standard_numsets, $nepali_numsets, $input);
}
//get standarrd number
function getStandardNumber($input)
{
    $nepali_numsets = array("०", "१", "२", "३", "४", "५", "६", "७", "८", "९");
    $standard_numsets = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    $result = str_replace($nepali_numsets, $standard_numsets, $input);
    return strtoupper(trim($result));
}
//return valid url
function validate_url($url)
{
    return ((strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0) && filter_var($url, FILTER_VALIDATE_URL) !== false);
}

//times ago
function timesAgo($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed;
    $minutes    = round($time_elapsed / 60);
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400);
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640);
    $years      = round($time_elapsed / 31207680);
    // Seconds
    if ($seconds <= 60) {
        return "भर्खरै";
    }
    //Minutes
    else if ($minutes <= 60) {
        return ($minutes == 1) ? "१ मिनेट अगाडि" : getUnicodeNumber($minutes) . " मिनेट अगाडि";
    }
    //Hours
    else if ($hours <= 24) {
        return ($hours == 1) ? "१ घण्टा अगाडि" : getUnicodeNumber($hours) . " घण्टा अगाडि";
    }
    //Days
    else if ($days <= 7) {
        return ($days == 1) ? "१ दिन अगाडि" : getUnicodeNumber($days) . " दिन अगाडि";
    }
    //Weeks
    else if ($weeks <= 4.3) {
        return ($weeks == 1) ? "१ हप्ता अगाडि" : getUnicodeNumber($weeks) . " हप्ता अगाडि";
    }
    //Months
    else if ($months <= 12) {
        return ($months == 1) ? "१ महिना अगाडि" : getUnicodeNumber($months) . " महिना अगाडि";
    }
    //Years
    else {
        return ($years == 1) ? "१ बर्ष अगाडि" : getUnicodeNumber($years) . " बर्ष अगाडि";
    }
}




//takes two parameter datenep(date,true or false);
function datenep($date, $num_date)
{
    $lib = new \App\Models\NepaliCalander();
    $a = explode("-", $date);
    $b = explode(" ", $a[2]);
    $cd = $lib->eng_to_nep($a[0], $a[1], $b[0]);
    $cd = (array)$cd;
    if ($num_date) {
        return $cd['year'] . " " . $cd['nmonth'] . " " . $cd['date'] . " गते " . $cd['day'];
    } else {
        return $cd['year'] . "-" . $cd['month'] . "-" . $cd['date'];
    }
}
//dateeng('2076-12-30') or dateeng(2076-12-30',true) for leading 0 & false for not leading 0
function dateeng($date, $lead = null)
{
    $lib = new \App\Models\NepaliCalander();
    $a = explode("-", $date);
    $b = explode(" ", $a[2]);
    $cd = $lib->nep_to_eng($a[0], $a[1], $b[0]);
    $cd = (array)$cd;
    if ($lead == true) { //return the leading zero date
        if ($cd['month'] > 9) : $m = $cd['month'];
        else : $m = "0" . $cd['month'];
        endif;
        if ($cd['date'] > 9) : $d = $cd['date'];
        else : $d = "0" . $cd['date'];
        endif;
        return $cd['year'] . "-" . $m . "-" . $d;
    } else {
        return $cd['year'] . "-" . $cd['month'] . "-" . $cd['date'];
    }
}

//get total age getTotalAge("2046-03-14")
function getTotalAge($dob)
{
    $nepcal = new \App\Models\NepaliCalander();
    $engdate = explode("-", date('Y-m-d'));
    $eyear = $engdate[0];
    $emonth = $engdate[1];
    $eday = $engdate[2];
    $result = $nepcal->eng_to_nep($eyear, $emonth, $eday);
    $nep_year = intval($result['year']);
    $nep_month = intval($result['month']);
    $nep_day = intval($result['date']);
    $dob_date = explode("-", $dob);
    $dob_year = intval($dob_date[0]);
    $dob_month = intval($dob_date[1]);
    $dob_day = intval($dob_date[2]);
    if ($nep_day >= $dob_day) {
        $new_day = $nep_day - $dob_day;
    } else {
        $nep_month = $nep_month - 1;
        $result = $nepcal->is_nepali_date($nep_year . "-" . addZeroInMonth($nep_month) . "-32");
        if ($result) {
            $nep_day = 32 + $nep_day;
        } else {
            $result = $nepcal->is_nepali_date($nep_year . "-" . addZeroInMonth($nep_month) . "-31");
            if ($result) {
                $nep_day = 31 + $nep_day;
            } else {
                $result = $nepcal->is_nepali_date($nep_year . "-" . addZeroInMonth($nep_month) . "-30");
                if ($result) {
                    $nep_day = 30 + $nep_day;
                } else {
                    $result = $nepcal->is_nepali_date($nep_year . "-" . addZeroInMonth($nep_month) . "-29");
                    if ($result) {
                        $nep_day = 29 + $nep_day;
                    }
                }
            }
        }
        $new_day = $nep_day - $dob_day;
    }
    if ($nep_month < $dob_month) {
        $nep_year = $nep_year - 1;
        $nep_month = $nep_month + 12;
    }
    $new_month = $nep_month - $dob_month;
    $new_year = $nep_year - $dob_year;
    $date = "";
    if ($new_year > 0) $date .= getUnicodeNumber($new_year) . " वर्ष ";
    if ($new_month > 0) $date .= getUnicodeNumber($new_month) . " महिना ";
    if ($new_day > 0) $date .= getUnicodeNumber($new_day) . " दिन ";
    return $date;
}
//add zero to month
function addZeroInMonth($nep_month)
{
    return $nep_month < 10 ? "0" . $nep_month : $nep_month;
}
//is nepali date
function is_nepali_date($NepaliDate)
{
    if (check_date($NepaliDate)) {
        $EngDate = english_date($NepaliDate);

        $NepDate = nepali_date($EngDate);

        if ($NepaliDate == $NepDate) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
//check date
function check_date($date)
{
    $d1 = substr($date, 4, 1);

    $d2 = substr($date, 7, 1);

    $len = strlen($date);

    $value = false;

    if ($d1 == '-') {
        $value = true;
    } else {
        $value = false;
    }
    if ($d2 == '-') {
        $value = true;
    } else {
        $value = false;
    }
    if ($len == 10) {
        $value = true;
    } else {
        $value = false;
    }
    return $value;
}

//get clock get_clock($nep=true/false)
function get_clock($nep)
{
    $h = date('H');
    $i = date('i');
    $s = date('s');
    if ($nep == true) :
        $am_pm = ($h < 12) ? "AM" : "PM";
        $h = ($h > 12) ? $h - 12 : $h;
        $h = ($h == 0) ? 12 : $h;
        $TimeString = getUnicodeNumber($h . ":" . $i . ":" . $s . " " . $am_pm);
    else :
        $am_pm = ($h < 12) ? "AM" : "PM";
        $h = ($h > 12) ? $h - 12 : $h;
        $h = ($h == 0) ? 12 : $h;
        $TimeString = $h . ":" . $i . ":" . $s . " " . $am_pm;
    endif;
    return $TimeString;
}

// month year

function get_month($n)
{
    $n = 2;
    for ($i = 0; $i <= $n; $i++) {
        $d = strtotime("$i days");
        $x = strtotime("$i month");
        $y = strtotime("$i year");
        echo "Dates : " . $dates = date('d M Y', "+$d days");
        echo "<br>";
        echo "Months : " . $months = date('M Y', "+$x months");
        echo '<br>';
        echo "Years : " . $years = date('Y', "+$y years");
        echo '<br>';
    }





    // function GetNepaliCurrentDate() {
    //         var selectedDate = NepaliFunctions.GetCurrentBsDate();
    //         var month = (selectedDate.month.toString().length == 2) ? selectedDate.month : '0' + selectedDate.month;
    //         var day = (selectedDate.day.toString().length == 2) ? selectedDate.day : '0' + selectedDate.day;
    //         var date = selectedDate.year + '-' + month + '-' + day;
    //         return date;
    //     }
        
    //     function GetADDate() {
    //         var selectedDate = NepaliFunctions.GetCurrentAdDate();
    //         var month = (selectedDate.month.toString().length == 2) ? selectedDate.month : '0' + selectedDate.month;
    //         var day = (selectedDate.day.toString().length == 2) ? selectedDate.day : '0' + selectedDate.day;
    //         var date = selectedDate.year + '-' + month + '-' + day;
    //         return date;
    //     }
        
    //     function GetNepaliDateFromEnglishDate(adYear, adMonth, adDay) {
    //         var selectedDate = NepaliFunctions.AD2BS({ year: adYear, month: adMonth, day: adDay });
    //         var month = (selectedDate.month.toString().length == 2) ? selectedDate.month : '0' + selectedDate.month;
    //         var day = (selectedDate.day.toString().length == 2) ? selectedDate.day : '0' + selectedDate.day;
    //         var date = selectedDate.year + '-' + month + '-' + day;
    //         return date;
    //     }
        
    //     function GetAdDateFromNepaliDate(nepaliDate) {
    //         if (nepaliDate.trim()) {
    //             var aa = nepaliDate.split('-');
    //             var selectedDate = NepaliFunctions.BS2AD({ year: aa[0], month: aa[1], day: aa[2] });
    //             var adDate = new Date(${selectedDate.year}-${selectedDate.month}-${selectedDate.day});
    //             return adDate.toLocaleDateString('en-CA');
    //         }
    //     }
        
        
}
