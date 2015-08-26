function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
	maxZoom: 14,
    center: {lat: 49.531990, lng: 19.226117},
    mapTypeId: google.maps.MapTypeId.TERRAIN,
  });

	var halaLipowska = {lat: 49.531990, lng: 19.226117};
	

	var marker = new google.maps.Marker({
		position: halaLipowska,
		map: map,
		title: 'Hala Lipowska',
  	});

	
//SZLAKI TURYSTYCZNE---------------------------------------------------------------------

var myCoordinates = [
new google.maps.LatLng(49.503963,19.182880),
new google.maps.LatLng(49.505412,19.183717),
new google.maps.LatLng(49.506206,19.184167),
new google.maps.LatLng(49.506708,19.184189),
new google.maps.LatLng(49.507377,19.183996),
new google.maps.LatLng(49.508143,19.184597),
new google.maps.LatLng(49.508491,19.185369),
new google.maps.LatLng(49.508895,19.186785),
new google.maps.LatLng(49.509007,19.187300),
new google.maps.LatLng(49.509940,19.189725),
new google.maps.LatLng(49.510121,19.190519),
new google.maps.LatLng(49.510205,19.190884),
new google.maps.LatLng(49.510581,19.191442),
new google.maps.LatLng(49.510707,19.191656),
new google.maps.LatLng(49.510762,19.192064),
new google.maps.LatLng(49.510609,19.193501),
new google.maps.LatLng(49.510721,19.195132),
new google.maps.LatLng(49.510832,19.196270),
new google.maps.LatLng(49.511250,19.198694),
new google.maps.LatLng(49.511807,19.201033),
new google.maps.LatLng(49.512072,19.201484),
new google.maps.LatLng(49.512992,19.201398),
new google.maps.LatLng(49.513214,19.200926),
new google.maps.LatLng(49.513312,19.200540),
new google.maps.LatLng(49.513953,19.200368),
new google.maps.LatLng(49.514817,19.200046),
new google.maps.LatLng(49.515290,19.199853),
new google.maps.LatLng(49.515708,19.199681),
new google.maps.LatLng(49.516043,19.199016),
new google.maps.LatLng(49.516433,19.198222),
new google.maps.LatLng(49.516795,19.197772),
new google.maps.LatLng(49.517881,19.197557),
new google.maps.LatLng(49.519219,19.197364),
new google.maps.LatLng(49.520528,19.198029),
new google.maps.LatLng(49.521601,19.199102),
new google.maps.LatLng(49.521893,19.199595),
new google.maps.LatLng(49.521838,19.200840),
new google.maps.LatLng(49.521782,19.201291),
new google.maps.LatLng(49.521726,19.202900),
new google.maps.LatLng(49.521907,19.203393),
new google.maps.LatLng(49.522214,19.203608),
new google.maps.LatLng(49.523175,19.203866),
new google.maps.LatLng(49.524888,19.204509),
new google.maps.LatLng(49.525167,19.204810),
new google.maps.LatLng(49.525417,19.205582),
new google.maps.LatLng(49.525389,19.206183),
new google.maps.LatLng(49.525320,19.207234),
new google.maps.LatLng(49.525264,19.207771),
new google.maps.LatLng(49.524888,19.209487),
new google.maps.LatLng(49.524582,19.210324),
new google.maps.LatLng(49.524540,19.210818),
new google.maps.LatLng(49.524512,19.211440),
new google.maps.LatLng(49.524958,19.212062),
new google.maps.LatLng(49.525877,19.213092),
new google.maps.LatLng(49.527200,19.214401),
new google.maps.LatLng(49.527270,19.215002),
new google.maps.LatLng(49.527367,19.215839),
new google.maps.LatLng(49.527381,19.218585),
new google.maps.LatLng(49.527158,19.219208),
new google.maps.LatLng(49.526545,19.219980),
new google.maps.LatLng(49.525947,19.220881),
new google.maps.LatLng(49.525320,19.221718),
new google.maps.LatLng(49.525222,19.222255),
new google.maps.LatLng(49.525515,19.222920),
new google.maps.LatLng(49.525877,19.224229),
new google.maps.LatLng(49.525947,19.225044),
new google.maps.LatLng(49.526072,19.227512),
new google.maps.LatLng(49.525779,19.229443),
new google.maps.LatLng(49.525445,19.230731),
new google.maps.LatLng(49.525362,19.231696),
new google.maps.LatLng(49.525403,19.233284),
new google.maps.LatLng(49.525515,19.233863),
new google.maps.LatLng(49.525626,19.234507),
new google.maps.LatLng(49.525821,19.234657),
new google.maps.LatLng(49.526142,19.234550),
new google.maps.LatLng(49.526532,19.233220),
new google.maps.LatLng(49.526894,19.232168),
new google.maps.LatLng(49.527033,19.231718),
new google.maps.LatLng(49.528509,19.230387),
new google.maps.LatLng(49.528844,19.230001),
new google.maps.LatLng(49.528913,19.229186),
new google.maps.LatLng(49.529025,19.228671),
new google.maps.LatLng(49.529178,19.228263),
new google.maps.LatLng(49.529986,19.227641),
new google.maps.LatLng(49.530292,19.227126),
new google.maps.LatLng(49.530515,19.226718),
new google.maps.LatLng(49.530710,19.226353),
new google.maps.LatLng(49.531559,19.225731),
new google.maps.LatLng(49.532144,19.226460),
new google.maps.LatLng(49.532297,19.227512),
new google.maps.LatLng(49.532646,19.228070),
new google.maps.LatLng(49.532952,19.229035),
new google.maps.LatLng(49.533356,19.229636),
new google.maps.LatLng(49.533899,19.229743),
new google.maps.LatLng(49.534943,19.231610),
new google.maps.LatLng(49.535626,19.233198),
new google.maps.LatLng(49.536406,19.234614),
new google.maps.LatLng(49.536350,19.235430),
new google.maps.LatLng(49.536587,19.237103),
new google.maps.LatLng(49.537116,19.239421),
new google.maps.LatLng(49.537366,19.239829),
new google.maps.LatLng(49.537965,19.241223),
new google.maps.LatLng(49.540068,19.239614),
new google.maps.LatLng(49.540360,19.239185),
new google.maps.LatLng(49.540639,19.238670),
new google.maps.LatLng(49.541404,19.238477),
new google.maps.LatLng(49.542212,19.239035),
new google.maps.LatLng(49.542602,19.240086),
new google.maps.LatLng(49.543215,19.242167),
new google.maps.LatLng(49.543354,19.243112),
new google.maps.LatLng(49.543312,19.244034),
new google.maps.LatLng(49.543173,19.245665),
new google.maps.LatLng(49.543340,19.246824),
new google.maps.LatLng(49.543535,19.248755),
new google.maps.LatLng(49.543479,19.249420),
new google.maps.LatLng(49.543368,19.249935),
new google.maps.LatLng(49.543340,19.250600),
new google.maps.LatLng(49.543409,19.251373),
new google.maps.LatLng(49.543980,19.253497),
new google.maps.LatLng(49.544760,19.255900),
new google.maps.LatLng(49.545512,19.257317),
new google.maps.LatLng(49.545637,19.257724),
new google.maps.LatLng(49.546862,19.259441),
new google.maps.LatLng(49.547544,19.260793),
new google.maps.LatLng(49.547920,19.261630),
new google.maps.LatLng(49.548435,19.262252),
new google.maps.LatLng(49.549675,19.263132),
new google.maps.LatLng(49.551484,19.264612),
new google.maps.LatLng(49.552139,19.265084),
new google.maps.LatLng(49.553614,19.266372),
new google.maps.LatLng(49.555493,19.267981),
new google.maps.LatLng(49.556134,19.269032),
new google.maps.LatLng(49.557470,19.271801),
new google.maps.LatLng(49.557957,19.272788),
new google.maps.LatLng(49.559558,19.273882),
new google.maps.LatLng(49.560741,19.274805),
new google.maps.LatLng(49.561659,19.276693),
new google.maps.LatLng(49.562174,19.277680),
new google.maps.LatLng(49.563566,19.278989),
new google.maps.LatLng(49.565222,19.280684),
new google.maps.LatLng(49.566906,19.281671),
new google.maps.LatLng(49.567992,19.283795),
new google.maps.LatLng(49.569230,19.286177),
new google.maps.LatLng(49.570942,19.288516),
new google.maps.LatLng(49.571916,19.290061),
new google.maps.LatLng(49.573864,19.292979),
new google.maps.LatLng(49.575520,19.294095),
new google.maps.LatLng(49.575854,19.294610),
new google.maps.LatLng(49.575937,19.295104)
];
	
	
	

  var bluePath = new google.maps.Polyline({
    path: myCoordinates,
    geodesic: true,
    strokeColor: 'blue',
    strokeOpacity: 0.7,
    strokeWeight: 2
  });

  bluePath.setMap(map);


