-- VirtueMart table data SQL script
-- This inserts country data into the VirtueMart tables

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*!40000 ALTER TABLE `#__virtuemart_countries` DISABLE KEYS */;
INSERT IGNORE INTO `#__virtuemart_countries` (`country_name`, `country_3_code`, `country_2_code`, `country_num_code`) VALUES
("Afghanistan", "AFG", "AF", "004"),
("Åland Islands", "ALA", "AX", "248"),
("Albania", "ALB", "AL", "008"),
("Algeria", "DZA", "DZ", "012"),
("American Samoa", "ASM", "AS", "016"),
("Andorra", "AND", "AD", "020"),
("Angola", "AGO", "AO", "024"),
("Anguilla", "AIA", "AI", "660"),
("Antarctica", "ATA", "AQ", "010"),
("Antigua and Barbuda", "ATG", "AG", "028"),
("Argentina", "ARG", "AR", "032"),
("Armenia", "ARM", "AM", "051"),
("Aruba", "ABW", "AW", "533"),
("Australia", "AUS", "AU", "036"),
("Austria", "AUT", "AT", "040"),
("Azerbaijan", "AZE", "AZ", "031"),
("Bahamas (the)", "BHS", "BS", "044"),
("Bahrain", "BHR", "BH", "048"),
("Bangladesh", "BGD", "BD", "050"),
("Barbados", "BRB", "BB", "052"),
("Belarus", "BLR", "BY", "112"),
("Belgium", "BEL", "BE", "056"),
("Belize", "BLZ", "BZ", "084"),
("Benin", "BEN", "BJ", "204"),
("Bermuda", "BMU", "BM", "060"),
("Bhutan", "BTN", "BT", "064"),
("Bolivia (Plurinational State of)", "BOL", "BO", "068"),
("Bonaire, Sint Eustatius and Saba", "BES", "BQ", "535"),
("Bosnia and Herzegovina", "BIH", "BA", "070"),
("Botswana", "BWA", "BW", "072"),
("Bouvet Island", "BVT", "BV", "074"),
("Brazil", "BRA", "BR", "076"),
("British Indian Ocean Territory (the)", "IOT", "IO", "086"),
("Brunei Darussalam", "BRN", "BN", "096"),
("Bulgaria", "BGR", "BG", "100"),
("Burkina Faso", "BFA", "BF", "854"),
("Burundi", "BDI", "BI", "108"),
("Cabo Verde", "CPV", "CV", "132"),
("Cambodia", "KHM", "KH", "116"),
("Cameroon", "CMR", "CM", "120"),
("Canada", "CAN", "CA", "124"),
("Cayman Islands (the)", "CYM", "KY", "136"),
("Central African Republic (the)", "CAF", "CF", "140"),
("Chad", "TCD", "TD", "148"),
("Chile", "CHL", "CL", "152"),
("China", "CHN", "CN", "156"),
("Christmas Island", "CXR", "CX", "162"),
("Cocos (Keeling) Islands (the)", "CCK", "CC", "166"),
("Colombia", "COL", "CO", "170"),
("Comoros (the)", "COM", "KM", "174"),
("Congo (the Democratic Republic of the)", "COD", "CD", "180"),
("Congo (the)", "COG", "CG", "178"),
("Cook Islands (the)", "COK", "CK", "184"),
("Costa Rica", "CRI", "CR", "188"),
("Côte d'Ivoire", "CIV", "CI", "384"),
("Croatia", "HRV", "HR", "191"),
("Cuba", "CUB", "CU", "192"),
("Curaçao", "CUW", "CW", "531"),
("Cyprus", "CYP", "CY", "196"),
("Czechia", "CZE", "CZ", "203"),
("Denmark", "DNK", "DK", "208"),
("Djibouti", "DJI", "DJ", "262"),
("Dominica", "DMA", "DM", "212"),
("Dominican Republic (the)", "DOM", "DO", "214"),
("Ecuador", "ECU", "EC", "218"),
("Egypt", "EGY", "EG", "818"),
("El Salvador", "SLV", "SV", "222"),
("Equatorial Guinea", "GNQ", "GQ", "226"),
("Eritrea", "ERI", "ER", "232"),
("Estonia", "EST", "EE", "233"),
("Eswatini", "SWZ", "SZ", "748"),
("Ethiopia", "ETH", "ET", "231"),
("Falkland Islands (the) [Malvinas]", "FLK", "FK", "238"),
("Faroe Islands (the)", "FRO", "FO", "234"),
("Fiji", "FJI", "FJ", "242"),
("Finland", "FIN", "FI", "246"),
("France", "FRA", "FR", "250"),
("French Guiana", "GUF", "GF", "254"),
("French Polynesia", "PYF", "PF", "258"),
("French Southern Territories (the)", "ATF", "TF", "260"),
("Gabon", "GAB", "GA", "266"),
("Gambia (the)", "GMB", "GM", "270"),
("Georgia", "GEO", "GE", "268"),
("Germany", "DEU", "DE", "276"),
("Ghana", "GHA", "GH", "288"),
("Gibraltar", "GIB", "GI", "292"),
("Greece", "GRC", "GR", "300"),
("Greenland", "GRL", "GL", "304"),
("Grenada", "GRD", "GD", "308"),
("Guadeloupe", "GLP", "GP", "312"),
("Guam", "GUM", "GU", "316"),
("Guatemala", "GTM", "GT", "320"),
("Guernsey", "GGY", "GG", "831"),
("Guinea", "GIN", "GN", "324"),
("Guinea-Bissau", "GNB", "GW", "624"),
("Guyana", "GUY", "GY", "328"),
("Haiti", "HTI", "HT", "332"),
("Heard Island and McDonald Islands", "HMD", "HM", "334"),
("Holy See (the)", "VAT", "VA", "336"),
("Honduras", "HND", "HN", "340"),
("Hong Kong", "HKG", "HK", "344"),
("Hungary", "HUN", "HU", "348"),
("Iceland", "ISL", "IS", "352"),
("India", "IND", "IN", "356"),
("Indonesia", "IDN", "ID", "360"),
("Iran (Islamic Republic of)", "IRN", "IR", "364"),
("Iraq", "IRQ", "IQ", "368"),
("Ireland", "IRL", "IE", "372"),
("Isle of Man", "IMN", "IM", "833"),
("Israel", "ISR", "IL", "376"),
("Italy", "ITA", "IT", "380"),
("Jamaica", "JAM", "JM", "388"),
("Japan", "JPN", "JP", "392"),
("Jersey", "JEY", "JE", "832"),
("Jordan", "JOR", "JO", "400"),
("Kazakhstan", "KAZ", "KZ", "398"),
("Kenya", "KEN", "KE", "404"),
("Kiribati", "KIR", "KI", "296"),
("Korea (the Democratic People's Republic of)", "PRK", "KP", "408"),
("Korea (the Republic of)", "KOR", "KR", "410"),
("Kuwait", "KWT", "KW", "414"),
("Kyrgyzstan", "KGZ", "KG", "417"),
("Lao People's Democratic Republic (the)", "LAO", "LA", "418"),
("Latvia", "LVA", "LV", "428"),
("Lebanon", "LBN", "LB", "422"),
("Lesotho", "LSO", "LS", "426"),
("Liberia", "LBR", "LR", "430"),
("Libya", "LBY", "LY", "434"),
("Liechtenstein", "LIE", "LI", "438"),
("Lithuania", "LTU", "LT", "440"),
("Luxembourg", "LUX", "LU", "442"),
("Macao", "MAC", "MO", "446"),
("Madagascar", "MDG", "MG", "450"),
("Malawi", "MWI", "MW", "454"),
("Malaysia", "MYS", "MY", "458"),
("Maldives", "MDV", "MV", "462"),
("Mali", "MLI", "ML", "466"),
("Malta", "MLT", "MT", "470"),
("Marshall Islands (the)", "MHL", "MH", "584"),
("Martinique", "MTQ", "MQ", "474"),
("Mauritania", "MRT", "MR", "478"),
("Mauritius", "MUS", "MU", "480"),
("Mayotte", "MYT", "YT", "175"),
("Mexico", "MEX", "MX", "484"),
("Micronesia (Federated States of)", "FSM", "FM", "583"),
("Moldova (the Republic of)", "MDA", "MD", "498"),
("Monaco", "MCO", "MC", "492"),
("Mongolia", "MNG", "MN", "496"),
("Montenegro", "MNE", "ME", "499"),
("Montserrat", "MSR", "MS", "500"),
("Morocco", "MAR", "MA", "504"),
("Mozambique", "MOZ", "MZ", "508"),
("Myanmar", "MMR", "MM", "104"),
("Namibia", "NAM", "NA", "516"),
("Nauru", "NRU", "NR", "520"),
("Nepal", "NPL", "NP", "524"),
("Netherlands (the)", "NLD", "NL", "528"),
("New Caledonia", "NCL", "NC", "540"),
("New Zealand", "NZL", "NZ", "554"),
("Nicaragua", "NIC", "NI", "558"),
("Niger (the)", "NER", "NE", "562"),
("Nigeria", "NGA", "NG", "566"),
("Niue", "NIU", "NU", "570"),
("Norfolk Island", "NFK", "NF", "574"),
("North Macedonia", "MKD", "MK", "807"),
("Northern Mariana Islands (the)", "MNP", "MP", "580"),
("Norway", "NOR", "NO", "578"),
("Oman", "OMN", "OM", "512"),
("Pakistan", "PAK", "PK", "586"),
("Palau", "PLW", "PW", "585"),
("Palestine, State of", "PSE", "PS", "275"),
("Panama", "PAN", "PA", "591"),
("Papua New Guinea", "PNG", "PG", "598"),
("Paraguay", "PRY", "PY", "600"),
("Peru", "PER", "PE", "604"),
("Philippines (the)", "PHL", "PH", "608"),
("Pitcairn", "PCN", "PN", "612"),
("Poland", "POL", "PL", "616"),
("Portugal", "PRT", "PT", "620"),
("Puerto Rico", "PRI", "PR", "630"),
("Qatar", "QAT", "QA", "634"),
("Réunion", "REU", "RE", "638"),
("Romania", "ROU", "RO", "642"),
("Russian Federation (the)", "RUS", "RU", "643"),
("Rwanda", "RWA", "RW", "646"),
("Saint Barthélemy", "BLM", "BL", "652"),
("Saint Helena, Ascension and Tristan da Cunha", "SHN", "SH", "654"),
("Saint Kitts and Nevis", "KNA", "KN", "659"),
("Saint Lucia", "LCA", "LC", "662"),
("Saint Martin (French part)", "MAF", "MF", "663"),
("Saint Pierre and Miquelon", "SPM", "PM", "666"),
("Saint Vincent and the Grenadines", "VCT", "VC", "670"),
("Samoa", "WSM", "WS", "882"),
("San Marino", "SMR", "SM", "674"),
("Sao Tome and Principe", "STP", "ST", "678"),
("Saudi Arabia", "SAU", "SA", "682"),
("Senegal", "SEN", "SN", "686"),
("Serbia", "SRB", "RS", "688"),
("Seychelles", "SYC", "SC", "690"),
("Sierra Leone", "SLE", "SL", "694"),
("Singapore", "SGP", "SG", "702"),
("Sint Maarten (Dutch part)", "SXM", "SX", "534"),
("Slovakia", "SVK", "SK", "703"),
("Slovenia", "SVN", "SI", "705"),
("Solomon Islands", "SLB", "SB", "090"),
("Somalia", "SOM", "SO", "706"),
("South Africa", "ZAF", "ZA", "710"),
("South Georgia and the South Sandwich Islands", "SGS", "GS", "239"),
("South Sudan", "SSD", "SS", "728"),
("Spain", "ESP", "ES", "724"),
("Sri Lanka", "LKA", "LK", "144"),
("Sudan (the)", "SDN", "SD", "729"),
("Suriname", "SUR", "SR", "740"),
("Svalbard and Jan Mayen", "SJM", "SJ", "744"),
("Sweden", "SWE", "SE", "752"),
("Switzerland", "CHE", "CH", "756"),
("Syrian Arab Republic (the)", "SYR", "SY", "760"),
("Taiwan (Province of China)", "TWN", "TW", "158"),
("Tajikistan", "TJK", "TJ", "762"),
("Tanzania, the United Republic of", "TZA", "TZ", "834"),
("Thailand", "THA", "TH", "764"),
("Timor-Leste", "TLS", "TL", "626"),
("Togo", "TGO", "TG", "768"),
("Tokelau", "TKL", "TK", "772"),
("Tonga", "TON", "TO", "776"),
("Trinidad and Tobago", "TTO", "TT", "780"),
("Tunisia", "TUN", "TN", "788"),
("Turkey", "TUR", "TR", "792"),
("Turkmenistan", "TKM", "TM", "795"),
("Turks and Caicos Islands (the)", "TCA", "TC", "796"),
("Tuvalu", "TUV", "TV", "798"),
("Uganda", "UGA", "UG", "800"),
("Ukraine", "UKR", "UA", "804"),
("United Arab Emirates (the)", "ARE", "AE", "784"),
("United Kingdom of Great Britain and Northern Ireland (the)", "GBR", "GB", "826"),
("United States Minor Outlying Islands (the)", "UMI", "UM", "581"),
("United States of America (the)", "USA", "US", "840"),
("Uruguay", "URY", "UY", "858"),
("Uzbekistan", "UZB", "UZ", "860"),
("Vanuatu", "VUT", "VU", "548"),
("Venezuela (Bolivarian Republic of)", "VEN", "VE", "862"),
("Viet Nam", "VNM", "VN", "704"),
("Virgin Islands (British)", "VGB", "VG", "092"),
("Virgin Islands (U.S.)", "VIR", "VI", "850"),
("Wallis and Futuna", "WLF", "WF", "876"),
("Western Sahara*", "ESH", "EH", "732"),
("Yemen", "YEM", "YE", "887"),
("Zambia", "ZMB", "ZM", "894"),
("Zimbabwe", "ZWE", "ZW", "716");
/*!40000 ALTER TABLE `#__virtuemart_countries` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
