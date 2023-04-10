<!DOCTYPE html>
<html>
<head>
    <title>DigiMart</title>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    
    <style>
        body
        {background:linear-gradient(45deg,white ,rgb(206, 129, 142));
            font-weight: 625;
            color: black;
            background-repeat: no-repeat;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        form
        {width: 60%;
        margin: 20px auto 0;
        max-width: 400px;
        min-width: 300px;}
        
        label
        {display: block;
            width: 100%;
            font-size: 17px;
        }

        input
        {width: 100%;
        background-color: rgb(206, 129, 142);
        
        border: none;
        height: 20px;}
        textarea{background-color:rgb(206, 129, 142);
            width: 100%
        };
        
        h1,h4
        {text-align: center;
        }
        
        header
        {background-color: rgb(206, 129, 142);
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        height: 50px;
        display: block;}
        h1,h3{text-align: center;
        font-size: 200%;}
        footer
        {
        margin: 40px  ;
        margin-left: 45%;
        }
        
        button
        {background-color: rgb(206,129,142);
        border: 1px solid rgb(206, 129, 142);
        height: 24px;
        font-weight: 600;}
        
        #number
        {width: 75%; }
        
        select
        {max-width: 20%;margin-right: 4%;
        background-color: rgb(206, 129, 142);border: 1px solid rgb(206, 129, 142);
        height: 20px;}
        
        #term{
        max-width: 10%;
        background-color: rgb(206, 129, 142);
        }
        fieldset{width: 50%;
        margin: 0 AUTO;
        max-width: 750px;
        border: 2px solid rgb(206, 129, 142);}
        
        
    </style>
</head>
<body >
<header>
<img src="img/g23.png" height="40px"></header><br><br>


