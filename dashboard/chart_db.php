<?php

$series1 = pg_escape_string($_GET['series1']);
$series2 = pg_escape_string($_GET['series2']);

// $data_string["MTD_Cases"]=
// $data_string["MTD_Deaths"]=
// $data_string["Reg_Ave_Temp_NCR"]=
// $data_string["Reg_Ave_Rainfall_NCR"]=
// $data_string["GTrend_Dengue"]=
// $data_string["GTrend_Dengue_Fever"]=
// $data_string["GTrend_Dengue_Cure"]=
// $data_string["GTrend_Dengue_Med"]=
// $data_string["GTrend_Dengue_Sym"]=
// $data_string["Mort_Rate"]=
// $data_string["Pred_Cases_PctChg"]=
// $data_string["MTD_Cases_Fct"]=


$data_string["MTD_Cases"]="10435,4237,5274,5670,2984,7684,23058,35580,32650,50195,18757,3891,9157,9633,13019,11433.125,7087.5,10894,11112,39941,31609,34164,15842,28265,11391,9585,5457,7327,4473,5537,14828,17793,20896,20367,14173,20397,8758,6841,10443,6215,7321,10307,19203,58390,47407.5,35481.25,27369,29871";
$data_string["MTD_Deaths"]="29,10,14,22,11,30,80,100,93,140,59,10,35,30,54,42.5,27.5,78,45,149,147,185,91,212,68,62,25,34,33,28,65,98,113,131,75,79,46,28,62,35,28,79,88,289,198.75,147.083333333333,135,141";
$data_string["Reg_Ave_Temp_NCR"]="25.5,26.3,27.5666666666667,29.9666666666667,30.5333333333333,30.2,28.4666666666667,28.7666666666667,27.8666666666667,28.6,29,27.5333333333333,27.7666666666667,27.2666666666667,29.0666666666667,30.8666666666667,31,29.9,29.1,28.4333333333333,28.7333333333333,28.7666666666667,28.2,27.9666666666667,26.8,26.6666666666667,28.2333333333333,29.8666666666667,30.6,29.9333333333333,28.7333333333333,29,28.9333333333333,28.3333333333333,28.4,27.3,27.2,27.6666666666667,28.2,29.7,30.9,28.4333333333333,27.7333333333333,28.0333333333333,28.3666666666667,28.8666666666667,28.5333333333333,27.3666666666667";
$data_string["Reg_Ave_Rainfall_NCR"]="26.0666666666667,1.86666666666667,6.7,23.1,73.3333333333333,192.333333333333,464.133333333333,338.933333333333,392.1,198.066666666667,24.2,294.2,2.5,30.9,1.3,18.7666666666667,100.633333333333,180.833333333333,306.8,610.4,307.266666666667,211.233333333333,88.8,98.1666666666667,41.35,47.0333333333333,5.43333333333333,84.8,166.133333333333,230.45,405.236666666667,397.033333333333,417.736666666667,245.3,144.033333333333,81.9,43.1,1.16666666666667,26.1666666666667,40.9666666666667,50.3,630.933333333333,621.533333333333,485.433333333333,411.433333333333,147.933333333333,13.6333333333333,142.166666666667";
$data_string["GTrend_Dengue"]="0.1125,0.1025,0.07,0.0575,0.054,0.1,0.1525,0.202,0.295,0.34,0.23,0.1425,0.162,0.135,0.1025,0.075,0.06,0.11,0.2,0.29,0.23,0.18,0.16,0.12,0.112,0.0975,0.085,0.056,0.0625,0.1,0.144,0.1825,0.16,0.134,0.15,0.216,0.1725,0.1325,0.0825,0.058,0.0625,0.0975,0.198,0.2225,0.19,0.175,0.18,0.186";
$data_string["GTrend_Dengue_Fever"]="0.3025,0.225,0.152,0.135,0.154,0.21,0.36,0.45,0.595,0.6775,0.454,0.27,0.306,0.2625,0.185,0.115,0.128,0.185,0.39,0.455,0.45,0.324,0.28,0.205,0.206,0.1875,0.21,0.122,0.1475,0.18,0.27,0.3575,0.3125,0.29,0.2775,0.302,0.21,0.225,0.145,0.118,0.1275,0.1475,0.33,0.3975,0.338,0.3125,0.3475,0.384";
$data_string["GTrend_Dengue_Cure"]="0.1925,0.1875,0.078,0.06,0.07,0.1325,0.235,0.286,0.55,0.51,0.378,0.3625,0.37,0.1275,0.12,0.2025,0.086,0.2425,0.304,0.4225,0.3925,0.294,0.17,0.25,0.226,0.1725,0.1675,0.086,0.0275,0.0925,0.172,0.32,0.315,0.276,0.145,0.28,0.2725,0.1175,0.0975,0.116,0.0475,0.165,0.322,0.325,0.204,0.3125,0.2075,0.238";
$data_string["GTrend_Dengue_Med"]="0.18,0.1325,0.036,0.09,0.142,0.2625,0.2775,0.306,0.475,0.42,0.336,0.3325,0.272,0.3525,0.2125,0.12,0.096,0.2325,0.378,0.5375,0.245,0.326,0.2825,0.0775,0.12,0.035,0.125,0.064,0.1,0.2,0.248,0.3725,0.155,0.152,0.1125,0.204,0.0725,0.215,0.035,0.148,0,0.1175,0.192,0.3175,0.258,0.1025,0.215,0.21";
$data_string["GTrend_Dengue_Sym"]="0.1875,0.1525,0.114,0.0875,0.086,0.1325,0.255,0.302,0.46,0.4925,0.29,0.205,0.216,0.17,0.1175,0.0825,0.094,0.15,0.288,0.405,0.3575,0.238,0.1625,0.1625,0.136,0.115,0.0925,0.068,0.07,0.1175,0.2,0.21,0.19,0.168,0.175,0.208,0.165,0.145,0.0975,0.074,0.0725,0.115,0.254,0.2825,0.236,0.2025,0.21,0.254";
$data_string["Mort_Rate"]="0.00277910876856732,0.00236016049091338,0.00265453166477057,0.00388007054673721,0.00368632707774799,0.00390421655387819,0.00346951166623298,0.00281056773468241,0.00284839203675345,0.00278912242255205,0.00314549234952284,0.00257003341043434,0.00382221251501583,0.00311429461227032,0.00414778400798833,0.00371726890067239,0.00388007054673721,0.00715990453460621,0.00404967602591793,0.00373050249117448,0.00465057420354962,0.0054150567849198,0.00574422421411438,0.00750044224305678,0.00596962514265648,0.00646844027125717,0.00458127176104087,0.00464037122969838,0.0073775989268947,0.00505689001264222,0.00438359859724845,0.00550778395998426,0.00540773353751914,0.00643197329012618,0.00529175192266986,0.00387311859587194,0.00525234071705869,0.00409296886420114,0.00593699128602892,0.00563153660498793,0.00382461412375359,0.00766469389735131,0.00458261729938031,0.00494947765028258,0.00419237462426831,0.00414538195056074,0.00493258796448537,0.00472029727829668";
$data_string["Pred_Cases_PctChg"]="0,0,0,0,1.01354578737564,1.39307864001163,1.49260806854289,1.86971878596891,0.876893125638756,2.29956618575092,0.375284295780616,-0.353405739605838,1.5309115215781,1.1474646797028,0.91866137193095,0.803009691611741,1.47098523731929,1.13840067862703,2.04885536929731,2.40362880895601,0.528684602553741,0.517094431872006,1.01390491942365,1.51986552650304,0.586262941053938,0.652904855791275,1.10568802916217,1.2176981546875,0.444412961339643,1.27020538428748,2.06506308560954,1.3327482934848,1.14832768784204,0.95574540234913,1.04932522356394,1.02344423712784,1.00679267916713,-0.0112877540622709,1.62055696275336,0.351831003631195,1.07863397521347,2.45968027317883,1.10592843565535,2.03347065491863,1.16973987309414,0.862610437257156,1.333476143005,1.37190262051871";
$data_string["MTD_Cases_Fct"]="0,0,0,0,5746.80461441988,4156.94666179471,11469.2003986835,43111.9757668712,31199.8574102269,75080.8359647675,18837.395226708,-6628.8314577867,5956.7767304604,10507.3340720386,8849.46499581084,10454.3831750933,16817.9580914261,8068.41480976905,22320.2303931248,26709.1233251192,21116.1917105989,16344.8378970422,34639.0476671895,24077.7096708611,16570.7220288896,7437.23921231841,10598.0197595194,6644.97883012971,3256.21376773556,5681.6286839179,11434.25430502,19761.9916957926,20432.1945497734,19971.2559274874,21371.6068283268,14505.2751728129,20535.550276972,-98.8581500773685,11086.2301821957,3674.17117092057,6703.71015595173,18007.3192799422,11398.8043862996,39048.7369864025,68301.1111899671,40894.2043042686,47313.4003989963,37547.6028209765";


$result_string['labels'] = ["1/31/2015","2/28/2015","3/31/2015","4/30/2015","5/31/2015","6/30/2015","7/31/2015","8/31/2015","9/30/2015","10/31/2015","11/30/2015","12/31/2015","1/31/2016","2/29/2016","3/31/2016","4/30/2016","5/31/2016","6/30/2016","7/31/2016","8/31/2016","9/30/2016","10/31/2016","11/30/2016","12/31/2016","1/31/2017","2/28/2017","3/31/2017","4/30/2017","5/31/2017","6/30/2017","7/31/2017","8/31/2017","9/30/2017","10/31/2017","11/30/2017","12/31/2017","1/31/2018","2/28/2018","3/31/2018","4/30/2018","5/31/2018","6/30/2018","7/31/2018","8/31/2018","9/30/2018","10/31/2018","11/30/2018","12/31/2018"];
$result_string[$series1] = $data_string[$series1];
$result_string[$series2] = $data_string[$series2];

echo json_encode($result_string);

exit();