var myCoordinatesYellow = [
new google.maps.LatLng(49.513089,19.116940),
new google.maps.LatLng(49.509439,19.112906),
new google.maps.LatLng(49.508742,19.111104),
new google.maps.LatLng(49.507209,19.113164),
new google.maps.LatLng(49.506067,19.113765),
new google.maps.LatLng(49.505287,19.114580),
new google.maps.LatLng(49.504701,19.116039),
new google.maps.LatLng(49.503810,19.116640),
new google.maps.LatLng(49.502639,19.119902),
new google.maps.LatLng(49.501552,19.124665),
new google.maps.LatLng(49.501636,19.126682),
new google.maps.LatLng(49.501552,19.129386),
new google.maps.LatLng(49.502249,19.133034),
new google.maps.LatLng(49.503308,19.135823),
new google.maps.LatLng(49.504478,19.138613),
new google.maps.LatLng(49.503419,19.142346),
new google.maps.LatLng(49.503419,19.145780),
new google.maps.LatLng(49.501246,19.146767),
new google.maps.LatLng(49.498876,19.151144),
new google.maps.LatLng(49.497762,19.150414),
new google.maps.LatLng(49.497734,19.150629),
new google.maps.LatLng(49.498765,19.152346),
new google.maps.LatLng(49.499824,19.152303),
new google.maps.LatLng(49.499908,19.152474),
new google.maps.LatLng(49.499044,19.153247),
new google.maps.LatLng(49.498876,19.154277),
new google.maps.LatLng(49.500911,19.156723),
new google.maps.LatLng(49.503196,19.157710),
new google.maps.LatLng(49.504618,19.158783),
new google.maps.LatLng(49.508463,19.162345),
new google.maps.LatLng(49.511779,19.167709),
new google.maps.LatLng(49.512671,19.169512),
new google.maps.LatLng(49.513925,19.171658),
new google.maps.LatLng(49.516238,19.175005),
new google.maps.LatLng(49.516656,19.176378),
new google.maps.LatLng(49.517965,19.177151),
new google.maps.LatLng(49.520110,19.179511),
new google.maps.LatLng(49.520667,19.179468),
new google.maps.LatLng(49.522840,19.177794),
new google.maps.LatLng(49.524595,19.179983),
new google.maps.LatLng(49.526128,19.182816),
new google.maps.LatLng(49.527019,19.185390),
new google.maps.LatLng(49.527019,19.188781),
new google.maps.LatLng(49.527493,19.190025),
new google.maps.LatLng(49.527214,19.192557),
new google.maps.LatLng(49.526406,19.195991),
new google.maps.LatLng(49.525821,19.198008),
new google.maps.LatLng(49.527660,19.201097),
new google.maps.LatLng(49.528467,19.202600),
new google.maps.LatLng(49.528495,19.204402),
new google.maps.LatLng(49.528495,19.208050),
new google.maps.LatLng(49.528495,19.209251),
new google.maps.LatLng(49.530501,19.213972),
new google.maps.LatLng(49.530417,19.215431),
new google.maps.LatLng(49.529749,19.220796),
new google.maps.LatLng(49.530222,19.222941),
new google.maps.LatLng(49.531302,19.225055),
new google.maps.LatLng(49.531831,19.225152),
new google.maps.LatLng(49.532534,19.226450),
new google.maps.LatLng(49.532931,19.227877),
new google.maps.LatLng(49.533565,19.229014),
new google.maps.LatLng(49.534261,19.229411),
new google.maps.LatLng(49.536195,19.233183),
new google.maps.LatLng(49.536573,19.234132),
new google.maps.LatLng(49.536712,19.234636),
new google.maps.LatLng(49.537687,19.235623),
new google.maps.LatLng(49.537937,19.235773),
new google.maps.LatLng(49.538773,19.234893),
new google.maps.LatLng(49.539525,19.234486),
new google.maps.LatLng(49.541725,19.233820),
new google.maps.LatLng(49.542825,19.234078),
new google.maps.LatLng(49.545373,19.236224),
new google.maps.LatLng(49.546626,19.237361),
new google.maps.LatLng(49.547767,19.238434),
new google.maps.LatLng(49.549271,19.238713),
new google.maps.LatLng(49.549981,19.239357),
new google.maps.LatLng(49.550900,19.240580),
new google.maps.LatLng(49.553433,19.241266),
new google.maps.LatLng(49.553809,19.241095),
new google.maps.LatLng(49.554756,19.241331),
new google.maps.LatLng(49.555229,19.241095),
new google.maps.LatLng(49.555730,19.241095),
new google.maps.LatLng(49.556050,19.241352),
new google.maps.LatLng(49.556941,19.241030),
new google.maps.LatLng(49.558834,19.240901),
new google.maps.LatLng(49.560462,19.241824)
];
	
	

  var yellowPath = new google.maps.Polyline({
    path: myCoordinatesYellow,
    geodesic: true,
    strokeColor: 'yellow',
    strokeOpacity: 0.7,
    strokeWeight: 2
  });

  yellowPath.setMap(map);
	