<h3>Please fill out the following details</h4>
<fieldset><legend><h1>SIGN UP!</h1></legend>
    <form action="" method="post">
        <label for="fname">First Name<input type="text" name="first name" id="fname" required></label>
        <label for="lname">Last Name<input type="text" name="last name" id="lname" required></label>
        <label for="email">Email id<input type="email" name="email" id="email" required></label>
        <label for="address">Address <br><textarea name="address" id="address" cols="48" rows="10" required></textarea></label>
        <label for="number">Mobile Number <br>
            <select name="countryCode" autocomplete="off" data-a-touch-header="Country/Region Code" id="auth-country-picker" tabindex="0" data-action="a-dropdown-select" class="a-native-dropdown a-declarative">
  
    
    
                <option data-calling-code="93" data-country-code="AF" value="AF" data-a-html-content="Afghanistan +93">
                  
                  AF +93
                </option>
              
                
                
                <option data-calling-code="355" data-country-code="AL" value="AL" data-a-html-content="Albania +355">
                  
                  AL +355
                </option>
              
                
                
                <option data-calling-code="213" data-country-code="DZ" value="DZ" data-a-html-content="Algeria +213">
                  
                  DZ +213
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="AS" value="AS" data-a-html-content="American Samoa +1">
                  
                  AS +1
                </option>
              
                
                
                <option data-calling-code="376" data-country-code="AD" value="AD" data-a-html-content="Andorra +376">
                  
                  AD +376
                </option>
              
                
                
                <option data-calling-code="244" data-country-code="AO" value="AO" data-a-html-content="Angola +244">
                  
                  AO +244
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="AG" value="AG" data-a-html-content="Antigua &amp; Barbuda +1">
                  
                  AG +1
                </option>
              
                
                
                <option data-calling-code="54" data-country-code="AR" value="AR" data-a-html-content="Argentina +54">
                  
                  AR +54
                </option>
              
                
                
                <option data-calling-code="374" data-country-code="AM" value="AM" data-a-html-content="Armenia +374">
                  
                  AM +374
                </option>
              
                
                
                <option data-calling-code="297" data-country-code="AW" value="AW" data-a-html-content="Aruba +297">
                  
                  AW +297
                </option>
              
                
                
                <option data-calling-code="61" data-country-code="AU" value="AU" data-a-html-content="Australia +61">
                  
                  AU +61
                </option>
              
                
                
                <option data-calling-code="43" data-country-code="AT" value="AT" data-a-html-content="Austria +43">
                  
                  AT +43
                </option>
              
                
                
                <option data-calling-code="994" data-country-code="AZ" value="AZ" data-a-html-content="Azerbaijan +994">
                  
                  AZ +994
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="BS" value="BS" data-a-html-content="Bahamas +1">
                  
                  BS +1
                </option>
              
                
                
                <option data-calling-code="973" data-country-code="BH" value="BH" data-a-html-content="Bahrain +973">
                  
                  BH +973
                </option>
              
                
                
                <option data-calling-code="880" data-country-code="BD" value="BD" data-a-html-content="Bangladesh +880">
                  
                  BD +880
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="BB" value="BB" data-a-html-content="Barbados +1">
                  
                  BB +1
                </option>
              
                
                
                <option data-calling-code="375" data-country-code="BY" value="BY" data-a-html-content="Belarus +375">
                  
                  BY +375
                </option>
              
                
                
                <option data-calling-code="32" data-country-code="BE" value="BE" data-a-html-content="Belgium +32">
                  
                  BE +32
                </option>
              
                
                
                <option data-calling-code="501" data-country-code="BZ" value="BZ" data-a-html-content="Belize +501">
                  
                  BZ +501
                </option>
              
                
                
                <option data-calling-code="229" data-country-code="BJ" value="BJ" data-a-html-content="Benin +229">
                  
                  BJ +229
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="BM" value="BM" data-a-html-content="Bermuda +1">
                  
                  BM +1
                </option>
              
                
                
                <option data-calling-code="975" data-country-code="BT" value="BT" data-a-html-content="Bhutan +975">
                  
                  BT +975
                </option>
              
                
                
                <option data-calling-code="591" data-country-code="BO" value="BO" data-a-html-content="Bolivia +591">
                  
                  BO +591
                </option>
              
                
                
                <option data-calling-code="387" data-country-code="BA" value="BA" data-a-html-content="Bosnia &amp; Herzegovina +387">
                  
                  BA +387
                </option>
              
                
                
                <option data-calling-code="267" data-country-code="BW" value="BW" data-a-html-content="Botswana +267">
                  
                  BW +267
                </option>
              
                
                
                <option data-calling-code="55" data-country-code="BR" value="BR" data-a-html-content="Brazil +55">
                  
                  BR +55
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="VG" value="VG" data-a-html-content="British Virgin Islands +1">
                  
                  VG +1
                </option>
              
                
                
                <option data-calling-code="673" data-country-code="BN" value="BN" data-a-html-content="Brunei +673">
                  
                  BN +673
                </option>
              
                
                
                <option data-calling-code="359" data-country-code="BG" value="BG" data-a-html-content="Bulgaria +359">
                  
                  BG +359
                </option>
              
                
                
                <option data-calling-code="226" data-country-code="BF" value="BF" data-a-html-content="Burkina Faso +226">
                  
                  BF +226
                </option>
              
                
                
                <option data-calling-code="257" data-country-code="BI" value="BI" data-a-html-content="Burundi +257">
                  
                  BI +257
                </option>
              
                
                
                <option data-calling-code="855" data-country-code="KH" value="KH" data-a-html-content="Cambodia +855">
                  
                  KH +855
                </option>
              
                
                
                <option data-calling-code="237" data-country-code="CM" value="CM" data-a-html-content="Cameroon +237">
                  
                  CM +237
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="CA" value="CA" data-a-html-content="Canada +1">
                  
                  CA +1
                </option>
              
                
                
                <option data-calling-code="238" data-country-code="CV" value="CV" data-a-html-content="Cape Verde +238">
                  
                  CV +238
                </option>
              
                
                
                <option data-calling-code="599" data-country-code="BQ" value="BQ" data-a-html-content="Caribbean Netherlands +599">
                  
                  BQ +599
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="KY" value="KY" data-a-html-content="Cayman Islands +1">
                  
                  KY +1
                </option>
              
                
                
                <option data-calling-code="236" data-country-code="CF" value="CF" data-a-html-content="Central African Republic +236">
                  
                  CF +236
                </option>
              
                
                
                <option data-calling-code="235" data-country-code="TD" value="TD" data-a-html-content="Chad +235">
                  
                  TD +235
                </option>
              
                
                
                <option data-calling-code="56" data-country-code="CL" value="CL" data-a-html-content="Chile +56">
                  
                  CL +56
                </option>
              
                
                
                <option data-calling-code="86" data-country-code="CN" value="CN" data-a-html-content="China +86">
                  
                  CN +86
                </option>
              
                
                
                <option data-calling-code="57" data-country-code="CO" value="CO" data-a-html-content="Colombia +57">
                  
                  CO +57
                </option>
              
                
                
                <option data-calling-code="269" data-country-code="KM" value="KM" data-a-html-content="Comoros +269">
                  
                  KM +269
                </option>
              
                
                
                <option data-calling-code="242" data-country-code="CG" value="CG" data-a-html-content="Congo - Brazzaville +242">
                  
                  CG +242
                </option>
              
                
                
                <option data-calling-code="243" data-country-code="CD" value="CD" data-a-html-content="Congo - Kinshasa +243">
                  
                  CD +243
                </option>
              
                
                
                <option data-calling-code="682" data-country-code="CK" value="CK" data-a-html-content="Cook Islands +682">
                  
                  CK +682
                </option>
              
                
                
                <option data-calling-code="506" data-country-code="CR" value="CR" data-a-html-content="Costa Rica +506">
                  
                  CR +506
                </option>
              
                
                
                <option data-calling-code="385" data-country-code="HR" value="HR" data-a-html-content="Croatia +385">
                  
                  HR +385
                </option>
              
                
                
                <option data-calling-code="53" data-country-code="CU" value="CU" data-a-html-content="Cuba +53">
                  
                  CU +53
                </option>
              
                
                
                <option data-calling-code="599" data-country-code="CW" value="CW" data-a-html-content="Curaçao +599">
                  
                  CW +599
                </option>
              
                
                
                <option data-calling-code="357" data-country-code="CY" value="CY" data-a-html-content="Cyprus +357">
                  
                  CY +357
                </option>
              
                
                
                <option data-calling-code="420" data-country-code="CZ" value="CZ" data-a-html-content="Czech Republic +420">
                  
                  CZ +420
                </option>
              
                
                
                <option data-calling-code="225" data-country-code="CI" value="CI" data-a-html-content="Côte d’Ivoire +225">
                  
                  CI +225
                </option>
              
                
                
                <option data-calling-code="45" data-country-code="DK" value="DK" data-a-html-content="Denmark +45">
                  
                  DK +45
                </option>
              
                
                
                <option data-calling-code="253" data-country-code="DJ" value="DJ" data-a-html-content="Djibouti +253">
                  
                  DJ +253
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="DM" value="DM" data-a-html-content="Dominica +1">
                  
                  DM +1
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="DO" value="DO" data-a-html-content="Dominican Republic +1">
                  
                  DO +1
                </option>
              
                
                
                <option data-calling-code="593" data-country-code="EC" value="EC" data-a-html-content="Ecuador +593">
                  
                  EC +593
                </option>
              
                
                
                <option data-calling-code="20" data-country-code="EG" value="EG" data-a-html-content="Egypt +20">
                  
                  EG +20
                </option>
              
                
                
                <option data-calling-code="503" data-country-code="SV" value="SV" data-a-html-content="El Salvador +503">
                  
                  SV +503
                </option>
              
                
                
                <option data-calling-code="240" data-country-code="GQ" value="GQ" data-a-html-content="Equatorial Guinea +240">
                  
                  GQ +240
                </option>
              
                
                
                <option data-calling-code="291" data-country-code="ER" value="ER" data-a-html-content="Eritrea +291">
                  
                  ER +291
                </option>
              
                
                
                <option data-calling-code="372" data-country-code="EE" value="EE" data-a-html-content="Estonia +372">
                  
                  EE +372
                </option>
              
                
                
                <option data-calling-code="251" data-country-code="ET" value="ET" data-a-html-content="Ethiopia +251">
                  
                  ET +251
                </option>
              
                
                
                <option data-calling-code="500" data-country-code="FK" value="FK" data-a-html-content="Falkland Islands +500">
                  
                  FK +500
                </option>
              
                
                
                <option data-calling-code="298" data-country-code="FO" value="FO" data-a-html-content="Faroe Islands +298">
                  
                  FO +298
                </option>
              
                
                
                <option data-calling-code="679" data-country-code="FJ" value="FJ" data-a-html-content="Fiji +679">
                  
                  FJ +679
                </option>
              
                
                
                <option data-calling-code="358" data-country-code="FI" value="FI" data-a-html-content="Finland +358">
                  
                  FI +358
                </option>
              
                
                
                <option data-calling-code="33" data-country-code="FR" value="FR" data-a-html-content="France +33">
                  
                  FR +33
                </option>
              
                
                
                <option data-calling-code="594" data-country-code="GF" value="GF" data-a-html-content="French Guiana +594">
                  
                  GF +594
                </option>
              
                
                
                <option data-calling-code="689" data-country-code="PF" value="PF" data-a-html-content="French Polynesia +689">
                  
                  PF +689
                </option>
              
                
                
                <option data-calling-code="241" data-country-code="GA" value="GA" data-a-html-content="Gabon +241">
                  
                  GA +241
                </option>
              
                
                
                <option data-calling-code="220" data-country-code="GM" value="GM" data-a-html-content="Gambia +220">
                  
                  GM +220
                </option>
              
                
                
                <option data-calling-code="995" data-country-code="GE" value="GE" data-a-html-content="Georgia +995">
                  
                  GE +995
                </option>
              
                
                
                <option data-calling-code="49" data-country-code="DE" value="DE" data-a-html-content="Germany +49">
                  
                  DE +49
                </option>
              
                
                
                <option data-calling-code="233" data-country-code="GH" value="GH" data-a-html-content="Ghana +233">
                  
                  GH +233
                </option>
              
                
                
                <option data-calling-code="350" data-country-code="GI" value="GI" data-a-html-content="Gibraltar +350">
                  
                  GI +350
                </option>
              
                
                
                <option data-calling-code="30" data-country-code="GR" value="GR" data-a-html-content="Greece +30">
                  
                  GR +30
                </option>
              
                
                
                <option data-calling-code="299" data-country-code="GL" value="GL" data-a-html-content="Greenland +299">
                  
                  GL +299
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="GD" value="GD" data-a-html-content="Grenada +1">
                  
                  GD +1
                </option>
              
                
                
                <option data-calling-code="590" data-country-code="GP" value="GP" data-a-html-content="Guadeloupe +590">
                  
                  GP +590
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="GU" value="GU" data-a-html-content="Guam +1">
                  
                  GU +1
                </option>
              
                
                
                <option data-calling-code="502" data-country-code="GT" value="GT" data-a-html-content="Guatemala +502">
                  
                  GT +502
                </option>
              
                
                
                <option data-calling-code="224" data-country-code="GN" value="GN" data-a-html-content="Guinea +224">
                  
                  GN +224
                </option>
              
                
                
                <option data-calling-code="245" data-country-code="GW" value="GW" data-a-html-content="Guinea-Bissau +245">
                  
                  GW +245
                </option>
              
                
                
                <option data-calling-code="592" data-country-code="GY" value="GY" data-a-html-content="Guyana +592">
                  
                  GY +592
                </option>
              
                
                
                <option data-calling-code="509" data-country-code="HT" value="HT" data-a-html-content="Haiti +509">
                  
                  HT +509
                </option>
              
                
                
                <option data-calling-code="504" data-country-code="HN" value="HN" data-a-html-content="Honduras +504">
                  
                  HN +504
                </option>
              
                
                
                <option data-calling-code="852" data-country-code="HK" value="HK" data-a-html-content="Hong Kong +852">
                  
                  HK +852
                </option>
              
                
                
                <option data-calling-code="36" data-country-code="HU" value="HU" data-a-html-content="Hungary +36">
                  
                  HU +36
                </option>
              
                
                
                <option data-calling-code="354" data-country-code="IS" value="IS" data-a-html-content="Iceland +354">
                  
                  IS +354
                </option>
              
                
                
                <option data-calling-code="91" data-country-code="IN" value="IN" data-a-html-content="India +91" selected>
                  
                  IN +91
                </option>
              
                
                
                <option data-calling-code="62" data-country-code="ID" value="ID" data-a-html-content="Indonesia +62">
                  
                  ID +62
                </option>
              
                
                
                <option data-calling-code="98" data-country-code="IR" value="IR" data-a-html-content="Iran +98">
                  
                  IR +98
                </option>
              
                
                
                <option data-calling-code="964" data-country-code="IQ" value="IQ" data-a-html-content="Iraq +964">
                  
                  IQ +964
                </option>
              
                
                
                <option data-calling-code="353" data-country-code="IE" value="IE" data-a-html-content="Ireland +353">
                  
                  IE +353
                </option>
              
                
                
                <option data-calling-code="972" data-country-code="IL" value="IL" data-a-html-content="Israel +972">
                  
                  IL +972
                </option>
              
                
                
                <option data-calling-code="39" data-country-code="IT" value="IT" data-a-html-content="Italy +39">
                  
                  IT +39
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="JM" value="JM" data-a-html-content="Jamaica +1">
                  
                  JM +1
                </option>
              
                
                
                <option data-calling-code="81" data-country-code="JP" value="JP" data-a-html-content="Japan +81">
                  
                  JP +81
                </option>
              
                
                
                <option data-calling-code="962" data-country-code="JO" value="JO" data-a-html-content="Jordan +962">
                  
                  JO +962
                </option>
              
                
                
                <option data-calling-code="7" data-country-code="KZ" value="KZ" data-a-html-content="Kazakhstan +7">
                  
                  KZ +7
                </option>
              
                
                
                <option data-calling-code="254" data-country-code="KE" value="KE" data-a-html-content="Kenya +254">
                  
                  KE +254
                </option>
              
                
                
                <option data-calling-code="686" data-country-code="KI" value="KI" data-a-html-content="Kiribati +686">
                  
                  KI +686
                </option>
              
                
                
                <option data-calling-code="383" data-country-code="XK" value="XK" data-a-html-content="Kosovo +383">
                  
                  XK +383
                </option>
              
                
                
                <option data-calling-code="965" data-country-code="KW" value="KW" data-a-html-content="Kuwait +965">
                  
                  KW +965
                </option>
              
                
                
                <option data-calling-code="996" data-country-code="KG" value="KG" data-a-html-content="Kyrgyzstan +996">
                  
                  KG +996
                </option>
              
                
                
                <option data-calling-code="856" data-country-code="LA" value="LA" data-a-html-content="Laos +856">
                  
                  LA +856
                </option>
              
                
                
                <option data-calling-code="371" data-country-code="LV" value="LV" data-a-html-content="Latvia +371">
                  
                  LV +371
                </option>
              
                
                
                <option data-calling-code="961" data-country-code="LB" value="LB" data-a-html-content="Lebanon +961">
                  
                  LB +961
                </option>
              
                
                
                <option data-calling-code="266" data-country-code="LS" value="LS" data-a-html-content="Lesotho +266">
                  
                  LS +266
                </option>
              
                
                
                <option data-calling-code="231" data-country-code="LR" value="LR" data-a-html-content="Liberia +231">
                  
                  LR +231
                </option>
              
                
                
                <option data-calling-code="218" data-country-code="LY" value="LY" data-a-html-content="Libya +218">
                  
                  LY +218
                </option>
              
                
                
                <option data-calling-code="423" data-country-code="LI" value="LI" data-a-html-content="Liechtenstein +423">
                  
                  LI +423
                </option>
              
                
                
                <option data-calling-code="370" data-country-code="LT" value="LT" data-a-html-content="Lithuania +370">
                  
                  LT +370
                </option>
              
                
                
                <option data-calling-code="352" data-country-code="LU" value="LU" data-a-html-content="Luxembourg +352">
                  
                  LU +352
                </option>
              
                
                
                <option data-calling-code="853" data-country-code="MO" value="MO" data-a-html-content="Macau +853">
                  
                  MO +853
                </option>
              
                
                
                <option data-calling-code="389" data-country-code="MK" value="MK" data-a-html-content="Macedonia +389">
                  
                  MK +389
                </option>
              
                
                
                <option data-calling-code="261" data-country-code="MG" value="MG" data-a-html-content="Madagascar +261">
                  
                  MG +261
                </option>
              
                
                
                <option data-calling-code="265" data-country-code="MW" value="MW" data-a-html-content="Malawi +265">
                  
                  MW +265
                </option>
              
                
                
                <option data-calling-code="60" data-country-code="MY" value="MY" data-a-html-content="Malaysia +60">
                  
                  MY +60
                </option>
              
                
                
                <option data-calling-code="960" data-country-code="MV" value="MV" data-a-html-content="Maldives +960">
                  
                  MV +960
                </option>
              
                
                
                <option data-calling-code="223" data-country-code="ML" value="ML" data-a-html-content="Mali +223">
                  
                  ML +223
                </option>
              
                
                
                <option data-calling-code="356" data-country-code="MT" value="MT" data-a-html-content="Malta +356">
                  
                  MT +356
                </option>
              
                
                
                <option data-calling-code="692" data-country-code="MH" value="MH" data-a-html-content="Marshall Islands +692">
                  
                  MH +692
                </option>
              
                
                
                <option data-calling-code="596" data-country-code="MQ" value="MQ" data-a-html-content="Martinique +596">
                  
                  MQ +596
                </option>
              
                
                
                <option data-calling-code="222" data-country-code="MR" value="MR" data-a-html-content="Mauritania +222">
                  
                  MR +222
                </option>
              
                
                
                <option data-calling-code="230" data-country-code="MU" value="MU" data-a-html-content="Mauritius +230">
                  
                  MU +230
                </option>
              
                
                
                <option data-calling-code="52" data-country-code="MX" value="MX" data-a-html-content="Mexico +52">
                  
                  MX +52
                </option>
              
                
                
                <option data-calling-code="691" data-country-code="FM" value="FM" data-a-html-content="Micronesia +691">
                  
                  FM +691
                </option>
              
                
                
                <option data-calling-code="373" data-country-code="MD" value="MD" data-a-html-content="Moldova +373">
                  
                  MD +373
                </option>
              
                
                
                <option data-calling-code="377" data-country-code="MC" value="MC" data-a-html-content="Monaco +377">
                  
                  MC +377
                </option>
              
                
                
                <option data-calling-code="976" data-country-code="MN" value="MN" data-a-html-content="Mongolia +976">
                  
                  MN +976
                </option>
              
                
                
                <option data-calling-code="382" data-country-code="ME" value="ME" data-a-html-content="Montenegro +382">
                  
                  ME +382
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="MS" value="MS" data-a-html-content="Montserrat +1">
                  
                  MS +1
                </option>
              
                
                
                <option data-calling-code="212" data-country-code="MA" value="MA" data-a-html-content="Morocco +212">
                  
                  MA +212
                </option>
              
                
                
                <option data-calling-code="258" data-country-code="MZ" value="MZ" data-a-html-content="Mozambique +258">
                  
                  MZ +258
                </option>
              
                
                
                <option data-calling-code="95" data-country-code="MM" value="MM" data-a-html-content="Myanmar (Burma) +95">
                  
                  MM +95
                </option>
              
                
                
                <option data-calling-code="264" data-country-code="NA" value="NA" data-a-html-content="Namibia +264">
                  
                  NA +264
                </option>
              
                
                
                <option data-calling-code="674" data-country-code="NR" value="NR" data-a-html-content="Nauru +674">
                  
                  NR +674
                </option>
              
                
                
                <option data-calling-code="977" data-country-code="NP" value="NP" data-a-html-content="Nepal +977">
                  
                  NP +977
                </option>
              
                
                
                <option data-calling-code="31" data-country-code="NL" value="NL" data-a-html-content="Netherlands +31">
                  
                  NL +31
                </option>
              
                
                
                <option data-calling-code="687" data-country-code="NC" value="NC" data-a-html-content="New Caledonia +687">
                  
                  NC +687
                </option>
              
                
                
                <option data-calling-code="64" data-country-code="NZ" value="NZ" data-a-html-content="New Zealand +64">
                  
                  NZ +64
                </option>
              
                
                
                <option data-calling-code="505" data-country-code="NI" value="NI" data-a-html-content="Nicaragua +505">
                  
                  NI +505
                </option>
              
                
                
                <option data-calling-code="227" data-country-code="NE" value="NE" data-a-html-content="Niger +227">
                  
                  NE +227
                </option>
              
                
                
                <option data-calling-code="234" data-country-code="NG" value="NG" data-a-html-content="Nigeria +234">
                  
                  NG +234
                </option>
              
                
                
                <option data-calling-code="683" data-country-code="NU" value="NU" data-a-html-content="Niue +683">
                  
                  NU +683
                </option>
              
                
                
                <option data-calling-code="672" data-country-code="NF" value="NF" data-a-html-content="Norfolk Island +672">
                  
                  NF +672
                </option>
              
                
                
                <option data-calling-code="850" data-country-code="KP" value="KP" data-a-html-content="North Korea +850">
                  
                  KP +850
                </option>
              
                
                
                <option data-calling-code="47" data-country-code="NO" value="NO" data-a-html-content="Norway +47">
                  
                  NO +47
                </option>
              
                
                
                <option data-calling-code="968" data-country-code="OM" value="OM" data-a-html-content="Oman +968">
                  
                  OM +968
                </option>
              
                
                
                <option data-calling-code="92" data-country-code="PK" value="PK" data-a-html-content="Pakistan +92">
                  
                  PK +92
                </option>
              
                
                
                <option data-calling-code="680" data-country-code="PW" value="PW" data-a-html-content="Palau +680">
                  
                  PW +680
                </option>
              
                
                
                <option data-calling-code="970" data-country-code="PS" value="PS" data-a-html-content="Palestinian Territories +970">
                  
                  PS +970
                </option>
              
                
                
                <option data-calling-code="507" data-country-code="PA" value="PA" data-a-html-content="Panama +507">
                  
                  PA +507
                </option>
              
                
                
                <option data-calling-code="675" data-country-code="PG" value="PG" data-a-html-content="Papua New Guinea +675">
                  
                  PG +675
                </option>
              
                
                
                <option data-calling-code="595" data-country-code="PY" value="PY" data-a-html-content="Paraguay +595">
                  
                  PY +595
                </option>
              
                
                
                <option data-calling-code="51" data-country-code="PE" value="PE" data-a-html-content="Peru +51">
                  
                  PE +51
                </option>
              
                
                
                <option data-calling-code="63" data-country-code="PH" value="PH" data-a-html-content="Philippines +63">
                  
                  PH +63
                </option>
              
                
                
                <option data-calling-code="48" data-country-code="PL" value="PL" data-a-html-content="Poland +48">
                  
                  PL +48
                </option>
              
                
                
                <option data-calling-code="351" data-country-code="PT" value="PT" data-a-html-content="Portugal +351">
                  
                  PT +351
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="PR" value="PR" data-a-html-content="Puerto Rico +1">
                  
                  PR +1
                </option>
              
                
                
                <option data-calling-code="974" data-country-code="QA" value="QA" data-a-html-content="Qatar +974">
                  
                  QA +974
                </option>
              
                
                
                <option data-calling-code="40" data-country-code="RO" value="RO" data-a-html-content="Romania +40">
                  
                  RO +40
                </option>
              
                
                
                <option data-calling-code="7" data-country-code="RU" value="RU" data-a-html-content="Russia +7">
                  
                  RU +7
                </option>
              
                
                
                <option data-calling-code="250" data-country-code="RW" value="RW" data-a-html-content="Rwanda +250">
                  
                  RW +250
                </option>
              
                
                
                <option data-calling-code="262" data-country-code="RE" value="RE" data-a-html-content="Réunion +262">
                  
                  RE +262
                </option>
              
                
                
                <option data-calling-code="685" data-country-code="WS" value="WS" data-a-html-content="Samoa +685">
                  
                  WS +685
                </option>
              
                
                
                <option data-calling-code="378" data-country-code="SM" value="SM" data-a-html-content="San Marino +378">
                  
                  SM +378
                </option>
              
                
                
                <option data-calling-code="966" data-country-code="SA" value="SA" data-a-html-content="Saudi Arabia +966">
                  
                  SA +966
                </option>
              
                
                
                <option data-calling-code="221" data-country-code="SN" value="SN" data-a-html-content="Senegal +221">
                  
                  SN +221
                </option>
              
                
                
                <option data-calling-code="381" data-country-code="RS" value="RS" data-a-html-content="Serbia +381">
                  
                  RS +381
                </option>
              
                
                
                <option data-calling-code="248" data-country-code="SC" value="SC" data-a-html-content="Seychelles +248">
                  
                  SC +248
                </option>
              
                
                
                <option data-calling-code="232" data-country-code="SL" value="SL" data-a-html-content="Sierra Leone +232">
                  
                  SL +232
                </option>
              
                
                
                <option data-calling-code="65" data-country-code="SG" value="SG" data-a-html-content="Singapore +65">
                  
                  SG +65
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="SX" value="SX" data-a-html-content="Sint Maarten +1">
                  
                  SX +1
                </option>
              
                
                
                <option data-calling-code="421" data-country-code="SK" value="SK" data-a-html-content="Slovakia +421">
                  
                  SK +421
                </option>
              
                
                
                <option data-calling-code="386" data-country-code="SI" value="SI" data-a-html-content="Slovenia +386">
                  
                  SI +386
                </option>
              
                
                
                <option data-calling-code="677" data-country-code="SB" value="SB" data-a-html-content="Solomon Islands +677">
                  
                  SB +677
                </option>
              
                
                
                <option data-calling-code="252" data-country-code="SO" value="SO" data-a-html-content="Somalia +252">
                  
                  SO +252
                </option>
              
                
                
                <option data-calling-code="27" data-country-code="ZA" value="ZA" data-a-html-content="South Africa +27">
                  
                  ZA +27
                </option>
              
                
                
                <option data-calling-code="82" data-country-code="KR" value="KR" data-a-html-content="South Korea +82">
                  
                  KR +82
                </option>
              
                
                
                <option data-calling-code="211" data-country-code="SS" value="SS" data-a-html-content="South Sudan +211">
                  
                  SS +211
                </option>
              
                
                
                <option data-calling-code="34" data-country-code="ES" value="ES" data-a-html-content="Spain +34">
                  
                  ES +34
                </option>
              
                
                
                <option data-calling-code="94" data-country-code="LK" value="LK" data-a-html-content="Sri Lanka +94">
                  
                  LK +94
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="KN" value="KN" data-a-html-content="St. Kitts &amp; Nevis +1">
                  
                  KN +1
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="LC" value="LC" data-a-html-content="St. Lucia +1">
                  
                  LC +1
                </option>
              
                
                
                <option data-calling-code="508" data-country-code="PM" value="PM" data-a-html-content="St. Pierre &amp; Miquelon +508">
                  
                  PM +508
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="VC" value="VC" data-a-html-content="St. Vincent &amp; Grenadines +1">
                  
                  VC +1
                </option>
              
                
                
                <option data-calling-code="249" data-country-code="SD" value="SD" data-a-html-content="Sudan +249">
                  
                  SD +249
                </option>
              
                
                
                <option data-calling-code="597" data-country-code="SR" value="SR" data-a-html-content="Suriname +597">
                  
                  SR +597
                </option>
              
                
                
                <option data-calling-code="268" data-country-code="SZ" value="SZ" data-a-html-content="Swaziland +268">
                  
                  SZ +268
                </option>
              
                
                
                <option data-calling-code="46" data-country-code="SE" value="SE" data-a-html-content="Sweden +46">
                  
                  SE +46
                </option>
              
                
                
                <option data-calling-code="41" data-country-code="CH" value="CH" data-a-html-content="Switzerland +41">
                  
                  CH +41
                </option>
              
                
                
                <option data-calling-code="963" data-country-code="SY" value="SY" data-a-html-content="Syria +963">
                  
                  SY +963
                </option>
              
                
                
                <option data-calling-code="239" data-country-code="ST" value="ST" data-a-html-content="São Tomé &amp; Príncipe +239">
                  
                  ST +239
                </option>
              
                
                
                <option data-calling-code="886" data-country-code="TW" value="TW" data-a-html-content="Taiwan +886">
                  
                  TW +886
                </option>
              
                
                
                <option data-calling-code="992" data-country-code="TJ" value="TJ" data-a-html-content="Tajikistan +992">
                  
                  TJ +992
                </option>
              
                
                
                <option data-calling-code="255" data-country-code="TZ" value="TZ" data-a-html-content="Tanzania +255">
                  
                  TZ +255
                </option>
              
                
                
                <option data-calling-code="66" data-country-code="TH" value="TH" data-a-html-content="Thailand +66">
                  
                  TH +66
                </option>
              
                
                
                <option data-calling-code="670" data-country-code="TL" value="TL" data-a-html-content="Timor-Leste +670">
                  
                  TL +670
                </option>
              
                
                
                <option data-calling-code="228" data-country-code="TG" value="TG" data-a-html-content="Togo +228">
                  
                  TG +228
                </option>
              
                
                
                <option data-calling-code="676" data-country-code="TO" value="TO" data-a-html-content="Tonga +676">
                  
                  TO +676
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="TT" value="TT" data-a-html-content="Trinidad &amp; Tobago +1">
                  
                  TT +1
                </option>
              
                
                
                <option data-calling-code="216" data-country-code="TN" value="TN" data-a-html-content="Tunisia +216">
                  
                  TN +216
                </option>
              
                
                
                <option data-calling-code="90" data-country-code="TR" value="TR" data-a-html-content="Turkey +90">
                  
                  TR +90
                </option>
              
                
                
                <option data-calling-code="993" data-country-code="TM" value="TM" data-a-html-content="Turkmenistan +993">
                  
                  TM +993
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="TC" value="TC" data-a-html-content="Turks &amp; Caicos Islands +1">
                  
                  TC +1
                </option>
              
                
                
                <option data-calling-code="688" data-country-code="TV" value="TV" data-a-html-content="Tuvalu +688">
                  
                  TV +688
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="VI" value="VI" data-a-html-content="U.S. Virgin Islands +1">
                  
                  VI +1
                </option>
              
                
                
                <option data-calling-code="256" data-country-code="UG" value="UG" data-a-html-content="Uganda +256">
                  
                  UG +256
                </option>
              
                
                
                <option data-calling-code="380" data-country-code="UA" value="UA" data-a-html-content="Ukraine +380">
                  
                  UA +380
                </option>
              
                
                
                <option data-calling-code="971" data-country-code="AE" value="AE" data-a-html-content="United Arab Emirates +971">
                  
                  AE +971
                </option>
              
                
                
                <option data-calling-code="44" data-country-code="GB" value="GB" data-a-html-content="United Kingdom +44">
                  
                  GB +44
                </option>
              
                
                
                <option data-calling-code="1" data-country-code="US" value="US" data-a-html-content="United States +1">
                  
                  US +1
                </option>
              
                
                
                <option data-calling-code="598" data-country-code="UY" value="UY" data-a-html-content="Uruguay +598">
                  
                  UY +598
                </option>
              
                
                
                <option data-calling-code="998" data-country-code="UZ" value="UZ" data-a-html-content="Uzbekistan +998">
                  
                  UZ +998
                </option>
              
                
                
                <option data-calling-code="678" data-country-code="VU" value="VU" data-a-html-content="Vanuatu +678">
                  
                  VU +678
                </option>
              
                
                
                <option data-calling-code="58" data-country-code="VE" value="VE" data-a-html-content="Venezuela +58">
                  
                  VE +58
                </option>
              
                
                
                <option data-calling-code="84" data-country-code="VN" value="VN" data-a-html-content="Vietnam +84">
                  
                  VN +84
                </option>
              
                
                
                <option data-calling-code="967" data-country-code="YE" value="YE" data-a-html-content="Yemen +967">
                  
                  YE +967
                </option>
              
                
                
                <option data-calling-code="260" data-country-code="ZM" value="ZM" data-a-html-content="Zambia +260">
                  
                  ZM +260
                </option>
              
                
                
                <option data-calling-code="263" data-country-code="ZW" value="ZW" data-a-html-content="Zimbabwe +263">
                  
                  ZW +263
                </option>
              
                
                
                <option data-calling-code="358" data-country-code="AX" value="AX" data-a-html-content="Åland Islands +358">
                  
                  AX +358
                </option> <input type="tel" name="" id="number">
        </label>
        <label for="fname">Password (Min. 8 characters)<input type="password" name="pass" id="pass" minlength="8" required></label><br>
       <label for="term"> <input type="checkbox" id="term" required> I agree to Digimart's terms and conditions </label><br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    
    </form>
</fieldset>
<footer>Already a customer? <a href="login.html">Login here!</a></footer>
</body>
</html>