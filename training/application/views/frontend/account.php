  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <STYLE> 


*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f5f6fa;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],

input[type="email"],
input[type="number"],

input[type="tel"],


textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: black;
  background-color: #CD5C5C;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid white;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #CD5C5C;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}

    </STYLE>
    </head>
    <body>

      <form action="index.html" method="post">
    
        <h1>Sign Up</h1>
        
        <fieldset>

          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">

          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone">
           <select name="country" class="form-control countries" id="countries" required="required">
    <option value="" selected="">Country</option>


          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
          
         
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
            <label>Picture</label>
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                    <input type="file" required name="file_upload" />
         
            
              
                </label><br><label>Gender:</label>
            
                <label>
                    <input type="radio" value="f" name="gender"> Female</label><label>
                    <input value="m" type="radio" name="gender"> Male</label>
                    <br>
        <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday"><br><br><br><br>
          <label for="bio">Biography:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
       
        <button type="submit">Sign Up</button>
        <h1><span><a href="<?php echo base_url();?>user/setting">Edit Profile</a></span></h1>
      </form>
      
    </body><script type="text/javascript">
      function countriesDropdown(container){
  var countries = {
    AFG: "Afghanistan",
    ALB: "Albania",
    ALG: "Algeria",
    AND: "Andorra",
    ANG: "Angola",
    ANT: "Antigua and Barbuda",
    ARG: "Argentina",
    ARM: "Armenia",
    ARU: "Aruba",
    ASA: "American Samoa",
    AUS: "Australia",
    AUT: "Austria",
    AZE: "Azerbaijan",
    BAH: "Bahamas",
    BAN: "Bangladesh",
    BAR: "Barbados",
    BDI: "Burundi",
    BEL: "Belgium",
    BEN: "Benin",
    BER: "Bermuda",
    BHU: "Bhutan",
    BIH: "Bosnia and Herzegovina",
    BIZ: "Belize",
    BLR: "Belarus",
    BOL: "Bolivia",
    BOT: "Botswana",
    BRA: "Brazil",
    BRN: "Bahrain",
    BRU: "Brunei",
    BUL: "Bulgaria",
    BUR: "Burkina Faso",
    CAF: "Central African Republic",
    CAM: "Cambodia",
    CAN: "Canada",
    CAY: "Cayman Islands",
    CGO: "Congo",
    CHA: "Chad",
    CHI: "Chile",
    CHN: "China",
    CIV: "Cote d'Ivoire",
    CMR: "Cameroon",
    COD: "DR Congo",
    COK: "Cook Islands",
    COL: "Colombia",
    COM: "Comoros",
    CPV: "Cape Verde",
    CRC: "Costa Rica",
    CRO: "Croatia",
    CUB: "Cuba",
    CYP: "Cyprus",
    CZE: "Czech Republic",
    DEN: "Denmark",
    DJI: "Djibouti",
    DMA: "Dominica",
    DOM: "Dominican Republic",
    ECU: "Ecuador",
    EGY: "Egypt",
    ERI: "Eritrea",
    ESA: "El Salvador",
    ESP: "Spain",
    EST: "Estonia",
    ETH: "Ethiopia",
    FIJ: "Fiji",
    FIN: "Finland",
    FRA: "France",
    FSM: "Micronesia",
    GAB: "Gabon",
    GAM: "Gambia",
    GBR: "Great Britain",
    GBS: "Guinea-Bissau",
    GEO: "Georgia",
    GEQ: "Equatorial Guinea",
    GER: "Germany",
    GHA: "Ghana",
    GRE: "Greece",
    GRN: "Grenada",
    GUA: "Guatemala",
    GUI: "Guinea",
    GUM: "Guam",
    GUY: "Guyana",
    HAI: "Haiti",
    HKG: "Hong Kong",
    HON: "Honduras",
    HUN: "Hungary",
    INA: "Indonesia",
    IND: "India",
    IRI: "Iran",
    IRL: "Ireland",
    IRQ: "Iraq",
    ISL: "Iceland",
    ISR: "Israel",
    ISV: "Virgin Islands",
    ITA: "Italy",
    IVB: "British Virgin Islands",
    JAM: "Jamaica",
    JOR: "Jordan",
    JPN: "Japan",
    KAZ: "Kazakhstan",
    KEN: "Kenya",
    KGZ: "Kyrgyzstan",
    KIR: "Kiribati",
    KOR: "South Korea",
    KOS: "Kosovo",
    KSA: "Saudi Arabia",
    KUW: "Kuwait",
    LAO: "Laos",
    LAT: "Latvia",
    LBA: "Libya",
    LBR: "Liberia",
    LCA: "Saint Lucia",
    LES: "Lesotho",
    LIB: "Lebanon",
    LIE: "Liechtenstein",
    LTU: "Lithuania",
    LUX: "Luxembourg",
    MAD: "Madagascar",
    MAR: "Morocco",
    MAS: "Malaysia",
    MAW: "Malawi",
    MDA: "Moldova",
    MDV: "Maldives",
    MEX: "Mexico",
    MGL: "Mongolia",
    MHL: "Marshall Islands",
    MKD: "Macedonia",
    MLI: "Mali",
    MLT: "Malta",
    MNE: "Montenegro",
    MON: "Monaco",
    MOZ: "Mozambique",
    MRI: "Mauritius",
    MTN: "Mauritania",
    MYA: "Myanmar",
    NAM: "Namibia",
    NCA: "Nicaragua",
    NED: "Netherlands",
    NEP: "Nepal",
    NGR: "Nigeria",
    NIG: "Niger",
    NOR: "Norway",
    NRU: "Nauru",
    NZL: "New Zealand",
    OMA: "Oman",
    PAK: "Pakistan",
    PAN: "Panama",
    PAR: "Paraguay",
    PER: "Peru",
    PHI: "Philippines",
    PLE: "Palestine",
    PLW: "Palau",
    PNG: "Papua New Guinea",
    POL: "Poland",
    POR: "Portugal",
    PRK: "North Korea",
    PUR: "Puerto Rico",
    QAT: "Qatar",
    ROU: "Romania",
    RSA: "South Africa",
    RUS: "Russia",
    RWA: "Rwanda",
    SAM: "Samoa",
    SEN: "Senegal",
    SEY: "Seychelles",
    SIN: "Singapore",
    SKN: "Saint Kitts and Nevis",
    SLE: "Sierra Leone",
    SLO: "Slovenia",
    SMR: "San Marino",
    SOL: "Solomon Islands",
    SOM: "Somalia",
    SRB: "Serbia",
    SRI: "Sri Lanka",
    SSD: "South Sudan",
    STP: "Sao Tome and Principe",
    SUD: "Sudan",
    SUI: "Switzerland",
    SUR: "Suriname",
    SVK: "Slovakia",
    SWE: "Sweden",
    SWZ: "Swaziland",
    SYR: "Syria",
    TAN: "Tanzania",
    TGA: "Tonga",
    THA: "Thailand",
    TJK: "Tajikistan",
    TKM: "Turkmenistan",
    TLS: "Timor-Leste",
    TOG: "Togo",
    TPE: "Chinese Taipei",
    TTO: "Trinidad and Tobago",
    TUN: "Tunisia",
    TUR: "Turkey",
    TUV: "Tuvalu",
    UAE: "United Arab Emirates",
    UGA: "Uganda",
    UKR: "Ukraine",
    URU: "Uruguay",
    USA: "United States",
    UZB: "Uzbekistan",
    VAN: "Vanuatu",
    VEN: "Venezuela",
    VIE: "Vietnam",
    VIN: "Saint Vincent and the Grenadines",
    YEM: "Yemen",
    ZAM: "Zambia",
    ZAN: "Zanzibar",
    ZIM: "Zimbabwe"
    }
  var out = "<select><option rel=''>Country</option>";
  for (var key in countries) {
    out += "<option rel='" + key + "'>" + countries[key] + "</option>";
  }
  out += "</select>";

  document.getElementById(container).innerHTML = out;
}
countriesDropdown("countries");