var myCoordinatesRed = [
new google.maps.LatLng(49.588542,19.133849),
new google.maps.LatLng(49.588820,19.134150),
new google.maps.LatLng(49.590211,19.133592),
new google.maps.LatLng(49.591964,19.134235),
new google.maps.LatLng(49.592144,19.134965),
new google.maps.LatLng(49.591978,19.137690),
new google.maps.LatLng(49.590475,19.141595),
new google.maps.LatLng(49.589835,19.143076),
new google.maps.LatLng(49.588681,19.145844),
new google.maps.LatLng(49.588055,19.151423),
new google.maps.LatLng(49.587791,19.155350),
new google.maps.LatLng(49.587596,19.155757),
new google.maps.LatLng(49.587095,19.158998),
new google.maps.LatLng(49.587471,19.161658),
new google.maps.LatLng(49.587401,19.164577),
new google.maps.LatLng(49.586775,19.166100),
new google.maps.LatLng(49.583242,19.171271),
new google.maps.LatLng(49.580529,19.174404),
new google.maps.LatLng(49.578915,19.175606),
new google.maps.LatLng(49.576730,19.179618),
new google.maps.LatLng(49.576146,19.182429),
new google.maps.LatLng(49.577023,19.185820),
new google.maps.LatLng(49.579416,19.194746),
new google.maps.LatLng(49.579750,19.197128),
new google.maps.LatLng(49.578539,19.199767),
new google.maps.LatLng(49.577997,19.201055),
new google.maps.LatLng(49.577343,19.203501),
new google.maps.LatLng(49.577412,19.204252),
new google.maps.LatLng(49.581614,19.212685),
new google.maps.LatLng(49.581377,19.213951),
new google.maps.LatLng(49.581127,19.214272),
new google.maps.LatLng(49.578567,19.214230),
new google.maps.LatLng(49.577621,19.214187),
new google.maps.LatLng(49.575756,19.216826),
new google.maps.LatLng(49.575687,19.217641),
new google.maps.LatLng(49.574198,19.219444),
new google.maps.LatLng(49.572403,19.223242),
new google.maps.LatLng(49.572097,19.225259),
new google.maps.LatLng(49.571679,19.225430),
new google.maps.LatLng(49.570037,19.224873),
new google.maps.LatLng(49.568646,19.223928),
new google.maps.LatLng(49.567644,19.223928),
new google.maps.LatLng(49.568061,19.225817),
new google.maps.LatLng(49.567755,19.226546),
new google.maps.LatLng(49.566057,19.228864),
new google.maps.LatLng(49.565111,19.229164),
new google.maps.LatLng(49.564610,19.231353),
new google.maps.LatLng(49.562968,19.233885),
new google.maps.LatLng(49.560212,19.232855),
new google.maps.LatLng(49.558931,19.231868),
new google.maps.LatLng(49.558514,19.229593),
new google.maps.LatLng(49.558152,19.228907),
new google.maps.LatLng(49.556231,19.230709),
new google.maps.LatLng(49.554561,19.232554),
new google.maps.LatLng(49.553391,19.233370),
new google.maps.LatLng(49.552417,19.235687),
new google.maps.LatLng(49.550886,19.235001),
new google.maps.LatLng(49.548881,19.235644),
new google.maps.LatLng(49.546765,19.237361),
new google.maps.LatLng(49.546570,19.237747),
new google.maps.LatLng(49.543173,19.234786),
new google.maps.LatLng(49.541947,19.234314),
new google.maps.LatLng(49.540555,19.234571),
new google.maps.LatLng(49.538884,19.235301),
new google.maps.LatLng(49.538049,19.236031),
new google.maps.LatLng(49.537687,19.236073),
new google.maps.LatLng(49.536600,19.235001),
new google.maps.LatLng(49.534456,19.236288),
new google.maps.LatLng(49.533760,19.238048),
new google.maps.LatLng(49.533704,19.238605),
new google.maps.LatLng(49.532757,19.242768),
new google.maps.LatLng(49.532033,19.248648),
new google.maps.LatLng(49.531949,19.252853),
new google.maps.LatLng(49.531754,19.254484),
new google.maps.LatLng(49.531197,19.260707)
];
	
  var redPath = new google.maps.Polyline({
    path: myCoordinatesRed,
    geodesic: true,
    strokeColor: 'red',
    strokeOpacity: 0.7,
    strokeWeight: 2
  });

  redPath.setMap(map);
	
}

window.onload = initMap();