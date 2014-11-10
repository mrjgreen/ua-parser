<?php return array (
  'user_agent' => 
  array (
    '@(HbbTV)/(\\d+)\\.(\\d+)\\.(\\d+) \\(@' => 
    array (
    ),
    '@(Chimera|SeaMonkey|Camino)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+[a-z]*)?@' => 
    array (
    ),
    '@(Pale[Mm]oon)/(\\d+)\\.(\\d+)\\.?(\\d+)?@' => 
    array (
      'family' => 'Pale Moon (Firefox Variant)',
    ),
    '@(Fennec)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+[a-z]*)@' => 
    array (
      'family' => 'Firefox Mobile',
    ),
    '@(Fennec)/(\\d+)\\.(\\d+)(pre)@' => 
    array (
      'family' => 'Firefox Mobile',
    ),
    '@(Fennec)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Firefox Mobile',
    ),
    '@Mobile.*(Firefox)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Firefox Mobile',
    ),
    '@(Namoroka|Shiretoko|Minefield)/(\\d+)\\.(\\d+)\\.(\\d+(?:pre)?)@' => 
    array (
      'family' => 'Firefox ($1)',
    ),
    '@(Firefox)/(\\d+)\\.(\\d+)(a\\d+[a-z]*)@' => 
    array (
      'family' => 'Firefox Alpha',
    ),
    '@(Firefox)/(\\d+)\\.(\\d+)(b\\d+[a-z]*)@' => 
    array (
      'family' => 'Firefox Beta',
    ),
    '@(Firefox)-(?:\\d+\\.\\d+)?/(\\d+)\\.(\\d+)(a\\d+[a-z]*)@' => 
    array (
      'family' => 'Firefox Alpha',
    ),
    '@(Firefox)-(?:\\d+\\.\\d+)?/(\\d+)\\.(\\d+)(b\\d+[a-z]*)@' => 
    array (
      'family' => 'Firefox Beta',
    ),
    '@(Namoroka|Shiretoko|Minefield)/(\\d+)\\.(\\d+)([ab]\\d+[a-z]*)?@' => 
    array (
      'family' => 'Firefox ($1)',
    ),
    '@(Firefox).*Tablet browser (\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'MicroB',
    ),
    '@(MozillaDeveloperPreview)/(\\d+)\\.(\\d+)([ab]\\d+[a-z]*)?@' => 
    array (
    ),
    '@(Flock)/(\\d+)\\.(\\d+)(b\\d+?)@' => 
    array (
    ),
    '@(RockMelt)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(Navigator)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Netscape',
    ),
    '@(Navigator)/(\\d+)\\.(\\d+)([ab]\\d+)@' => 
    array (
      'family' => 'Netscape',
    ),
    '@(Netscape6)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+)?@' => 
    array (
      'family' => 'Netscape',
    ),
    '@(MyIBrow)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'My Internet Browser',
    ),
    '@(Opera Tablet).*Version/(\\d+)\\.(\\d+)(?:\\.(\\d+))?@' => 
    array (
    ),
    '@(Opera)/.+Opera Mobi.+Version/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Opera Mobile',
    ),
    '@(Opera)/(\\d+)\\.(\\d+).+Opera Mobi@' => 
    array (
      'family' => 'Opera Mobile',
    ),
    '@Opera Mobi.+(Opera)(?:/|\\s+)(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Opera Mobile',
    ),
    '@Opera Mobi@' => 
    array (
      'family' => 'Opera Mobile',
    ),
    '@(Opera Mini)(?:/att)?/(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(Opera)/9.80.*Version/(\\d+)\\.(\\d+)(?:\\.(\\d+))?@' => 
    array (
    ),
    '@(?:Mobile Safari).*(OPR)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Opera Mobile',
    ),
    '@(?:Chrome).*(OPR)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Opera',
    ),
    '@(hpw|web)OS/(\\d+)\\.(\\d+)(?:\\.(\\d+))?@' => 
    array (
      'family' => 'webOS Browser',
    ),
    '@(luakit)@' => 
    array (
      'family' => 'LuaKit',
    ),
    '@(Snowshoe)/(\\d+)\\.(\\d+).(\\d+)@' => 
    array (
    ),
    '@(Lightning)/(\\d+)\\.(\\d+)\\.?((?:[ab]?\\d+[a-z]*)|(?:\\d*))@' => 
    array (
    ),
    '@(Firefox)/(\\d+)\\.(\\d+)\\.(\\d+(?:pre)?) \\(Swiftfox\\)@' => 
    array (
      'family' => 'Swiftfox',
    ),
    '@(Firefox)/(\\d+)\\.(\\d+)([ab]\\d+[a-z]*)? \\(Swiftfox\\)@' => 
    array (
      'family' => 'Swiftfox',
    ),
    '@(rekonq)/(\\d+)\\.(\\d+)\\.?(\\d+)? Safari@' => 
    array (
      'family' => 'Rekonq',
    ),
    '@rekonq@' => 
    array (
      'family' => 'Rekonq',
    ),
    '@(conkeror|Conkeror)/(\\d+)\\.(\\d+)\\.?(\\d+)?@' => 
    array (
      'family' => 'Conkeror',
    ),
    '@(konqueror)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Konqueror',
    ),
    '@(WeTab)-Browser@' => 
    array (
    ),
    '@(Comodo_Dragon)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Comodo Dragon',
    ),
    '@(YottaaMonitor|BrowserMob|HttpMonitor|YandexBot|Slurp|BingPreview|PagePeeker|ThumbShotsBot|WebThumb|URL2PNG|ZooShot|GomezA|Catchpoint bot|Willow Internet Crawler|Google SketchUp|Read%20Later)@' => 
    array (
    ),
    '@(Symphony) (\\d+).(\\d+)@' => 
    array (
    ),
    '@(Minimo)@' => 
    array (
    ),
    '@PLAYSTATION 3.+WebKit@' => 
    array (
      'family' => 'NetFront NX',
    ),
    '@PLAYSTATION 3@' => 
    array (
      'family' => 'NetFront',
    ),
    '@(PlayStation Portable)@' => 
    array (
      'family' => 'NetFront',
    ),
    '@(PlayStation Vita)@' => 
    array (
      'family' => 'NetFront NX',
    ),
    '@AppleWebKit.+ (NX)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'NetFront NX',
    ),
    '@(Nintendo 3DS)@' => 
    array (
      'family' => 'NetFront NX',
    ),
    '@(Silk)/(\\d+)\\.(\\d+)(?:\\.([0-9\\-]+))?@' => 
    array (
      'family' => 'Amazon Silk',
    ),
    '@(Puffin)/(\\d+)\\.(\\d+)(?:\\.(\\d+))?@' => 
    array (
    ),
    '@(CrMo)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Chrome Mobile',
    ),
    '@(CriOS)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Chrome Mobile iOS',
    ),
    '@(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+) Mobile@' => 
    array (
      'family' => 'Chrome Mobile',
    ),
    '@(chromeframe)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Chrome Frame',
    ),
    '@(UCBrowser)[ /](\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'UC Browser',
    ),
    '@(UC Browser)[ /](\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(UC Browser|UCBrowser|UCWEB)(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'UC Browser',
    ),
    '@(SLP Browser)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Tizen Browser',
    ),
    '@(SE 2\\.X) MetaSr (\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Sogou Explorer',
    ),
    '@(baidubrowser)[/\\s](\\d+)@' => 
    array (
      'family' => 'Baidu Browser',
    ),
    '@(FlyFlow)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Baidu Explorer',
    ),
    '@(MQQBrowser/Mini)(?:(\\d+)(?:\\.(\\d+)(?:\\.(\\d+))?)?)?@' => 
    array (
      'family' => 'QQ Browser Mini',
    ),
    '@(MQQBrowser)(?:/(\\d+)(?:\\.(\\d+)(?:\\.(\\d+))?)?)?@' => 
    array (
      'family' => 'QQ Browser Mobile',
    ),
    '@(QQBrowser)(?:/(\\d+)(?:\\.(\\d+)\\.(\\d+)(?:\\.(\\d+))?)?)?@' => 
    array (
      'family' => 'QQ Browser',
    ),
    '@(Pingdom.com_bot_version_)(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'PingdomBot',
    ),
    '@(facebookexternalhit)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'FacebookBot',
    ),
    '@(LinkedInBot)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'LinkedInBot',
    ),
    '@(Twitterbot)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'TwitterBot',
    ),
    '@Google.*/\\+/web/snippet@' => 
    array (
      'family' => 'GooglePlusBot',
    ),
    '@(Rackspace Monitoring)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'RackspaceBot',
    ),
    '@(PyAMF)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(YaBrowser)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Yandex Browser',
    ),
    '@(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+).* MRCHROME@' => 
    array (
      'family' => 'Mail.ru Chromium Browser',
    ),
    '@(AOL) (\\d+)\\.(\\d+); AOLBuild (\\d+)@' => 
    array (
    ),
    '@(AdobeAIR|FireWeb|Jasmine|ANTGalio|Midori|Fresco|Lobo|PaleMoon|Maxthon|Lynx|OmniWeb|Dillo|Camino|Demeter|Fluid|Fennec|Epiphany|Shiira|Sunrise|Flock|Netscape|Lunascape|WebPilot|NetFront|Netfront|Konqueror|SeaMonkey|Kazehakase|Vienna|Iceape|Iceweasel|IceWeasel|Iron|K-Meleon|Sleipnir|Galeon|GranParadiso|Opera Mini|iCab|NetNewsWire|ThunderBrowse|Iris|UP\\.Browser|Bunjalloo|Google Earth|Raven for Mac|Openwave)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@MSOffice 12@' => 
    array (
      'family' => 'Outlook',
      'major' => '2007',
    ),
    '@MSOffice 14@' => 
    array (
      'family' => 'Outlook',
      'major' => '2010',
    ),
    '@Microsoft Outlook 15\\.\\d+\\.\\d+@' => 
    array (
      'family' => 'Outlook',
      'major' => '2013',
    ),
    '@(Airmail) (\\d+)\\.(\\d+)(?:\\.(\\d+))?@' => 
    array (
    ),
    '@(Thunderbird)/(\\d+)\\.(\\d+)\\.(\\d+(?:pre)?)@' => 
    array (
      'family' => 'Thunderbird',
    ),
    '@(Chromium|Chrome)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@\\b(Dolphin)(?: |HDCN/|/INT\\-)(\\d+)\\.(\\d+)\\.?(\\d+)?@' => 
    array (
    ),
    '@(bingbot|Bolt|Jasmine|IceCat|Skyfire|Midori|Maxthon|Lynx|Arora|IBrowse|Dillo|Camino|Shiira|Fennec|Phoenix|Chrome|Flock|Netscape|Lunascape|Epiphany|WebPilot|Opera Mini|Opera|NetFront|Netfront|Konqueror|Googlebot|SeaMonkey|Kazehakase|Vienna|Iceape|Iceweasel|IceWeasel|Iron|K-Meleon|Sleipnir|Galeon|GranParadiso|iCab|NetNewsWire|Space Bison|Stainless|Orca|Dolfin|BOLT|Minimo|Tizen Browser|Polaris|Abrowser|Planetweb|ICE Browser|mDolphin)/(\\d+)\\.(\\d+)\\.?(\\d+)?@' => 
    array (
    ),
    '@(Chromium|Chrome)/(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(IEMobile)[ /](\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'IE Mobile',
    ),
    '@(iRider|Crazy Browser|SkipStone|iCab|Lunascape|Sleipnir|Maemo Browser) (\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(iCab|Lunascape|Opera|Android|Jasmine|Polaris) (\\d+)\\.(\\d+)\\.?(\\d+)?@' => 
    array (
    ),
    '@(Kindle)/(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(Android) Donut@' => 
    array (
      'major' => '1',
      'minor' => '2',
    ),
    '@(Android) Eclair@' => 
    array (
      'major' => '2',
      'minor' => '1',
    ),
    '@(Android) Froyo@' => 
    array (
      'major' => '2',
      'minor' => '2',
    ),
    '@(Android) Gingerbread@' => 
    array (
      'major' => '2',
      'minor' => '3',
    ),
    '@(Android) Honeycomb@' => 
    array (
      'major' => '3',
    ),
    '@(MSIE) (\\d+)\\.(\\d+).*XBLWP7@' => 
    array (
      'family' => 'IE Large Screen',
    ),
    '@(Obigo)InternetBrowser@' => 
    array (
    ),
    '@(Obigo)\\-Browser@' => 
    array (
    ),
    '@(Obigo|OBIGO)[^\\d]*(\\d+)(?:.(\\d+))?@' => 
    array (
      'family' => 'Obigo',
    ),
    '@(MAXTHON|Maxthon) (\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Maxthon',
    ),
    '@(Maxthon|MyIE2|Uzbl|Shiira)@' => 
    array (
      'major' => '0',
    ),
    '@(BrowseX) \\((\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(NCSA_Mosaic)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'NCSA Mosaic',
    ),
    '@(POLARIS)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Polaris',
    ),
    '@(Embider)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Polaris',
    ),
    '@(BonEcho)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+)?@' => 
    array (
      'family' => 'Bon Echo',
    ),
    '@(CFNetwork)(?:/(\\d+)\\.(\\d+)\\.?(\\d+)?)?@' => 
    array (
      'family' => 'CFNetwork',
    ),
    '@(iPod).+Version/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Mobile Safari',
    ),
    '@(iPod).*Version/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Mobile Safari',
    ),
    '@(iPhone).*Version/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Mobile Safari',
    ),
    '@(iPhone).*Version/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Mobile Safari',
    ),
    '@(iPad).*Version/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Mobile Safari',
    ),
    '@(iPad).*Version/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Mobile Safari',
    ),
    '@(iPod|iPhone|iPad);.*CPU.*OS (\\d+)_(\\d+)(?:_(\\d+))?.*Mobile@' => 
    array (
      'family' => 'Mobile Safari',
    ),
    '@(iPod|iPhone|iPad)@' => 
    array (
      'family' => 'Mobile Safari',
    ),
    '@(AvantGo) (\\d+).(\\d+)@' => 
    array (
    ),
    '@(OneBrowser)/(\\d+).(\\d+)@' => 
    array (
      'family' => 'ONE Browser',
    ),
    '@(Avant)@' => 
    array (
      'major' => '1',
    ),
    '@(QtCarBrowser)@' => 
    array (
      'major' => '1',
    ),
    '@^(iBrowser/Mini)(\\d+).(\\d+)@' => 
    array (
      'family' => 'iBrowser Mini',
    ),
    '@^(iBrowser|iRAPP)/(\\d+).(\\d+)@' => 
    array (
    ),
    '@^(Nokia)@' => 
    array (
      'family' => 'Nokia Services (WAP) Browser',
    ),
    '@(NokiaBrowser)/(\\d+)\\.(\\d+).(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Nokia Browser',
    ),
    '@(NokiaBrowser)/(\\d+)\\.(\\d+).(\\d+)@' => 
    array (
      'family' => 'Nokia Browser',
    ),
    '@(NokiaBrowser)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Nokia Browser',
    ),
    '@(BrowserNG)/(\\d+)\\.(\\d+).(\\d+)@' => 
    array (
      'family' => 'Nokia Browser',
    ),
    '@(Series60)/5\\.0@' => 
    array (
      'family' => 'Nokia Browser',
      'major' => '7',
      'minor' => '0',
    ),
    '@(Series60)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Nokia OSS Browser',
    ),
    '@(S40OviBrowser)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Ovi Browser',
    ),
    '@(Nokia)[EN]?(\\d+)@' => 
    array (
    ),
    '@(BB10);@' => 
    array (
      'family' => 'BlackBerry WebKit',
    ),
    '@(PlayBook).+RIM Tablet OS (\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'BlackBerry WebKit',
    ),
    '@(Black[bB]erry).+Version/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'BlackBerry WebKit',
    ),
    '@(Black[bB]erry)\\s?(\\d+)@' => 
    array (
      'family' => 'BlackBerry',
    ),
    '@(OmniWeb)/v(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(Blazer)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Palm Blazer',
    ),
    '@(Pre)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Palm Pre',
    ),
    '@(ELinks)/(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(ELinks) \\((\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(Links) \\((\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(QtWeb) Internet Browser/(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(PhantomJS)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(AppleWebKit)/(\\d+)\\.?(\\d+)?\\+ .* Safari@' => 
    array (
      'family' => 'WebKit Nightly',
    ),
    '@(Version)/(\\d+)\\.(\\d+)(?:\\.(\\d+))?.*Safari/@' => 
    array (
      'family' => 'Safari',
    ),
    '@(Safari)/\\d+@' => 
    array (
    ),
    '@(OLPC)/Update(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(OLPC)/Update()\\.(\\d+)@' => 
    array (
      'major' => '0',
    ),
    '@(SEMC\\-Browser)/(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(Teleca)@' => 
    array (
      'family' => 'Teleca Browser',
    ),
    '@(Phantom)/V(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Phantom Browser',
    ),
    '@Trident(.*)rv.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'IE',
    ),
    '@(Espial)/(\\d+)(?:\\.(\\d+))?(?:\\.(\\d+))?@' => 
    array (
    ),
    '@(AppleWebKit)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'AppleMail',
    ),
    '@(Firefox)/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(Firefox)/(\\d+)\\.(\\d+)(pre|[ab]\\d+[a-z]*)?@' => 
    array (
    ),
    '@([MS]?IE) (\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'IE',
    ),
    '@(python-requests)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Python Requests',
    ),
  ),
  'os' => 
  array (
    '@HbbTV/\\d+\\.\\d+\\.\\d+ \\( ;(LG)E ;NetCast 4.0@' => 
    array (
      'major' => '2013',
    ),
    '@HbbTV/\\d+\\.\\d+\\.\\d+ \\( ;(LG)E ;NetCast 3.0@' => 
    array (
      'major' => '2012',
    ),
    '@HbbTV/1.1.1 \\(;;;;;\\) Maple_2011@' => 
    array (
      'family' => 'Samsung',
      'major' => '2011',
    ),
    '@HbbTV/\\d+\\.\\d+\\.\\d+ \\(;(Samsung);SmartTV([0-9]{4});.*FXPDEUC@' => 
    array (
      'minor' => 'UE40F7000',
    ),
    '@HbbTV/\\d+\\.\\d+\\.\\d+ \\(;(Samsung);SmartTV([0-9]{4});.*MST12DEUC@' => 
    array (
      'minor' => 'UE32F4500',
    ),
    '@HbbTV/1.1.1 \\(; (Philips);.*NETTV/4@' => 
    array (
      'major' => '2013',
    ),
    '@HbbTV/1.1.1 \\(; (Philips);.*NETTV/3@' => 
    array (
      'major' => '2012',
    ),
    '@HbbTV/1.1.1 \\(; (Philips);.*NETTV/2@' => 
    array (
      'major' => '2011',
    ),
    '@HbbTV/\\d+\\.\\d+\\.\\d+.*(firetv)-firefox-plugin (\\d+).(\\d+).(\\d+)@' => 
    array (
      'family' => 'FireHbbTV',
    ),
    '@HbbTV/\\d+\\.\\d+\\.\\d+ \\(.*; ?([a-zA-Z]+) ?;.*(201[1-9]).*\\)@' => 
    array (
    ),
    '@(Windows Phone) (?:OS[ /])?(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(Android)[ \\-/](\\d+)\\.(\\d+)(?:[.\\-]([a-z0-9]+))?@' => 
    array (
    ),
    '@(Android) Donut@' => 
    array (
      'major' => '1',
      'minor' => '2',
    ),
    '@(Android) Eclair@' => 
    array (
      'major' => '2',
      'minor' => '1',
    ),
    '@(Android) Froyo@' => 
    array (
      'major' => '2',
      'minor' => '2',
    ),
    '@(Android) Gingerbread@' => 
    array (
      'major' => '2',
      'minor' => '3',
    ),
    '@(Android) Honeycomb@' => 
    array (
      'major' => '3',
    ),
    '@^UCWEB.*; (Adr) (\\d+)\\.(\\d+)(?:[.\\-]([a-z0-9]+))?;@' => 
    array (
      'family' => 'Android',
    ),
    '@^UCWEB.*; (iPad OS|iPh OS) (\\d+)_(\\d+)(?:_(\\d+))?;@' => 
    array (
      'family' => 'iOS',
    ),
    '@^UCWEB.*; (wds) (\\d+)\\.(\\d+)(?:\\.(\\d+))?;@' => 
    array (
      'family' => 'Windows Phone',
    ),
    '@^(JUC).*; ?U; ?(?:Android)?(\\d+)\\.(\\d+)(?:[\\.\\-]([a-z0-9]+))?@' => 
    array (
      'family' => 'Android',
    ),
    '@(Silk-Accelerated=[a-z]{4,5})@' => 
    array (
      'family' => 'Android',
    ),
    '@(XBLWP7)@' => 
    array (
      'family' => 'Windows Phone',
    ),
    '@(Windows ?Mobile)@' => 
    array (
      'family' => 'Windows Mobile',
    ),
    '@(Windows (?:NT 5\\.2|NT 5\\.1))@' => 
    array (
      'family' => 'Windows XP',
    ),
    '@(Windows NT 6\\.1)@' => 
    array (
      'family' => 'Windows 7',
    ),
    '@(Windows NT 6\\.0)@' => 
    array (
      'family' => 'Windows Vista',
    ),
    '@(Win 9x 4\\.90)@' => 
    array (
      'family' => 'Windows ME',
    ),
    '@(Windows 98|Windows XP|Windows ME|Windows 95|Windows CE|Windows 7|Windows NT 4\\.0|Windows Vista|Windows 2000|Windows 3.1)@' => 
    array (
    ),
    '@(Windows NT 6\\.2; ARM;)@' => 
    array (
      'family' => 'Windows RT',
    ),
    '@(Windows NT 6\\.2)@' => 
    array (
      'family' => 'Windows 8',
    ),
    '@(Windows NT 6\\.3; ARM;)@' => 
    array (
      'family' => 'Windows RT 8.1',
    ),
    '@(Windows NT 6\\.3)@' => 
    array (
      'family' => 'Windows 8.1',
    ),
    '@(Windows NT 5\\.0)@' => 
    array (
      'family' => 'Windows 2000',
    ),
    '@(WinNT4.0)@' => 
    array (
      'family' => 'Windows NT 4.0',
    ),
    '@(Windows ?CE)@' => 
    array (
      'family' => 'Windows CE',
    ),
    '@Win ?(95|98|3.1|NT|ME|2000)@' => 
    array (
      'family' => 'Windows $1',
    ),
    '@Win16@' => 
    array (
      'family' => 'Windows 3.1',
    ),
    '@Win32@' => 
    array (
      'family' => 'Windows 95',
    ),
    '@(Tizen)/(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(Mac OS X) (\\d+)[_.](\\d+)(?:[_.](\\d+))?@' => 
    array (
    ),
    '@ (Dar)(win)/(9).(\\d+).*\\((?:i386|x86_64|Power Macintosh)\\)@' => 
    array (
      'family' => 'Mac OS X',
      'major' => '10',
      'minor' => '5',
    ),
    '@ (Dar)(win)/(10).(\\d+).*\\((?:i386|x86_64)\\)@' => 
    array (
      'family' => 'Mac OS X',
      'major' => '10',
      'minor' => '6',
    ),
    '@ (Dar)(win)/(11).(\\d+).*\\((?:i386|x86_64)\\)@' => 
    array (
      'family' => 'Mac OS X',
      'major' => '10',
      'minor' => '7',
    ),
    '@ (Dar)(win)/(12).(\\d+).*\\((?:i386|x86_64)\\)@' => 
    array (
      'family' => 'Mac OS X',
      'major' => '10',
      'minor' => '8',
    ),
    '@ (Dar)(win)/(13).(\\d+).*\\((?:i386|x86_64)\\)@' => 
    array (
      'family' => 'Mac OS X',
      'major' => '10',
      'minor' => '9',
    ),
    '@Mac_PowerPC@' => 
    array (
      'family' => 'Mac OS',
    ),
    '@(?:PPC|Intel) (Mac OS X)@' => 
    array (
    ),
    '@(CPU OS|iPhone OS|CPU iPhone) +(\\d+)[_\\.](\\d+)(?:[_\\.](\\d+))?@' => 
    array (
      'family' => 'iOS',
    ),
    '@(iPhone|iPad|iPod); Opera@' => 
    array (
      'family' => 'iOS',
    ),
    '@(iPhone|iPad|iPod).*Mac OS X.*Version/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'iOS',
    ),
    '@(AppleTV)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'ATV OS X',
    ),
    '@(CFNetwork)/(5)48\\.0\\.3.* Darwin/11\\.0\\.0@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CFNetwork)/(5)48\\.(0)\\.4.* Darwin/(1)1\\.0\\.0@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CFNetwork)/(5)48\\.(1)\\.4@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CFNetwork)/(4)85\\.1(3)\\.9@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CFNetwork)/(6)09\\.(1)\\.4@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CFNetwork)/(6)(0)9@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CFNetwork)/6(7)2\\.(1)\\.13@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CFNetwork)/6(7)2\\.(1)\\.(1)4@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CF)(Network)/6(7)(2)\\.1\\.15@' => 
    array (
      'family' => 'iOS',
      'major' => '7',
      'minor' => '1',
    ),
    '@(CFNetwork)/6(7)2\\.(0)\\.(?:2|8)@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CFNetwork)/709\\.1@' => 
    array (
      'family' => 'iOS',
      'major' => '8',
      'minor' => '0.b5',
    ),
    '@CFNetwork/.* Darwin/(9)\\.\\d+@' => 
    array (
      'family' => 'iOS',
      'major' => '1',
    ),
    '@CFNetwork/.* Darwin/(10)\\.\\d+@' => 
    array (
      'family' => 'iOS',
      'major' => '4',
    ),
    '@CFNetwork/.* Darwin/(11)\\.\\d+@' => 
    array (
      'family' => 'iOS',
      'major' => '5',
    ),
    '@CFNetwork/.* Darwin/(13)\\.\\d+@' => 
    array (
      'family' => 'iOS',
      'major' => '6',
    ),
    '@CFNetwork/6.* Darwin/(14)\\.\\d+@' => 
    array (
      'family' => 'iOS',
      'major' => '7',
    ),
    '@CFNetwork/7.* Darwin/(14)\\.\\d+@' => 
    array (
      'family' => 'iOS',
      'major' => '8',
      'minor' => '0',
    ),
    '@\\b(iOS[ /]|iPhone(?:/| v|[ _]OS[/,]|; | OS : |\\d,\\d/|\\d,\\d; )|iPad/)(\\d{1,2})[_\\.](\\d{1,2})(?:[_\\.](\\d+))?@' => 
    array (
      'family' => 'iOS',
    ),
    '@(CrOS) [a-z0-9_]+ (\\d+)\\.(\\d+)(?:\\.(\\d+))?@' => 
    array (
      'family' => 'Chrome OS',
    ),
    '@([Dd]ebian)@' => 
    array (
      'family' => 'Debian',
    ),
    '@(Linux Mint)(?:/(\\d+))?@' => 
    array (
    ),
    '@(Mandriva)(?: Linux)?/(?:[\\d.-]+m[a-z]{2}(\\d+).(\\d))?@' => 
    array (
    ),
    '@(Symbian[Oo][Ss])[/ ](\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Symbian OS',
    ),
    '@(Symbian/3).+NokiaBrowser/7\\.3@' => 
    array (
      'family' => 'Symbian^3 Anna',
    ),
    '@(Symbian/3).+NokiaBrowser/7\\.4@' => 
    array (
      'family' => 'Symbian^3 Belle',
    ),
    '@(Symbian/3)@' => 
    array (
      'family' => 'Symbian^3',
    ),
    '@\\b(Series 60|SymbOS|S60Version|S60V\\d|S60\\b)@' => 
    array (
      'family' => 'Symbian OS',
    ),
    '@(MeeGo)@' => 
    array (
    ),
    '@Symbian [Oo][Ss]@' => 
    array (
      'family' => 'Symbian OS',
    ),
    '@Series40;@' => 
    array (
      'family' => 'Nokia Series 40',
    ),
    '@Series30Plus;@' => 
    array (
      'family' => 'Nokia Series 30 Plus',
    ),
    '@(BB10);.+Version/(\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'BlackBerry OS',
    ),
    '@(Black[Bb]erry)[0-9a-z]+/(\\d+)\\.(\\d+)\\.(\\d+)(?:\\.(\\d+))?@' => 
    array (
      'family' => 'BlackBerry OS',
    ),
    '@(Black[Bb]erry).+Version/(\\d+)\\.(\\d+)\\.(\\d+)(?:\\.(\\d+))?@' => 
    array (
      'family' => 'BlackBerry OS',
    ),
    '@(RIM Tablet OS) (\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'BlackBerry Tablet OS',
    ),
    '@(Play[Bb]ook)@' => 
    array (
      'family' => 'BlackBerry Tablet OS',
    ),
    '@(Black[Bb]erry)@' => 
    array (
      'family' => 'BlackBerry OS',
    ),
    '@\\((?:Mobile|Tablet);.+Firefox/\\d+\\.\\d+@' => 
    array (
      'family' => 'Firefox OS',
    ),
    '@(BREW)[ /](\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
    ),
    '@(BREW);@' => 
    array (
    ),
    '@(Brew MP|BMP)[ /](\\d+)\\.(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'Brew MP',
    ),
    '@BMP;@' => 
    array (
      'family' => 'Brew MP',
    ),
    '@(GoogleTV)(?: (\\d+)\\.(\\d+)(?:\\.(\\d+))?|/[\\da-z]+)@' => 
    array (
    ),
    '@(WebTV)/(\\d+).(\\d+)@' => 
    array (
    ),
    '@(hpw|web)OS/(\\d+)\\.(\\d+)(?:\\.(\\d+))?@' => 
    array (
      'family' => 'webOS',
    ),
    '@(VRE);@' => 
    array (
    ),
    '@(Fedora|Red Hat|PCLinuxOS|Puppy|Ubuntu|Kindle|Bada|Lubuntu|BackTrack|Slackware|(?:Free|Open|Net|\\b)BSD)[/ ](\\d+)\\.(\\d+)(?:\\.(\\d+)(?:\\.(\\d+))?)?@' => 
    array (
    ),
    '@(Linux)[ /](\\d+)\\.(\\d+)(?:\\.(\\d+))?.*gentoo@' => 
    array (
      'family' => 'Gentoo',
    ),
    '@\\((Bada);@' => 
    array (
    ),
    '@(Windows|Android|WeTab|Maemo)@' => 
    array (
    ),
    '@(Ubuntu|Kubuntu|Arch Linux|CentOS|Slackware|Gentoo|openSUSE|SUSE|Red Hat|Fedora|PCLinuxOS|Gentoo|Mageia|(?:Free|Open|Net|\\b)BSD)@' => 
    array (
    ),
    '@(Linux)(?:[ /](\\d+)\\.(\\d+)(?:\\.(\\d+))?)?@' => 
    array (
    ),
    '@SunOS@' => 
    array (
      'family' => 'Solaris',
    ),
  ),
  'device' => 
  array (
    '@HTC ([A-Z][a-z0-9]+) Build@' => 
    array (
      'device' => 'HTC $1',
    ),
    '@HTC ([A-Z][a-z0-9 ]+) \\d+\\.\\d+\\.\\d+\\.\\d+@' => 
    array (
      'device' => 'HTC $1',
    ),
    '@HTC_Touch_([A-Za-z0-9]+)@' => 
    array (
      'device' => 'HTC Touch ($1)',
    ),
    '@USCCHTC(\\d+)@' => 
    array (
      'device' => 'HTC $1 (US Cellular)',
    ),
    '@Sprint APA(9292)@' => 
    array (
      'device' => 'HTC $1 (Sprint)',
    ),
    '@HTC ([A-Za-z0-9]+ [A-Z])@' => 
    array (
      'device' => 'HTC $1',
    ),
    '@HTC[-_/\\s]([A-Za-z0-9]+)@' => 
    array (
      'device' => 'HTC $1',
    ),
    '@(ADR[A-Za-z0-9]+)@' => 
    array (
      'device' => 'HTC $1',
    ),
    '@(HTC)@' => 
    array (
    ),
    '@(QtCarBrowser)@' => 
    array (
      'device' => 'Tesla Model S',
    ),
    '@(SamsungSGHi560)@' => 
    array (
      'device' => 'Samsung SGHi560',
    ),
    '@(SCH-[A-Za-z0-9_-]+)@' => 
    array (
      'device' => 'Samsung $1',
    ),
    '@(SGH-[A-Za-z0-9_-]+)@' => 
    array (
      'device' => 'Samsung $1',
    ),
    '@(GT-[A-Za-z0-9_-]+)@' => 
    array (
      'device' => 'Samsung $1',
    ),
    '@(SM-[A-Za-z0-9_-]+)@' => 
    array (
      'device' => 'Samsung $1',
    ),
    '@(SPH-[A-Za-z0-9_-]+)@' => 
    array (
      'device' => 'Samsung $1',
    ),
    '@SAMSUNG-([A-Za-z0-9_-]+)@' => 
    array (
      'device' => 'Samsung $1',
    ),
    '@SAMSUNG ([A-Za-z0-9_-]+)@' => 
    array (
      'device' => 'Samsung $1',
    ),
    '@SonyEricsson([A-Za-z0-9]+)/@' => 
    array (
      'device' => 'Ericsson $1',
    ),
    '@PLAYSTATION 3@' => 
    array (
      'device' => 'PlayStation 3',
    ),
    '@(PlayStation (:?Portable|Vita))@' => 
    array (
    ),
    '@(PlayStation (:?\\d+))@' => 
    array (
    ),
    '@(KFOT Build)@' => 
    array (
      'device' => 'Kindle Fire',
    ),
    '@(KFTT Build)@' => 
    array (
      'device' => 'Kindle Fire HD',
    ),
    '@(KFJWI Build)@' => 
    array (
      'device' => 'Kindle Fire HD 8.9" WiFi',
    ),
    '@(KFJWA Build)@' => 
    array (
      'device' => 'Kindle Fire HD 8.9" 4G',
    ),
    '@(KFSOWI Build)@' => 
    array (
      'device' => 'Kindle Fire HD 7" WiFi',
    ),
    '@(KFTHWI Build)@' => 
    array (
      'device' => 'Kindle Fire HDX 7" WiFi',
    ),
    '@(KFTHWA Build)@' => 
    array (
      'device' => 'Kindle Fire HDX 7" 4G',
    ),
    '@(KFAPWI Build)@' => 
    array (
      'device' => 'Kindle Fire HDX 8.9" WiFi',
    ),
    '@(KFAPWA Build)@' => 
    array (
      'device' => 'Kindle Fire HDX 8.9" 4G',
    ),
    '@(Kindle Fire)@' => 
    array (
    ),
    '@(Kindle)@' => 
    array (
    ),
    '@(Silk)/(\\d+)\\.(\\d+)(?:\\.([0-9\\-]+))?@' => 
    array (
      'device' => 'Kindle Fire',
    ),
    '@NokiaN([0-9]+)@' => 
    array (
      'device' => 'Nokia N$1',
    ),
    '@NOKIA([A-Za-z0-9\\v-]+)@' => 
    array (
      'device' => 'Nokia $1',
    ),
    '@Nokia([A-Za-z0-9\\v-]+)@' => 
    array (
      'device' => 'Nokia $1',
    ),
    '@NOKIA ([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'Nokia $1',
    ),
    '@Nokia ([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'Nokia $1',
    ),
    '@Lumia ([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'Lumia $1',
    ),
    '@Symbian@' => 
    array (
      'device' => 'Nokia',
    ),
    '@BB10; ([A-Za-z0-9\\- ]+)\\)@' => 
    array (
      'device' => 'BlackBerry $1',
    ),
    '@(PlayBook).+RIM Tablet OS@' => 
    array (
      'device' => 'BlackBerry Playbook',
    ),
    '@Black[Bb]erry ([0-9]+);@' => 
    array (
      'device' => 'BlackBerry $1',
    ),
    '@Black[Bb]erry([0-9]+)@' => 
    array (
      'device' => 'BlackBerry $1',
    ),
    '@Black[Bb]erry;@' => 
    array (
      'device' => 'BlackBerry',
    ),
    '@(Pre)/(\\d+)\\.(\\d+)@' => 
    array (
      'device' => 'Palm Pre',
    ),
    '@(Pixi)/(\\d+)\\.(\\d+)@' => 
    array (
      'device' => 'Palm Pixi',
    ),
    '@(Touch[Pp]ad)/(\\d+)\\.(\\d+)@' => 
    array (
      'device' => 'HP TouchPad',
    ),
    '@HPiPAQ([A-Za-z0-9]+)/(\\d+).(\\d+)@' => 
    array (
      'device' => 'HP iPAQ $1',
    ),
    '@Palm([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Palm $1',
    ),
    '@Treo([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Palm Treo $1',
    ),
    '@webOS.*(P160UNA)/(\\d+).(\\d+)@' => 
    array (
      'device' => 'HP Veer',
    ),
    '@(AppleTV)@' => 
    array (
      'device' => 'AppleTV',
    ),
    '@AdsBot-Google-Mobile@' => 
    array (
      'device' => 'Spider',
    ),
    '@Googlebot-Mobile/(\\d+).(\\d+)@' => 
    array (
      'device' => 'Spider',
    ),
    '@Googlebot/\\d+.\\d+@' => 
    array (
      'device' => 'Spider',
    ),
    '@NING/(\\d+).(\\d+)@' => 
    array (
      'device' => 'Spider',
    ),
    '@MsnBot-Media /(\\d+).(\\d+)@' => 
    array (
      'device' => 'Spider',
    ),
    '@(iPad) Simulator;@' => 
    array (
    ),
    '@(iPad);@' => 
    array (
    ),
    '@(iPod) touch;@' => 
    array (
    ),
    '@(iPod);@' => 
    array (
    ),
    '@(iPhone) Simulator;@' => 
    array (
    ),
    '@(iPhone);@' => 
    array (
    ),
    '@acer_([A-Za-z0-9]+)_@' => 
    array (
      'device' => 'Acer $1',
    ),
    '@ALCATEL-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Alcatel $1',
    ),
    '@Alcatel-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Alcatel $1',
    ),
    '@ALCATEL_ONE_TOUCH_([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Alcatel ONE TOUCH $1',
    ),
    '@ALCATEL (ONE TOUCH [A-Za-z0-9]+)@' => 
    array (
      'device' => 'Alcatel $1',
    ),
    '@ALCATEL (one touch [A-Za-z0-9]+)@' => 
    array (
      'device' => 'Alcatel $1',
    ),
    '@ALCATEL ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Alcatel $1',
    ),
    '@Amoi\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Amoi $1',
    ),
    '@AMOI\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Amoi $1',
    ),
    '@Asus\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Asus $1',
    ),
    '@ASUS\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Asus $1',
    ),
    '@BIRD\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Bird $1',
    ),
    '@BIRD\\.([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Bird $1',
    ),
    '@BIRD ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Bird $1',
    ),
    '@Dell ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Dell $1',
    ),
    '@DoCoMo/2\\.0 ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'DoCoMo $1',
    ),
    '@([A-Za-z0-9]+)_W\\;FOMA@' => 
    array (
      'device' => 'DoCoMo $1',
    ),
    '@([A-Za-z0-9]+)\\;FOMA@' => 
    array (
      'device' => 'DoCoMo $1',
    ),
    '@Huawei([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Huawei $1',
    ),
    '@HUAWEI-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Huawei $1',
    ),
    '@vodafone([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Huawei Vodafone $1',
    ),
    '@i\\-mate ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'i-mate $1',
    ),
    '@Kyocera\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Kyocera $1',
    ),
    '@KWC\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Kyocera $1',
    ),
    '@Lenovo\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Lenovo $1',
    ),
    '@Lenovo_([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Lenovo $1',
    ),
    '@(HbbTV)/[0-9]+\\.[0-9]+\\.[0-9]+@' => 
    array (
    ),
    '@LG/([A-Za-z0-9]+)@' => 
    array (
      'device' => 'LG $1',
    ),
    '@LG-LG([A-Za-z0-9]+)@' => 
    array (
      'device' => 'LG $1',
    ),
    '@LGE-LG([A-Za-z0-9]+)@' => 
    array (
      'device' => 'LG $1',
    ),
    '@LGE VX([A-Za-z0-9]+)@' => 
    array (
      'device' => 'LG $1',
    ),
    '@LG ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'LG $1',
    ),
    '@LGE LG\\-AX([A-Za-z0-9]+)@' => 
    array (
      'device' => 'LG $1',
    ),
    '@LG\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'LG $1',
    ),
    '@LGE\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'LG $1',
    ),
    '@LG([A-Za-z0-9]+)@' => 
    array (
      'device' => 'LG $1',
    ),
    '@(KIN)\\.One (\\d+)\\.(\\d+)@' => 
    array (
      'device' => 'Microsoft $1',
    ),
    '@(KIN)\\.Two (\\d+)\\.(\\d+)@' => 
    array (
      'device' => 'Microsoft $1',
    ),
    '@(Motorola)\\-([A-Za-z0-9]+)@' => 
    array (
    ),
    '@MOTO\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Motorola $1',
    ),
    '@MOT\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Motorola $1',
    ),
    '@ (DROID RAZR [A-Za-z0-9 ]+) @' => 
    array (
      'device' => 'Motorola $1',
    ),
    '@ (DROID[2 ][A-Za-z0-9 ]+) @' => 
    array (
      'device' => 'Motorola $1',
    ),
    '@ (Droid2| )@' => 
    array (
      'device' => 'Motorola $1',
    ),
    '@ (DROID2| )@' => 
    array (
      'device' => 'Motorola $1',
    ),
    '@(Nintendo WiiU)@' => 
    array (
      'device' => 'Nintendo Wii U',
    ),
    '@Nintendo (DS|3DS|DSi|Wii);@' => 
    array (
      'device' => 'Nintendo $1',
    ),
    '@Pantech([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Pantech $1',
    ),
    '@Philips([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Philips $1',
    ),
    '@Philips ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Philips $1',
    ),
    '@SAMSUNG-([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'Samsung $1',
    ),
    '@SAMSUNG\\; ([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'Samsung $1',
    ),
    '@ZTE-([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'ZTE $1',
    ),
    '@ZTE ([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'ZTE $1',
    ),
    '@ZTE_([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'ZTE $1',
    ),
    '@Dreamcast@' => 
    array (
      'device' => 'Sega Dreamcast',
    ),
    '@Softbank/1\\.0/([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Softbank $1',
    ),
    '@Softbank/2\\.0/([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Softbank $1',
    ),
    '@Sony([^ ]+) @' => 
    array (
      'device' => 'Sony $1',
    ),
    '@(WebTV)/(\\d+).(\\d+)@' => 
    array (
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+\\.[\\d]+; [^;]+; ([A-Za-z0-9 _-]+) @' => 
    array (
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+; [^;]+; ([A-Za-z0-9 _-]+) @' => 
    array (
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+; [^;]+; WOWMobile ([A-Za-z0-9 _-]+) @' => 
    array (
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+\\-update1; [^;]+; ([A-Za-z0-9 _-]+) @' => 
    array (
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+\\.[\\d]+;[^;]+;([A-Za-z0-9 _-]+) @' => 
    array (
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+\\.[\\d]+; ([A-Za-z0-9 _-]+) @' => 
    array (
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+; ([A-Za-z0-9 _-]+) @' => 
    array (
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+\\.[\\d]+; [^;]+; ([A-Za-z0-9\\.\\/_-]+) @' => 
    array (
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+; [^;]+; ([A-Za-z0-9\\.\\/_-]+) @' => 
    array (
    ),
    '@(hiptop|avantgo|plucker|xiino|blazer|elaine|up.browser|up.link|mmp|smartphone|midp|wap|vodafone|o2|pocket|mobile|pda)@' => 
    array (
      'device' => 'Generic Smartphone',
    ),
    '@^(1207|3gso|4thp|501i|502i|503i|504i|505i|506i|6310|6590|770s|802s|a wa|acer|acs\\-|airn|alav|asus|attw|au\\-m|aur |aus |abac|acoo|aiko|alco|alca|amoi|anex|anny|anyw|aptu|arch|argo|bell|bird|bw\\-n|bw\\-u|beck|benq|bilb|blac|c55/|cdm\\-|chtm|capi|comp|cond|craw|dall|dbte|dc\\-s|dica|ds\\-d|ds12|dait|devi|dmob|doco|dopo|el49|erk0|esl8|ez40|ez60|ez70|ezos|ezze|elai|emul|eric|ezwa|fake|fly\\-|fly_|g\\-mo|g1 u|g560|gf\\-5|grun|gene|go.w|good|grad|hcit|hd\\-m|hd\\-p|hd\\-t|hei\\-|hp i|hpip|hs\\-c|htc |htc\\-|htca|htcg)@' => 
    array (
      'device' => 'Generic Feature Phone',
    ),
    '@^(htcp|htcs|htct|htc_|haie|hita|huaw|hutc|i\\-20|i\\-go|i\\-ma|i230|iac|iac\\-|iac/|ig01|im1k|inno|iris|jata|java|kddi|kgt|kgt/|kpt |kwc\\-|klon|lexi|lg g|lg\\-a|lg\\-b|lg\\-c|lg\\-d|lg\\-f|lg\\-g|lg\\-k|lg\\-l|lg\\-m|lg\\-o|lg\\-p|lg\\-s|lg\\-t|lg\\-u|lg\\-w|lg/k|lg/l|lg/u|lg50|lg54|lge\\-|lge/|lynx|leno|m1\\-w|m3ga|m50/|maui|mc01|mc21|mcca|medi|meri|mio8|mioa|mo01|mo02|mode|modo|mot |mot\\-|mt50|mtp1|mtv |mate|maxo|merc|mits|mobi|motv|mozz|n100|n101|n102|n202|n203|n300|n302|n500|n502|n505|n700|n701|n710|nec\\-|nem\\-|newg|neon)@' => 
    array (
      'device' => 'Generic Feature Phone',
    ),
    '@^(netf|noki|nzph|o2 x|o2\\-x|opwv|owg1|opti|oran|ot\\-s|p800|pand|pg\\-1|pg\\-2|pg\\-3|pg\\-6|pg\\-8|pg\\-c|pg13|phil|pn\\-2|pt\\-g|palm|pana|pire|pock|pose|psio|qa\\-a|qc\\-2|qc\\-3|qc\\-5|qc\\-7|qc07|qc12|qc21|qc32|qc60|qci\\-|qwap|qtek|r380|r600|raks|rim9|rove|s55/|sage|sams|sc01|sch\\-|scp\\-|sdk/|se47|sec\\-|sec0|sec1|semc|sgh\\-|shar|sie\\-|sk\\-0|sl45|slid|smb3|smt5|sp01|sph\\-|spv |spv\\-|sy01|samm|sany|sava|scoo|send|siem|smar|smit|soft|sony|t\\-mo|t218|t250|t600|t610|t618|tcl\\-|tdg\\-|telm|tim\\-|ts70|tsm\\-|tsm3|tsm5|tx\\-9|tagt)@' => 
    array (
      'device' => 'Generic Feature Phone',
    ),
    '@^(talk|teli|topl|tosh|up.b|upg1|utst|v400|v750|veri|vk\\-v|vk40|vk50|vk52|vk53|vm40|vx98|virg|vite|voda|vulc|w3c |w3c\\-|wapj|wapp|wapu|wapm|wig |wapi|wapr|wapv|wapy|wapa|waps|wapt|winc|winw|wonu|x700|xda2|xdag|yas\\-|your|zte\\-|zeto|aste|audi|avan|blaz|brew|brvw|bumb|ccwa|cell|cldc|cmd\\-|dang|eml2|fetc|hipt|http|ibro|idea|ikom|ipaq|jbro|jemu|jigs|keji|kyoc|kyok|libw|m\\-cr|midp|mmef|moto|mwbp|mywa|newt|nok6|o2im|pant|pdxg|play|pluc|port|prox|rozo|sama|seri|smal|symb|treo|upsi|vx52|vx53|vx60|vx61|vx70|vx80|vx81|vx83|vx85|wap\\-|webc|whit|wmlb|xda\\-|xda_)@' => 
    array (
      'device' => 'Generic Feature Phone',
    ),
    '@(bingbot|bot|borg|google(^tv)|yahoo|slurp|msnbot|msrbot|openbot|archiver|netresearch|lycos|scooter|altavista|teoma|gigabot|baiduspider|blitzbot|oegp|charlotte|furlbot|http%20client|polybot|htdig|ichiro|mogimogi|larbin|pompos|scrubby|searchsight|seekbot|semanticdiscovery|silk|snappy|speedy|spider|voila|vortex|voyager|zao|zeal|fast\\-webcrawler|converacrawler|dataparksearch|findlinks|crawler|Netvibes|Sogou Pic Spider|ICC\\-Crawler|Innovazion Crawler|Daumoa|EtaoSpider|A6\\-Indexer|YisouSpider|Riddler|DBot|wsr\\-agent|Xenu|SeznamBot|PaperLiBot|SputnikBot|CCBot|ProoXiBot|Scrapy|Genieo|Screaming Frog|YahooCacheSystem|CiBra|Nutch)@' => 
    array (
      'device' => 'Spider',
    ),
  ),
);