function pincodeDropdown(containernew){
  var pincode = {
    AFG: "+93",
    ALB: "+355",
    ALG: "+213",
    AND: "+376",
    ANG: "+244",
    ANT: "+1-268",
    ARG: "+54",
    ARM: "+374",
    ARU: "+297",
    ASA: "+1-684",
    AUS: "+61",
    AUT: "+43",
    AZE: "+994",
    BAH: "+1-242",
    BAN: "+880",
    BAR: "+1-246",
    BDI: "+257",
    BEL: "+32",
    BEN: "+ 229",
    BER: "+1-441",
    BHU: "+975",
    BIH: "+387",
    BIZ: "+501",
    BLR: "+375",
    BOL: "+591",
    BOT: "+267",
    BRA: "+55",
    BRN: "+973",
    BRU: "+673",
    BUL: "+359",
    BUR: "+226",
    CAF: "236",
    CAM: "+855",
    CAN: "+1",
    CAY: "+1-345",
    CGO: "+242",
    CHA: "+235",
    CHI: "+56",
    CHN: "+86",
    CIV: "Cote d'Ivoire",
    CMR: "+237",
    COD: "+243",
    COK: "+682",
    COL: "+57",
    COM: "+269",
    CPV: "+238",
    CRC: "+506",
    CRO: "+385",
    CUB: "+53",
    CYP: "+357",
    CZE: "+420",
    DEN: "+45",
    DJI: "+253",
    DMA: "+1 767",
    DOM: "+1 809",
    ECU: "+593",
    EGY: "+20",
    ERI: "+291",
    ESA: "+503",
    ESP: "+34",
    EST: "+372",
    ETH: "+251",
    FIJ: "+679",
    FIN: "+358",
    FRA: "+33",
    FSM: "+691",
    GAB: "+241",
    GAM: "+220",
    GBR: "+44",
    GBS: "+245",
    GEO: "+995",
    GEQ: "+240",
    GER: "+49",
    GHA: "+233",
    GRE: "+30",
    GRN: "+1 473",
    GUA: "+502",
    GUI: "+224",
    GUM: "+1 671",
    GUY: "+592",
    HAI: "+509",
    HKG: "+852",
    HON: "+504",
    HUN: "+36",
    INA: "+62",
    IND: "+91",
    IRI: "+98",
    IRL: "+353",
    IRQ: "+964",
    ISL: "+354",
    ISR: "+972",
    ISV: "+00 1",
    ITA: "+39",
    IVB: "+1 284",
    JAM: "+1 876",
    JOR: "+962",
    JPN: "+81",
    KAZ: "+7 6",
    KEN: "+254",
    KGZ: "+996",
    KIR: "+686",
    KOR: "+82",
    KOS: "+383",
    KSA: "+966",
    KUW: "+965",
    LAO: "+856",
    LAT: "+371",
    LBA: "+218",
    LBR: "+231",
    LCA: "+1 758",
    LES: "+266",
    LIB: "+961",
    LIE: "+423",
    LTU: "+370",
    LUX: "+352",
    MAD: "+261",
    MAR: "+212",
    MAS: "+60",
    MAW: "+265",
    MDA: "+373",
    MDV: "+960",
    MEX: "+52",
    MGL: "+976",
    MHL: "+692",
    MKD: "+389",
    MLI: "+223",
    MLT: "+356",
    MNE: "+382",
    MON: "+377",
    MOZ: "+258",
    MRI: "+230",
    MTN: "+222",
    MYA: "+95",
    NAM: "+264",
    NCA: "+505",
    NED: "+31",
    NEP: "+977",
    NGR: "+234",
    NIG: "+227",
    NOR: "+47",
    NRU: "+674",
    NZL: "+64",
    OMA: "+968",
    PAK: "+92",
    PAN: "+507",
    PAR: "+595",
    PER: "+51",
    PHI: "+63",
    PLE: "+970",
    PLW: "+680",
    PNG: "+675",
    POL: "+48",
    POR: "+351",
    PRK: "+850",
    PUR: "+1 787",
    QAT: "+974",
    ROU: "+40",
    RSA: "+27",
    RUS: "+7",
    RWA: "+250",
    SAM: "+685",
    SEN: "+221",
    SEY: "+248",
    SIN: "+65",
    SKN: "+1 869",
    SLE: "+232",
    SLO: "+386",
    SMR: "+378",
    SOL: "+677",
    SOM: "+252",
    SRB: "+381",
    SRI: "+94",
    SSD: "+211",
    STP: "+239",
    SUD: "+249",
    SUI: "+41",
    SUR: "+597",
    SVK: "+421",
    SWE: "+46",
    SWZ: "+268",
    SYR: "+963",
    TAN: "+255",
    TGA: "+676",
    THA: "+66",
    TJK: "+992",
    TKM: "+993",
    TLS: "+670",
    TOG: "+228",
    TPE: "+886",
    TTO: "+1 868",
    TUN: "+216",
    TUR: "+90",
    TUV: "+688",
    UAE: "+971",
    UGA: "+256",
    UKR: "+380",
    URU: "+598",
    USA: "+1",
    UZB: "+998",
    VAN: "+678",
    VEN: "+58",
    VIE: "+84",
    VIN: "+1 784",
    YEM: "+967",
    ZAM: "+260",
    ZAN: "+255 24",
    ZIM: "+263"
    }
  var pinout = "<select><option class=''>Pin</option>";
  for (var i in pincode) {
    pinout += "<option class='" + i + "'>" + pincode[i] + "</option>";
  }
  pinout += "</select>";document.getElementById(containernew).innerHTML = pinout;
}

pincodeDropdown("pincode");


    </script>
</html>