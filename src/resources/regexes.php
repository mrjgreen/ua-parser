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
    '@(Coast)/(\\d+).(\\d+).(\\d+)@' => 
    array (
      'family' => 'Opera Coast',
    ),
    '@(OPiOS)/(\\d+).(\\d+).(\\d+)@' => 
    array (
      'family' => 'Opera Mini',
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
    '@(Edge)/(\\d+)\\.(\\d+)@' => 
    array (
      'family' => 'IE',
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
    '@(?:(?:iPhone|Windows CE|Android).*(?:(?:Bot|Yeti)-Mobile|YRSpider|bots?/\\d|(?:bot|spider)\\.html)|AdsBot-Google-Mobile.*iPhone)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Spider',
      'manufacturer' => 'Spider',
      'model' => 'Smartphone',
    ),
    '@(?:DoCoMo|\\bMOT\\b|\\bLG\\b|Nokia|Samsung|SonyEricsson).*(?:(?:Bot|Yeti)-Mobile|bots?/\\d|(?:bot|crawler)\\.html|(?:jump|google|Wukong)bot|ichiro/mobile|/spider|YahooSeeker)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Spider',
      'manufacturer' => 'Spider',
      'model' => 'Feature Phone',
    ),
    '@\\bSmartWatch *\\( *([^;]+) *; *([^;]+) *;@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@Android Application[^\\-]+ - (Sony) ?(Ericsson)? (.+) \\w+ - @' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1$2',
      'model' => '$3',
    ),
    '@Android Application[^\\-]+ - (?:HTC|HUAWEI|LGE|LENOVO|MEDION|TCT) (HTC|HUAWEI|LG|LENOVO|MEDION|ALCATEL)[ _\\-](.+) \\w+ - @' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@Android Application[^\\-]+ - ([^ ]+) (.+) \\w+ - @' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *([BLRQ]C\\d{4}[A-Z]+) +Build/@' => 
    array (
      'device' => '3Q $1',
      'manufacturer' => '3Q',
      'model' => '$1',
    ),
    '@; *(?:3Q_)([^;/]+) +Build@' => 
    array (
      'device' => '3Q $1',
      'manufacturer' => '3Q',
      'model' => '$1',
    ),
    '@Android [34].*; *(A100|A101|A110|A200|A210|A211|A500|A501|A510|A511|A700(?: Lite| 3G)?|A701|B1-A71|A1-\\d{3}|B1-\\d{3}|V360|V370|W500|W500P|W501|W501P|W510|W511|W700|Slider SL101|DA22[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Acer',
      'model' => '$1',
    ),
    '@; *Acer Iconia Tab ([^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Acer',
      'model' => '$1',
    ),
    '@; *(Z1[1235]0|E320[^/]*|S500|S510|Liquid[^;/]*|Iconia A\\d+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Acer',
      'model' => '$1',
    ),
    '@; *(Acer |ACER )([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Acer',
      'model' => '$2',
    ),
    '@; *(Advent )?(Vega(?:Bean|Comb)?).* Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Advent',
      'model' => '$2',
    ),
    '@; *(Ainol )?((?:NOVO|[Nn]ovo)[^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Ainol',
      'model' => '$2',
    ),
    '@; *AIRIS[ _\\-]?([^/;\\)]+) *(?:;|\\)|Build)@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'Airis',
      'model' => '$1',
    ),
    '@; *(OnePAD[^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'Airis',
      'model' => '$1',
    ),
    '@; *Airpad[ \\-]([^;/]+) Build@' => 
    array (
      'device' => 'Airpad $1',
      'manufacturer' => 'Airpad',
      'model' => '$1',
    ),
    '@; *(one ?touch) (EVO7|T10|T20) Build@' => 
    array (
      'device' => 'Alcatel One Touch $2',
      'manufacturer' => 'Alcatel',
      'model' => 'One Touch $2',
    ),
    '@; *(?:alcatel[ _])?(?:(?:one[ _]?touch[ _])|ot[ \\-])([^;/]+);? Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Alcatel One Touch $1',
      'manufacturer' => 'Alcatel',
      'model' => 'One Touch $1',
    ),
    '@; *(TCL)[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *(Vodafone Smart II|Optimus_Madrid) Build@' => 
    array (
      'device' => 'Alcatel $1',
      'manufacturer' => 'Alcatel',
      'model' => '$1',
    ),
    '@; *BASE_Lutea_3 Build@' => 
    array (
      'device' => 'Alcatel One Touch 998',
      'manufacturer' => 'Alcatel',
      'model' => 'One Touch 998',
    ),
    '@; *BASE_Varia Build@' => 
    array (
      'device' => 'Alcatel One Touch 918D',
      'manufacturer' => 'Alcatel',
      'model' => 'One Touch 918D',
    ),
    '@; *((?:FINE|Fine)\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Allfine',
      'model' => '$1',
    ),
    '@; *(ALLVIEW[ _]?|Allview[ _]?)((?:Speed|SPEED).*) Build/@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Allview',
      'model' => '$2',
    ),
    '@; *(ALLVIEW[ _]?|Allview[ _]?)?(AX1_Shine|AX2_Frenzy) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Allview',
      'model' => '$2',
    ),
    '@; *(ALLVIEW[ _]?|Allview[ _]?)([^;/]*) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Allview',
      'model' => '$2',
    ),
    '@; *(A13-MID) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Allwinner',
      'model' => '$1',
    ),
    '@; *(Allwinner)[ _\\-]?([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Allwinner',
      'model' => '$1',
    ),
    '@; *(A651|A701B?|A702|A703|A705|A706|A707|A711|A712|A713|A717|A722|A785|A801|A802|A803|A901|A902|A1002|A1003|A1006|A1007|A9701|A9703|Q710|Q80) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Amaway',
      'model' => '$1',
    ),
    '@; *(?:AMOI|Amoi)[ _]([^;/]+) Build@' => 
    array (
      'device' => 'Amoi $1',
      'manufacturer' => 'Amoi',
      'model' => '$1',
    ),
    '@^(?:AMOI|Amoi)[ _]([^;/]+) Linux@' => 
    array (
      'device' => 'Amoi $1',
      'manufacturer' => 'Amoi',
      'model' => '$1',
    ),
    '@; *(MW(?:0[789]|10)[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Aoc',
      'model' => '$1',
    ),
    '@; *(G7|M1013|M1015G|M11[CG]?|M-?12[B]?|M15|M19[G]?|M30[ACQ]?|M31[GQ]|M32|M33[GQ]|M36|M37|M38|M701T|M710|M712B|M713|M715G|M716G|M71(?:G|GS|T)?|M72[T]?|M73[T]?|M75[GT]?|M77G|M79T|M7L|M7LN|M81|M810|M81T|M82|M92|M92KS|M92S|M717G|M721|M722G|M723|M725G|M739|M785|M791|M92SK|M93D) Build@' => 
    array (
      'device' => 'Aoson $1',
      'manufacturer' => 'Aoson',
      'model' => '$1',
    ),
    '@; *Aoson ([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Aoson $1',
      'manufacturer' => 'Aoson',
      'model' => '$1',
    ),
    '@; *[Aa]panda[ _\\-]([^;/]+) Build@' => 
    array (
      'device' => 'Apanda $1',
      'manufacturer' => 'Apanda',
      'model' => '$1',
    ),
    '@; *(?:ARCHOS|Archos) ?(GAMEPAD(?:(?! Build|[;/\\(\\)\\-]).)*)@' => 
    array (
      'device' => 'Archos $1',
      'manufacturer' => 'Archos',
      'model' => '$1',
    ),
    '@(?:ARCHOS|Archos)[ _]?((?:(?! Build|[;/\\(\\)\\-]).)+)@' => 
    array (
      'device' => 'Archos $1',
      'manufacturer' => 'Archos',
      'model' => '$1',
    ),
    '@ARCHOS; GOGI; ([^;]+);@' => 
    array (
      'device' => 'Archos $1',
      'manufacturer' => 'Archos',
      'model' => '$1',
    ),
    '@; *(AN(?:7|8|9|10|13)[A-Z0-9]{1,4}) Build@' => 
    array (
      'device' => 'Archos $1',
      'manufacturer' => 'Archos',
      'model' => '$1',
    ),
    '@; *(A28|A32|A43|A70(?:BHT|CHT|HB|S|X)|A101(?:B|C|IT)|A7EB|A7EB-WK|101G9|80G9) Build@' => 
    array (
      'device' => 'Archos $1',
      'manufacturer' => 'Archos',
      'model' => '$1',
    ),
    '@; *(PAD-FMD[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Arival',
      'model' => '$1',
    ),
    '@; *(BioniQ) ?([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Arival',
      'model' => '$1 $2',
    ),
    '@; *(AN\\d[^;/]+|ARCHM\\d+) Build@' => 
    array (
      'device' => 'Arnova $1',
      'manufacturer' => 'Arnova',
      'model' => '$1',
    ),
    '@; *(?:ARNOVA|Arnova) ?([^;/]+) Build@' => 
    array (
      'device' => 'Arnova $1',
      'manufacturer' => 'Arnova',
      'model' => '$1',
    ),
    '@; *(?:ASSISTANT )?(AP)-?([1789]\\d{2}[A-Z]{0,2}|80104) Build@' => 
    array (
      'device' => 'Assistant $1-$2',
      'manufacturer' => 'Assistant',
      'model' => '$1-$2',
    ),
    '@; *(ME17\\d[^;/]*|ME3\\d{2}[^;/]+|K00[A-Z]|Nexus 10|Nexus 7(?: 2013)?|PadFone[^;/]*|Transformer[^;/]*|TF\\d{3}[^;/]*|eeepc) Build@' => 
    array (
      'device' => 'Asus $1',
      'manufacturer' => 'Asus',
      'model' => '$1',
    ),
    '@; *ASUS[ _]*([^;/]+) Build@' => 
    array (
      'device' => 'Asus $1',
      'manufacturer' => 'Asus',
      'model' => '$1',
    ),
    '@; *Garmin-Asus ([^;/]+) Build@' => 
    array (
      'device' => 'Garmin-Asus $1',
      'manufacturer' => 'Garmin-Asus',
      'model' => '$1',
    ),
    '@; *(Garminfone) Build@' => 
    array (
      'device' => 'Garmin $1',
      'manufacturer' => 'Garmin-Asus',
      'model' => '$1',
    ),
    '@; (\\@TAB-[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Attab',
      'model' => '$1',
    ),
    '@; *(T-(?:(?!01)\\d{2})[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Audiosonic',
      'model' => '$1',
    ),
    '@; *(?:Axioo[ _\\-]([^;/]+)|(picopad)[ _\\-]([^;/]+)) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Axioo $1$2 $3',
      'manufacturer' => 'Axioo',
      'model' => '$1$2 $3',
    ),
    '@; *(V(?:100|700|800)[^;/]*) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Azend',
      'model' => '$1',
    ),
    '@; *(IBAK\\-[^;/]*) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'Bak',
      'model' => '$1',
    ),
    '@; *(HY5001|HY6501|X12|X21|I5) Build@' => 
    array (
      'device' => 'Bedove $1',
      'manufacturer' => 'Bedove',
      'model' => '$1',
    ),
    '@; *(JC-[^;/]*) Build@' => 
    array (
      'device' => 'Benss $1',
      'manufacturer' => 'Benss',
      'model' => '$1',
    ),
    '@; *(BB) ([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Blackberry',
      'model' => '$2',
    ),
    '@; *(BlackBird)[ _](I8.*) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *(BlackBird)[ _](.*) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *([0-9]+BP[EM][^;/]*|Endeavour[^;/]+) Build@' => 
    array (
      'device' => 'Blaupunkt $1',
      'manufacturer' => 'Blaupunkt',
      'model' => '$1',
    ),
    '@; *((?:BLU|Blu)[ _\\-])([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Blu',
      'model' => '$2',
    ),
    '@; *(?:BMOBILE )?(Blu|BLU|DASH [^;/]+|VIVO 4\\.3|TANK 4\\.5) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Blu',
      'model' => '$1',
    ),
    '@; *(TOUCH\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Blusens',
      'model' => '$1',
    ),
    '@; *(AX5\\d+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Bmobile',
      'model' => '$1',
    ),
    '@; *([Bb]q) ([^;/]+);? Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'bq',
      'model' => '$2',
    ),
    '@; *(Maxwell [^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'bq',
      'model' => '$1',
    ),
    '@; *((?:B-Tab|B-TAB) ?\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Braun',
      'model' => '$1',
    ),
    '@; *(Broncho) ([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *CAPTIVA ([^;/]+) Build@' => 
    array (
      'device' => 'Captiva $1',
      'manufacturer' => 'Captiva',
      'model' => '$1',
    ),
    '@; *(C771|CAL21|IS11CA) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Casio',
      'model' => '$1',
    ),
    '@; *(?:Cat|CAT) ([^;/]+) Build@' => 
    array (
      'device' => 'Cat $1',
      'manufacturer' => 'Cat',
      'model' => '$1',
    ),
    '@; *(?:Cat)(Nova.*) Build@' => 
    array (
      'device' => 'Cat $1',
      'manufacturer' => 'Cat',
      'model' => '$1',
    ),
    '@; *(INM8002KP|ADM8000KP_[AB]) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Cat',
      'model' => 'Tablet PHOENIX 8.1J0',
    ),
    '@; *(?:[Cc]elkon[ _\\*]|CELKON[ _\\*])([^;/\\)]+) ?(?:Build|;|\\))@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Celkon',
      'model' => '$1',
    ),
    '@Build/(?:[Cc]elkon)+_?([^;/_\\)]+)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Celkon',
      'model' => '$1',
    ),
    '@; *(CT)-?(\\d+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Celkon',
      'model' => '$1$2',
    ),
    '@; *(A19|A19Q|A105|A107[^;/\\)]*) ?(?:Build|;|\\))@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Celkon',
      'model' => '$1',
    ),
    '@; *(TPC[0-9]{4,5}) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'ChangJia',
      'model' => '$1',
    ),
    '@; *(Cloudfone)[ _](Excite)([^ ][^;/]+) Build@' => 
    array (
      'device' => '$1 $2 $3',
      'manufacturer' => 'Cloudfone',
      'model' => '$1 $2 $3',
    ),
    '@; *(Excite|ICE)[ _](\\d+[^;/]+) Build@' => 
    array (
      'device' => 'Cloudfone $1 $2',
      'manufacturer' => 'Cloudfone',
      'model' => 'Cloudfone $1 $2',
    ),
    '@; *(Cloudfone|CloudPad)[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Cloudfone',
      'model' => '$1 $2',
    ),
    '@; *((?:Aquila|Clanga|Rapax)[^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'Cmx',
      'model' => '$1',
    ),
    '@; *(?:CFW-|Kyros )?(MID[0-9]{4}(?:[ABC]|SR|TV)?)(\\(3G\\)-4G| GB 8K| 3G| 8K| GB)? *(?:Build|[;\\)])@' => 
    array (
      'device' => 'CobyKyros $1$2',
      'manufacturer' => 'CobyKyros',
      'model' => '$1$2',
    ),
    '@; *([^;/]*)Coolpad[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Coolpad',
      'model' => '$1$2',
    ),
    '@; *(CUBE[ _])?([KU][0-9]+ ?GT.*|A5300) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1$2',
      'manufacturer' => 'Cube',
      'model' => '$2',
    ),
    '@; *CUBOT ([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'Cubot',
      'model' => '$1',
    ),
    '@; *BOBBY Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'Cubot',
      'model' => '$1',
    ),
    '@; *(Dslide [^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Danew',
      'model' => '$1',
    ),
    '@; *(XCD)[ _]?(28|35) Build@' => 
    array (
      'device' => 'Dell $1$2',
      'manufacturer' => 'Dell',
      'model' => '$1$2',
    ),
    '@; *(001DL) Build@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => 'Streak',
    ),
    '@; *(?:Dell|DELL) (Streak) Build@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => 'Streak',
    ),
    '@; *(101DL|GS01|Streak Pro[^;/]*) Build@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => 'Streak Pro',
    ),
    '@; *([Ss]treak ?7) Build@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => 'Streak 7',
    ),
    '@; *(Mini-3iX) Build@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => '$1',
    ),
    '@; *(?:Dell|DELL)[ _](Aero|Venue|Thunder|Mini.*|Streak[ _]Pro) Build@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => '$1',
    ),
    '@; *Dell[ _]([^;/]+) Build@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => '$1',
    ),
    '@; *Dell ([^;/]+) Build@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => '$1',
    ),
    '@; *(TA[CD]-\\d+[^;/]*) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Denver',
      'model' => '$1',
    ),
    '@; *(iP[789]\\d{2}(?:-3G)?|IP10\\d{2}(?:-8GB)?) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Dex',
      'model' => '$1',
    ),
    '@; *(AirTab)[ _\\-]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'DNS',
      'model' => '$1 $2',
    ),
    '@; *(F\\-\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Fujitsu',
      'model' => '$1',
    ),
    '@; *(HT-03A) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => 'Magic',
    ),
    '@; *(HT\\-\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => '$1',
    ),
    '@; *(L\\-\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'LG',
      'model' => '$1',
    ),
    '@; *(N\\-\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Nec',
      'model' => '$1',
    ),
    '@; *(P\\-\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Panasonic',
      'model' => '$1',
    ),
    '@; *(SC\\-\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@; *(SH\\-\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sharp',
      'model' => '$1',
    ),
    '@; *(SO\\-\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'SonyEricsson',
      'model' => '$1',
    ),
    '@; *(T\\-01[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Toshiba',
      'model' => '$1',
    ),
    '@; *(DOOV)[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'DOOV',
      'model' => '$2',
    ),
    '@; *(Enot|ENOT)[ -]?([^;/]+) Build@' => 
    array (
      'device' => '$1 $2$3',
      'manufacturer' => 'Enot',
      'model' => '$2$3',
    ),
    '@; *[^;/]+ Build/(?:CROSS|Cross)+[ _\\-]([^\\)]+)@' => 
    array (
      'device' => 'CROSS $1',
      'manufacturer' => 'Evercoss',
      'model' => 'Cross $1',
    ),
    '@; *(CROSS|Cross)[ _\\-]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Evercoss',
      'model' => 'Cross $2',
    ),
    '@; *Explay[_ ]((?:(?![\\)]| Build).)+)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Explay',
      'model' => '$1',
    ),
    '@; *(IQ.*) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Fly',
      'model' => '$1',
    ),
    '@; *(Fly|FLY)[ _](IQ[^;]+|F[34]\\d+[^;]*);? Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Fly',
      'model' => '$2',
    ),
    '@; *(M532|Q572|FJL21) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Fujitsu',
      'model' => '$1',
    ),
    '@; *(G1) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Galapad',
      'model' => '$1',
    ),
    '@; *(Geeksphone) ([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *(G[^F]?FIVE) ([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Gfive',
      'model' => '$2',
    ),
    '@; *(Gionee)[ _\\-]([^;/]+)(?:/[^;/]+)? Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'Gionee',
      'model' => '$2',
    ),
    '@; *(GN\\d+[A-Z]?|INFINITY_PASSION|Ctrl_V1) Build@' => 
    array (
      'device' => 'Gionee $1',
      'manufacturer' => 'Gionee',
      'model' => '$1',
    ),
    '@; *(E3) Build/JOP40D@' => 
    array (
      'device' => 'Gionee $1',
      'manufacturer' => 'Gionee',
      'model' => '$1',
    ),
    '@; *((?:FONE|QUANTUM|INSIGNIA) \\d+[^;/]*|PLAYTAB) Build@' => 
    array (
      'device' => 'GoClever $1',
      'manufacturer' => 'GoClever',
      'model' => '$1',
    ),
    '@; *GOCLEVER ([^;/]+) Build@' => 
    array (
      'device' => 'GoClever $1',
      'manufacturer' => 'GoClever',
      'model' => '$1',
    ),
    '@; *(Glass \\d+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Google',
      'model' => '$1',
    ),
    '@; *(GSmart)[ -]([^/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Gigabyte',
      'model' => '$1 $2',
    ),
    '@; *(imx5[13]_[^/]+) Build@' => 
    array (
      'device' => 'Freescale $1',
      'manufacturer' => 'Freescale',
      'model' => '$1',
    ),
    '@; *Haier[ _\\-]([^/]+) Build@' => 
    array (
      'device' => 'Haier $1',
      'manufacturer' => 'Haier',
      'model' => '$1',
    ),
    '@; *(PAD1016) Build@' => 
    array (
      'device' => 'Haipad $1',
      'manufacturer' => 'Haipad',
      'model' => '$1',
    ),
    '@; *(M701|M7|M8|M9) Build@' => 
    array (
      'device' => 'Haipad $1',
      'manufacturer' => 'Haipad',
      'model' => '$1',
    ),
    '@; *(SN\\d+T[^;\\)/]*)(?: Build|[;\\)])@' => 
    array (
      'device' => 'Hannspree $1',
      'manufacturer' => 'Hannspree',
      'model' => '$1',
    ),
    '@Build/HCL ME Tablet ([^;\\)]+)[\\);]@' => 
    array (
      'device' => 'HCLme $1',
      'manufacturer' => 'HCLme',
      'model' => '$1',
    ),
    '@; *([^;\\/]+) Build/HCL@' => 
    array (
      'device' => 'HCLme $1',
      'manufacturer' => 'HCLme',
      'model' => '$1',
    ),
    '@; *(MID-?\\d{4}C[EM]) Build@' => 
    array (
      'device' => 'Hena $1',
      'manufacturer' => 'Hena',
      'model' => '$1',
    ),
    '@; *(EG\\d{2,}|HS-[^;/]+|MIRA[^;/]+) Build@' => 
    array (
      'device' => 'Hisense $1',
      'manufacturer' => 'Hisense',
      'model' => '$1',
    ),
    '@; *(andromax[^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Hisense $1',
      'manufacturer' => 'Hisense',
      'model' => '$1',
    ),
    '@; *(?:AMAZE[ _](S\\d+)|(S\\d+)[ _]AMAZE) Build@' => 
    array (
      'device' => 'AMAZE $1$2',
      'manufacturer' => 'hitech',
      'model' => 'AMAZE $1$2',
    ),
    '@; *(PlayBook) Build@' => 
    array (
      'device' => 'HP $1',
      'manufacturer' => 'HP',
      'model' => '$1',
    ),
    '@; *HP ([^/]+) Build@' => 
    array (
      'device' => 'HP $1',
      'manufacturer' => 'HP',
      'model' => '$1',
    ),
    '@; *([^/]+_tenderloin) Build@' => 
    array (
      'device' => 'HP TouchPad',
      'manufacturer' => 'HP',
      'model' => 'TouchPad',
    ),
    '@; *(HUAWEI |Huawei-)?([UY][^;/]+) Build/(?:Huawei|HUAWEI)([UY][^\\);]+)\\)@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Huawei',
      'model' => '$2',
    ),
    '@; *([^;/]+) Build[/ ]Huawei(MT1-U06|[A-Z]+\\d+[^\\);]+)[^\\);]*\\)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Huawei',
      'model' => '$2',
    ),
    '@; *(S7|M860) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Huawei',
      'model' => '$1',
    ),
    '@; *((?:HUAWEI|Huawei)[ \\-]?)(MediaPad) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Huawei',
      'model' => '$2',
    ),
    '@; *((?:HUAWEI[ _]?|Huawei[ _])?Ascend[ _])([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Huawei',
      'model' => '$2',
    ),
    '@; *((?:HUAWEI|Huawei)[ _\\-]?)((?:G700-|MT-)[^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Huawei',
      'model' => '$2',
    ),
    '@; *((?:HUAWEI|Huawei)[ _\\-]?)([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Huawei',
      'model' => '$2',
    ),
    '@; *(MediaPad[^;]+|SpringBoard) Build/Huawei@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Huawei',
      'model' => '$1',
    ),
    '@; *([^;]+) Build/Huawei@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Huawei',
      'model' => '$1',
    ),
    '@; *([Uu])([89]\\d{3}) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Huawei',
      'model' => 'U$2',
    ),
    '@; *(?:Ideos |IDEOS )(S7) Build@' => 
    array (
      'device' => 'Huawei Ideos$1',
      'manufacturer' => 'Huawei',
      'model' => 'Ideos$1',
    ),
    '@; *(?:Ideos |IDEOS )([^;/]+\\s*|\\s*)Build@' => 
    array (
      'device' => 'Huawei Ideos$1',
      'manufacturer' => 'Huawei',
      'model' => 'Ideos$1',
    ),
    '@; *(Orange Daytona|Pulse|Pulse Mini|Vodafone 858|C8500|C8600|C8650|C8660) Build@' => 
    array (
      'device' => 'Huawei $1',
      'manufacturer' => 'Huawei',
      'model' => '$1',
    ),
    '@; *(?:HTC)(?:[ _/]((?:(?![ _/;\\(\\)]|Build|MIUI).)+))(?:[ _/]((?:(?![ _/;\\(\\)]|HTC|Build|MIUI).)+))?(?:[ _/]((?:(?![ _/;\\(\\)]|Build|MIUI).)+))?(?:[ _/]((?:(?![/;\\)]|Build|MIUI).)+))?(?:[/\\\\]1\\.0 | V|/| +)\\d+\\.\\d[\\d\\.]+@' => 
    array (
      'device' => 'HTC $1 $2 $3 $4',
      'manufacturer' => 'HTC',
      'model' => '$1 $2 $3 $4',
    ),
    '@; *(?:HTC[ ;])?(?:HTC(?:_blocked)*)(?:(?:[ _/]|; *)((?:(?![ _/;\\(\\)\\\\]|USCCHTC|HTC|Build|MIUI).)+))(?:[ _/]((?:(?![ _/;\\(\\)\\\\]|Build|MIUI|1\\.0).)+))?(?:[ _/]((?:(?![ _/;\\(\\)\\\\]|Build|MIUI|1\\.0).)+))?(?:[ _/]((?:(?![/;\\)]|Build|MIUI|1\\.0).)+))?@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'HTC $1 $2 $3 $4',
      'manufacturer' => 'HTC',
      'model' => '$1 $2 $3 $4',
    ),
    '@HTC Streaming Player [^\\/]*/[^\\/]*/ htc_([^/]+) /@' => 
    array (
      'device' => 'HTC $1',
      'manufacturer' => 'HTC',
      'model' => '$1',
    ),
    '@(?:[;,] *|^)(?:htccn_chs-)?HTC[ _\\-]?((?:(?! Build|clay|Android|-?Mozilla| Opera| Profile| UNTRUSTED|[;/\\(\\)]).)+)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'HTC $1',
      'manufacturer' => 'HTC',
      'model' => '$1',
    ),
    '@; *(A6277|ADR6200|ADR6300|ADR6350|ADR6400[A-Z]*|ADR6425[A-Z]*|APX515CKT|ARIA|Desire[^_ ]*|Dream|EndeavorU|Eris|Evo|Flyer|HD2|Hero|HERO200|Hero CDMA|HTL21|Incredible|Inspire[A-Z0-9]*|Legend|Liberty|Nexus ?(?:One|HD2)|One|One S C2|One[ _]?(?:S|V|X\\+?)\\w*|PC36100|PG06100|PG86100|S31HT|Sensation|Wildfire)(?: Build|[/;\\(\\)])@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'HTC $1',
      'manufacturer' => 'HTC',
      'model' => '$1',
    ),
    '@; *(ADR6200|ADR6400L|ADR6425LVW|Amaze|DesireS?|EndeavorU|Eris|EVO|Evo\\d[A-Z]+|HD2|IncredibleS?|Inspire[A-Z0-9]*|Inspire[A-Z0-9]*|Sensation[A-Z0-9]*|Wildfire)(?:(?:[ _/\\-])((?:(?![ _/;\\(\\)]|Build|MIUI).)+))(?:[ _/]((?:(?![ _/;\\(\\)]|Build|MIUI|1\\.0).)+))?(?:[ _/]((?:(?![ _/;\\(\\)]|Build|MIUI|1\\.0).)+))?(?:[ _/]((?:(?![/;\\)]|Build|MIUI|1\\.0).)+))?@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'HTC $1 $2 $3 $4',
      'manufacturer' => 'HTC',
      'model' => '$1 $2 $3 $4',
    ),
    '@; *HYUNDAI (T\\d[^/]*) Build@' => 
    array (
      'device' => 'Hyundai $1',
      'manufacturer' => 'Hyundai',
      'model' => '$1',
    ),
    '@; *HYUNDAI ([^;/]+) Build@' => 
    array (
      'device' => 'Hyundai $1',
      'manufacturer' => 'Hyundai',
      'model' => '$1',
    ),
    '@; *(X700|Hold X|MB-6900) Build@' => 
    array (
      'device' => 'Hyundai $1',
      'manufacturer' => 'Hyundai',
      'model' => '$1',
    ),
    '@; *(?:iBall[ _\\-])?(Andi)[ _]?(\\d[^;/]*) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'iBall',
      'model' => '$1 $2',
    ),
    '@; *(IBall)(?:[ _]([^;/]+)|) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'iBall',
      'model' => '$2',
    ),
    '@; *(NT-\\d+[^ ;/]*|Net[Tt]AB [^;/]+|Mercury [A-Z]+|iconBIT)(?: S/N:[^;/]+)? Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'IconBIT',
      'model' => '$1',
    ),
    '@; *(IMO)[ _]([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'IMO',
      'model' => '$2',
    ),
    '@; *i-?mobile[ _]([^/]+) Build/@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'i-mobile $1',
      'manufacturer' => 'imobile',
      'model' => '$1',
    ),
    '@; *(i-(?:style|note)[^/]*) Build/@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'i-mobile $1',
      'manufacturer' => 'imobile',
      'model' => '$1',
    ),
    '@; *(ImPAD) ?(\\d+(?:.)*) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Impression',
      'model' => '$1 $2',
    ),
    '@; *(Infinix)[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Infinix',
      'model' => '$2',
    ),
    '@; *(Informer)[ \\-]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Informer',
      'model' => '$2',
    ),
    '@; *(TAB) ?([78][12]4) Build@' => 
    array (
      'device' => 'Intenso $1',
      'manufacturer' => 'Intenso',
      'model' => '$1 $2',
    ),
    '@; *(?:Intex[ _])?(AQUA|Aqua)([ _\\.\\-])([^;/]+) *(?:Build|;)@' => 
    array (
      'device' => '$1$2$3',
      'manufacturer' => 'Intex',
      'model' => '$1 $3',
    ),
    '@; *(?:INTEX|Intex)(?:[_ ]([^\\ _;/]+))(?:[_ ]([^\\ _;/]+))? *(?:Build|;)@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Intex',
      'model' => '$1 $2',
    ),
    '@; *([iI]Buddy)[ _]?(Connect)(?:_|\\?_| )?([^;/]*) *(?:Build|;)@' => 
    array (
      'device' => '$1 $2 $3',
      'manufacturer' => 'Intex',
      'model' => 'iBuddy $2 $3',
    ),
    '@; *(I-Buddy)[ _]([^;/]+) *(?:Build|;)@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Intex',
      'model' => 'iBuddy $2',
    ),
    '@; *(iOCEAN) ([^/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'iOCEAN',
      'model' => '$2',
    ),
    '@; *(TP\\d+(?:\\.\\d+)?\\-\\d[^;/]+) Build@' => 
    array (
      'device' => 'ionik $1',
      'manufacturer' => 'ionik',
      'model' => '$1',
    ),
    '@; *(M702pro) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Iru',
      'model' => '$1',
    ),
    '@; *(DE88Plus|MD70) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Ivio',
      'model' => '$1',
    ),
    '@; *IVIO[_\\-]([^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Ivio',
      'model' => '$1',
    ),
    '@; *(TPC-\\d+|JAY-TECH) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Jaytech',
      'model' => '$1',
    ),
    '@; *(JY-[^;/]+|G[234]S?) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Jiayu',
      'model' => '$1',
    ),
    '@; *(JXD)[ _\\-]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'JXD',
      'model' => '$2',
    ),
    '@; *Karbonn[ _]?([^;/]+) *(?:Build|;)@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'Karbonn',
      'model' => '$1',
    ),
    '@; *([^;]+) Build/Karbonn@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Karbonn',
      'model' => '$1',
    ),
    '@; *(A11|A39|A37|A34|ST8|ST10|ST7|Smart Tab3|Smart Tab2|Titanium S\\d) +Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Karbonn',
      'model' => '$1',
    ),
    '@; *(IS01|IS03|IS05|IS\\d{2}SH) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sharp',
      'model' => '$1',
    ),
    '@; *(IS04) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Regza',
      'model' => '$1',
    ),
    '@; *(IS06|IS\\d{2}PT) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Pantech',
      'model' => '$1',
    ),
    '@; *(IS11S) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'SonyEricsson',
      'model' => 'Xperia Acro',
    ),
    '@; *(IS11CA) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Casio',
      'model' => 'GzOne $1',
    ),
    '@; *(IS11LG) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'LG',
      'model' => 'Optimus X',
    ),
    '@; *(IS11N) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Medias',
      'model' => '$1',
    ),
    '@; *(IS11PT) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Pantech',
      'model' => 'MIRACH',
    ),
    '@; *(IS12F) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Fujitsu',
      'model' => 'Arrows ES',
    ),
    '@; *(IS12M) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Motorola',
      'model' => 'XT909',
    ),
    '@; *(IS12S) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'SonyEricsson',
      'model' => 'Xperia Acro HD',
    ),
    '@; *(ISW11F) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Fujitsu',
      'model' => 'Arrowz Z',
    ),
    '@; *(ISW11HT) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => 'EVO',
    ),
    '@; *(ISW11K) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Kyocera',
      'model' => 'DIGNO',
    ),
    '@; *(ISW11M) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Motorola',
      'model' => 'Photon',
    ),
    '@; *(ISW11SC) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Samsung',
      'model' => 'GALAXY S II WiMAX',
    ),
    '@; *(ISW12HT) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => 'EVO 3D',
    ),
    '@; *(ISW13HT) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => 'J',
    ),
    '@; *(ISW?[0-9]{2}[A-Z]{0,2}) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'KDDI',
      'model' => '$1',
    ),
    '@; *(INFOBAR [^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'KDDI',
      'model' => '$1',
    ),
    '@; *(JOYPAD|Joypad)[ _]([^;/]+) Build/@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Kingcom',
      'model' => '$1 $2',
    ),
    '@; *(Vox|VOX|Arc|K080) Build/@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'Kobo',
      'model' => '$1',
    ),
    '@\\b(Kobo Touch)\\b@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Kobo',
      'model' => '$1',
    ),
    '@; *(K-Touch)[ _]([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'Ktouch',
      'model' => '$2',
    ),
    '@; *((?:EV|KM)-S\\d+[A-Z]?) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'KTtech',
      'model' => '$1',
    ),
    '@; *(Zio|Hydro|Torque|Event|EVENT|Echo|Milano|Rise|URBANO PROGRESSO|WX04K|WX06K|WX10K|KYL21|101K|C5[12]\\d{2}) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Kyocera',
      'model' => '$1',
    ),
    '@; *(?:LAVA[ _])?IRIS[ _\\-]?([^/;\\)]+) *(?:;|\\)|Build)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Iris $1',
      'manufacturer' => 'Lava',
      'model' => 'Iris $1',
    ),
    '@; *LAVA[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Lava',
      'model' => '$1',
    ),
    '@; *(?:(Aspire A1)|(?:LEMON|Lemon)[ _]([^;/]+))_? Build@' => 
    array (
      'device' => 'Lemon $1$2',
      'manufacturer' => 'Lemon',
      'model' => '$1$2',
    ),
    '@; *(TAB-1012) Build/@' => 
    array (
      'device' => 'Lenco $1',
      'manufacturer' => 'Lenco',
      'model' => '$1',
    ),
    '@; Lenco ([^;/]+) Build/@' => 
    array (
      'device' => 'Lenco $1',
      'manufacturer' => 'Lenco',
      'model' => '$1',
    ),
    '@; *(A1_07|A2107A-H|S2005A-H|S1-37AH0) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Lenovo',
      'model' => '$1',
    ),
    '@; *(Idea[Tp]ab)[ _]([^;/]+);? Build@' => 
    array (
      'device' => 'Lenovo $1 $2',
      'manufacturer' => 'Lenovo',
      'model' => '$1 $2',
    ),
    '@; *(Idea(?:Tab|pad)) ?([^;/]+) Build@' => 
    array (
      'device' => 'Lenovo $1 $2',
      'manufacturer' => 'Lenovo',
      'model' => '$1 $2',
    ),
    '@; *(ThinkPad) ?(Tablet) Build/@' => 
    array (
      'device' => 'Lenovo $1 $2',
      'manufacturer' => 'Lenovo',
      'model' => '$1 $2',
    ),
    '@; *(?:LNV-)?(?:=?[Ll]enovo[ _\\-]?|LENOVO[ _])+((?:(?!Build|[;/\\)]).)+)[;/]? *(?:Build|[;/\\)])@' => 
    array (
      'device' => 'Lenovo $1',
      'manufacturer' => 'Lenovo',
      'model' => '$1',
    ),
    '@[;,] (?:Vodafone )?(SmartTab) ?(II) ?(\\d+) Build/@' => 
    array (
      'device' => 'Lenovo $1 $2 $3',
      'manufacturer' => 'Lenovo',
      'model' => '$1 $2 $3',
    ),
    '@; *(?:Ideapad )?K1 Build/@' => 
    array (
      'device' => 'Lenovo Ideapad K1',
      'manufacturer' => 'Lenovo',
      'model' => 'Ideapad K1',
    ),
    '@; *(3GC101|3GW10[01]|A390) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Lenovo',
      'model' => '$1',
    ),
    '@\\b(?:Lenovo|LENOVO)+[ _\\-]?([^,;:/ ]+)@' => 
    array (
      'device' => 'Lenovo $1',
      'manufacturer' => 'Lenovo',
      'model' => '$1',
    ),
    '@; *(MFC\\d+)[A-Z]{2}([^;,/]*),? Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Lexibook',
      'model' => '$1$2',
    ),
    '@; *(E[34][0-9]{2}|LS[6-8][0-9]{2}|VS[6-9][0-9]+[^;/]+|Nexus [45]|GT540f?|Optimus (?:2X|G|4X HD)|OptimusX4HD) *(?:Build|;)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'LG',
      'model' => '$1',
    ),
    '@[;:] *(L-\\d+[A-Z]|LGL\\d+[A-Z]?)(?:/V\\d+)? *(?:Build|[;\\)])@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'LG',
      'model' => '$1',
    ),
    '@; *(LG-)([A-Z]{1,2}\\d{2,}(?:(?!Build| V\\d+|[,;/\\)\\(]).)+)@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'LG',
      'model' => '$2',
    ),
    '@; *(LG[ \\-]|LG)([^;/]+)[;/]? Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'LG',
      'model' => '$2',
    ),
    '@^(LG)-([^;/]+)/ Mozilla/.*; Android@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'LG',
      'model' => '$2',
    ),
    '@; *((?:SMB|smb)[^;/]+) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Malata',
      'model' => '$1',
    ),
    '@; *(?:Malata|MALATA) ([^;/]+) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Malata',
      'model' => '$1',
    ),
    '@; *(MS[45][0-9]{3}|MID0[568][NS]?|MID[1-9]|MID[78]0[1-9]|MID970[1-9]|MID100[1-9]) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Manta',
      'model' => '$1',
    ),
    '@; *(M1052|M806|M9000|M9100|M9701|MID100|MID120|MID125|MID130|MID135|MID140|MID701|MID710|MID713|MID727|MID728|MID731|MID732|MID733|MID735|MID736|MID737|MID760|MID800|MID810|MID820|MID830|MID833|MID835|MID860|MID900|MID930|MID933|MID960|MID980) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Match',
      'model' => '$1',
    ),
    '@; *(GenxDroid7|MSD7.*|AX\\d.*|Tab 701|Tab 722) Build/@' => 
    array (
      'device' => 'Maxx $1',
      'manufacturer' => 'Maxx',
      'model' => '$1',
    ),
    '@; *(M-PP[^;/]+|PhonePad ?\\d{2,}[^;/]+) Build@' => 
    array (
      'device' => 'Mediacom $1',
      'manufacturer' => 'Mediacom',
      'model' => '$1',
    ),
    '@; *(M-MP[^;/]+|SmartPad ?\\d{2,}[^;/]+) Build@' => 
    array (
      'device' => 'Mediacom $1',
      'manufacturer' => 'Mediacom',
      'model' => '$1',
    ),
    '@; *(?:MD_)?LIFETAB[ _]([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Medion Lifetab $1',
      'manufacturer' => 'Medion',
      'model' => 'Lifetab $1',
    ),
    '@; *MEDION ([^;/]+) Build@' => 
    array (
      'device' => 'Medion $1',
      'manufacturer' => 'Medion',
      'model' => '$1',
    ),
    '@; *(M030|M031|M035|M040|M065|m9) Build@' => 
    array (
      'device' => 'Meizu $1',
      'manufacturer' => 'Meizu',
      'model' => '$1',
    ),
    '@; *(?:meizu_|MEIZU )((?:(?!Build|[;\\)/]).)+) *(?:Build|[;\\)])@' => 
    array (
      'device' => 'Meizu $1',
      'manufacturer' => 'Meizu',
      'model' => '$1',
    ),
    '@; *(?:Micromax[ _](A111|A240)|(A111|A240)) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Micromax $1$2',
      'manufacturer' => 'Micromax',
      'model' => '$1$2',
    ),
    '@; *Micromax[ _](A\\d{2,3}[^;/]*) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Micromax $1',
      'manufacturer' => 'Micromax',
      'model' => '$1',
    ),
    '@; *(A\\d{2}|A[12]\\d{2}|A90S|A110Q) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Micromax $1',
      'manufacturer' => 'Micromax',
      'model' => '$1',
    ),
    '@; *Micromax[ _](P\\d{3}[^;/]*) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Micromax $1',
      'manufacturer' => 'Micromax',
      'model' => '$1',
    ),
    '@; *(P\\d{3}|P\\d{3}\\(Funbook\\)) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Micromax $1',
      'manufacturer' => 'Micromax',
      'model' => '$1',
    ),
    '@; *(MITO)[ _\\-]?([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'Mito',
      'model' => '$2',
    ),
    '@; *(Cynus)[ _](F5|T\\d|(?:(?!Build|[;/\\)]).)+) *(?:Build|[;/\\)])@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'Mobistel',
      'model' => '$1 $2',
    ),
    '@; *(MODECOM )?(FreeTab) ?([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1$2 $3',
      'manufacturer' => 'Modecom',
      'model' => '$2 $3',
    ),
    '@; *(MODECOM )([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'Modecom',
      'model' => '$2',
    ),
    '@; *(MZ\\d{3}\\+?|MZ\\d{3} 4G|Xoom|XOOM[^;/]*) Build@' => 
    array (
      'device' => 'Motorola $1',
      'manufacturer' => 'Motorola',
      'model' => '$1',
    ),
    '@; *(Milestone )(XT[^;/]*) Build@' => 
    array (
      'device' => 'Motorola $1$2',
      'manufacturer' => 'Motorola',
      'model' => '$2',
    ),
    '@; *(Motoroi ?x|Droid X|DROIDX) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Motorola $1',
      'manufacturer' => 'Motorola',
      'model' => 'DROID X',
    ),
    '@; *(Droid[^;/]*|DROID[^;/]*|Milestone[^;/]*|Photon|Triumph|Devour|Titanium) Build@' => 
    array (
      'device' => 'Motorola $1',
      'manufacturer' => 'Motorola',
      'model' => '$1',
    ),
    '@; *(A555|A85[34][^;/]*|A95[356]|ME[58]\\d{2}\\+?|ME600|ME632|ME722|MB\\d{3}\\+?|MT680|MT710|MT870|MT887|MT917|WX435|WX453|WX44[25]|XT\\d{3,4}[A-Z\\+]*|CL[iI]Q|CL[iI]Q XT) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Motorola',
      'model' => '$1',
    ),
    '@; *(Motorola MOT-|Motorola[ _\\-]|MOT\\-?)([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Motorola',
      'model' => '$2',
    ),
    '@; *(Moto[_ ]?|MOT\\-)([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Motorola',
      'model' => '$2',
    ),
    '@; *((?:MP[DQ]C|MPG\\d{1,4}|MP\\d{3,4}|MID(?:(?:10[234]|114|43|7[247]|8[24]|7)C|8[01]1))[^;/]*) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Mpman',
      'model' => '$1',
    ),
    '@; *(?:MSI[ _])?(Primo\\d+|Enjoy[ _\\-][^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'Msi',
      'model' => '$1',
    ),
    '@; *Multilaser[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Multilaser',
      'model' => '$1',
    ),
    '@; *(My)[_]?(Pad)[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1$2 $3',
      'manufacturer' => 'MyPhone',
      'model' => '$1$2 $3',
    ),
    '@; *(My)\\|?(Phone)[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1$2 $3',
      'manufacturer' => 'MyPhone',
      'model' => '$3',
    ),
    '@; *(A\\d+)[ _](Duo)? Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'MyPhone',
      'model' => '$1 $2',
    ),
    '@; *(myTab[^;/]*) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Mytab',
      'model' => '$1',
    ),
    '@; *(NABI2?-)([^;/]+) Build/@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Nabi',
      'model' => '$2',
    ),
    '@; *(N-\\d+[CDE]) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Nec',
      'model' => '$1',
    ),
    '@; ?(NEC-)(.*) Build/@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Nec',
      'model' => '$2',
    ),
    '@; *(LT-NA7) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Nec',
      'model' => 'Lifetouch Note',
    ),
    '@; *(NXM\\d+[A-z0-9_]*|Next\\d[A-z0-9_ \\-]*|NEXT\\d[A-z0-9_ \\-]*|Nextbook [A-z0-9_ ]*|DATAM803HC|M805)(?: Build|[\\);])@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Nextbook',
      'model' => '$1',
    ),
    '@; *(Nokia)([ _\\-]*)([^;/]*) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1$2$3',
      'manufacturer' => 'Nokia',
      'model' => '$3',
    ),
    '@; *(Nook ?|Barnes & Noble Nook |BN )([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Nook',
      'model' => '$2',
    ),
    '@; *(NOOK )?(BNRV200|BNRV200A|BNTV250|BNTV250A|BNTV400|BNTV600|LogicPD Zoom2) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Nook',
      'model' => '$2',
    ),
    '@; Build/(Nook)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Nook',
      'model' => 'Tablet',
    ),
    '@; *(OP110|OliPad[^;/]+) Build@' => 
    array (
      'device' => 'Olivetti $1',
      'manufacturer' => 'Olivetti',
      'model' => '$1',
    ),
    '@; *OMEGA[ _\\-](MID[^;/]+) Build@' => 
    array (
      'device' => 'Omega $1',
      'manufacturer' => 'Omega',
      'model' => '$1',
    ),
    '@^(MID7500|MID\\d+) Mozilla/5\\.0 \\(iPad;@' => 
    array (
      'device' => 'Omega $1',
      'manufacturer' => 'Omega',
      'model' => '$1',
    ),
    '@; *((?:CIUS|cius)[^;/]*) Build@' => 
    array (
      'device' => 'Openpeak $1',
      'manufacturer' => 'Openpeak',
      'model' => '$1',
    ),
    '@; *(Find ?(?:5|7a)|R8[012]\\d{1,2}|T703\\d{0,1}|U70\\d{1,2}T?|X90\\d{1,2}) Build@' => 
    array (
      'device' => 'Oppo $1',
      'manufacturer' => 'Oppo',
      'model' => '$1',
    ),
    '@; *OPPO ?([^;/]+) Build/@' => 
    array (
      'device' => 'Oppo $1',
      'manufacturer' => 'Oppo',
      'model' => '$1',
    ),
    '@; *(?:Odys\\-|ODYS\\-|ODYS )([^;/]+) Build@' => 
    array (
      'device' => 'Odys $1',
      'manufacturer' => 'Odys',
      'model' => '$1',
    ),
    '@; *(SELECT) ?(7) Build@' => 
    array (
      'device' => 'Odys $1 $2',
      'manufacturer' => 'Odys',
      'model' => '$1 $2',
    ),
    '@; *(PEDI)_(PLUS)_(W) Build@' => 
    array (
      'device' => 'Odys $1 $2 $3',
      'manufacturer' => 'Odys',
      'model' => '$1 $2 $3',
    ),
    '@; *(AEON|BRAVIO|FUSION|FUSION2IN1|Genio|EOS10|IEOS[^;/]*|IRON|Loox|LOOX|LOOX Plus|Motion|NOON|NOON_PRO|NEXT|OPOS|PEDI[^;/]*|PRIME[^;/]*|STUDYTAB|TABLO|Tablet-PC-4|UNO_X8|XELIO[^;/]*|Xelio ?\\d+ ?[Pp]ro|XENO10|XPRESS PRO) Build@' => 
    array (
      'device' => 'Odys $1',
      'manufacturer' => 'Odys',
      'model' => '$1',
    ),
    '@; *(TP-\\d+) Build/@' => 
    array (
      'device' => 'Orion $1',
      'manufacturer' => 'Orion',
      'model' => '$1',
    ),
    '@; *(G100W?) Build/@' => 
    array (
      'device' => 'PackardBell $1',
      'manufacturer' => 'PackardBell',
      'model' => '$1',
    ),
    '@; *(Panasonic)[_ ]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *(FZ-A1B|JT-B1) Build@' => 
    array (
      'device' => 'Panasonic $1',
      'manufacturer' => 'Panasonic',
      'model' => '$1',
    ),
    '@; *(dL1|DL1) Build@' => 
    array (
      'device' => 'Panasonic $1',
      'manufacturer' => 'Panasonic',
      'model' => '$1',
    ),
    '@; *(SKY[ _])?(IM\\-[AT]\\d{3}[^;/]+).* Build/@' => 
    array (
      'device' => 'Pantech $1$2',
      'manufacturer' => 'Pantech',
      'model' => '$1$2',
    ),
    '@; *((?:ADR8995|ADR910L|ADR930L|ADR930VW|PTL21|P8000)(?: 4G)?) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Pantech',
      'model' => '$1',
    ),
    '@; *Pantech([^;/]+).* Build/@' => 
    array (
      'device' => 'Pantech $1',
      'manufacturer' => 'Pantech',
      'model' => '$1',
    ),
    '@; *(papyre)[ _\\-]([^;/]+) Build/@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'Papyre',
      'model' => '$2',
    ),
    '@; *(?:Touchlet )?(X10\\.[^;/]+) Build/@' => 
    array (
      'device' => 'Pearl $1',
      'manufacturer' => 'Pearl',
      'model' => '$1',
    ),
    '@; PHICOMM (i800) Build/@' => 
    array (
      'device' => 'Phicomm $1',
      'manufacturer' => 'Phicomm',
      'model' => '$1',
    ),
    '@; PHICOMM ([^;/]+) Build/@' => 
    array (
      'device' => 'Phicomm $1',
      'manufacturer' => 'Phicomm',
      'model' => '$1',
    ),
    '@; *(FWS\\d{3}[^;/]+) Build/@' => 
    array (
      'device' => 'Phicomm $1',
      'manufacturer' => 'Phicomm',
      'model' => '$1',
    ),
    '@; *(D633|D822|D833|T539|T939|V726|W335|W336|W337|W3568|W536|W5510|W626|W632|W6350|W6360|W6500|W732|W736|W737|W7376|W820|W832|W8355|W8500|W8510|W930) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Philips',
      'model' => '$1',
    ),
    '@; *(?:Philips|PHILIPS)[ _]([^;/]+) Build@' => 
    array (
      'device' => 'Philips $1',
      'manufacturer' => 'Philips',
      'model' => '$1',
    ),
    '@Android 4\\..*; *(M[12356789]|U[12368]|S[123])\\ ?(pro)? Build@' => 
    array (
      'device' => 'Pipo $1$2',
      'manufacturer' => 'Pipo',
      'model' => '$1$2',
    ),
    '@; *(MOMO[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Ployer',
      'model' => '$1',
    ),
    '@; *(?:Polaroid[ _])?((?:MIDC\\d{3,}|PMID\\d{2,}|PTAB\\d{3,})[^;/]*)(\\/[^;/]*)? Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Polaroid',
      'model' => '$1',
    ),
    '@; *(?:Polaroid )(Tablet) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Polaroid',
      'model' => '$1',
    ),
    '@; *(POMP)[ _\\-]((?:(?!Build|[;/\\)]).)+) *(?:Build|[;/\\)])@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Pomp',
      'model' => '$2',
    ),
    '@; *(TB07STA|TB10STA|TB07FTA|TB10FTA) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Positivo',
      'model' => '$1',
    ),
    '@; *(?:Positivo )?((?:YPY|Ypy)[^;/]+) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Positivo',
      'model' => '$1',
    ),
    '@; *(MOB-[^;/]+) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'POV',
      'model' => '$1',
    ),
    '@; *POV[ _\\-]([^;/]+) Build/@' => 
    array (
      'device' => 'POV $1',
      'manufacturer' => 'POV',
      'model' => '$1',
    ),
    '@; *((?:TAB-PLAYTAB|TAB-PROTAB|PROTAB|PlayTabPro|Mobii[ _\\-]|TAB-P)[^;/]*) Build/@' => 
    array (
      'device' => 'POV $1',
      'manufacturer' => 'POV',
      'model' => '$1',
    ),
    '@; *(?:Prestigio )?((?:PAP|PMP)\\d[^;/]+) Build/@' => 
    array (
      'device' => 'Prestigio $1 $2',
      'manufacturer' => 'Prestigio',
      'model' => '$1 $2',
    ),
    '@; *(PLT[0-9]{4}.*) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Proscan',
      'model' => '$1',
    ),
    '@; *(A2|A5|A8|A900)_?(Classic)? Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Qmobile',
      'model' => '$1 $2',
    ),
    '@; *(Q[Mm]obile)_([^_]+)_([^_]+) Build@' => 
    array (
      'device' => 'Qmobile $2 $3',
      'manufacturer' => 'Qmobile',
      'model' => '$2 $3',
    ),
    '@; *(Q\\-?[Mm]obile)[_ ](A[^;/]+) Build@' => 
    array (
      'device' => 'Qmobile $2',
      'manufacturer' => 'Qmobile',
      'model' => '$2',
    ),
    '@; *(Q\\-Smart)[ _]([^;/]+) Build/@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Qmobilevn',
      'model' => '$2',
    ),
    '@; *(Q\\-?[Mm]obile)[ _\\-](S[^;/]+) Build/@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Qmobilevn',
      'model' => '$2',
    ),
    '@; *(TA1013) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Quanta',
      'model' => '$1',
    ),
    '@; *(RK\\d+),? Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Rockchip',
      'model' => '$1',
    ),
    '@ Build/(RK\\d+)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Rockchip',
      'model' => '$1',
    ),
    '@; *(SAMSUNG |Samsung )?((?:Galaxy (?:Note II|S\\d)|GT-I9082|GT-I9205|GT-N7\\d{3}|SM-N9005)[^;/]*)\\/?[^;/]* Build/@' => 
    array (
      'device' => 'Samsung $1$2',
      'manufacturer' => 'Samsung',
      'model' => '$2',
    ),
    '@; *(Google )?(Nexus [Ss](?: 4G)?) Build/@' => 
    array (
      'device' => 'Samsung $1$2',
      'manufacturer' => 'Samsung',
      'model' => '$2',
    ),
    '@; *(SAMSUNG |Samsung )([^\\/]*)\\/[^ ]* Build/@' => 
    array (
      'device' => 'Samsung $2',
      'manufacturer' => 'Samsung',
      'model' => '$2',
    ),
    '@; *(Galaxy(?: Ace| Nexus| S ?II+|Nexus S| with MCR 1.2| Mini Plus 4G)?) Build/@' => 
    array (
      'device' => 'Samsung $1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@; *(SAMSUNG[ _\\-] *)+([^;/]+) Build@' => 
    array (
      'device' => 'Samsung $2',
      'manufacturer' => 'Samsung',
      'model' => '$2',
    ),
    '@; *(SAMSUNG-)?(GT\\-[BINPS]\\d{4}[^\\/]*)(\\/[^ ]*) Build@' => 
    array (
      'device' => 'Samsung $1$2$3',
      'manufacturer' => 'Samsung',
      'model' => '$2',
    ),
    '@(?:; *|^)((?:GT\\-[BIiNPS]\\d{4}|I9\\d{2}0[A-Za-z\\+]?\\b)(?:(?! +Build| Linux| MIUI|[;/\\)]).)*);?(?: +Build| Linux| MIUI|[;/\\)])@' => 
    array (
      'device' => 'Samsung $1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@; (SAMSUNG-)([A-Za-z0-9\\-]+).* Build/@' => 
    array (
      'device' => 'Samsung $1$2',
      'manufacturer' => 'Samsung',
      'model' => '$2',
    ),
    '@; *((?:SCH|SGH|SHV|SHW|SPH|SC|SM)\\-[A-Za-z0-9 ]+)(/?[^ ]*)? Build@' => 
    array (
      'device' => 'Samsung $1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@ ((?:SCH)\\-[A-Za-z0-9 ]+)(/?[^ ]*)? Build@' => 
    array (
      'device' => 'Samsung $1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@; *(Behold ?(?:2|II)|YP\\-G[^;/]+|EK-GC100|SCL21|I9300) Build@' => 
    array (
      'device' => 'Samsung $1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@; *(SH\\-?\\d\\d[^;/]+|SBM\\d[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sharp',
      'model' => '$1',
    ),
    '@; *(SHARP[ -])([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Sharp',
      'model' => '$2',
    ),
    '@; *(SPX[_\\-]\\d[^;/]*) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Simvalley',
      'model' => '$1',
    ),
    '@; *(SX7\\-PEARL\\.GmbH) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Simvalley',
      'model' => '$1',
    ),
    '@; *(SP[T]?\\-\\d{2}[^;/]*) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Simvalley',
      'model' => '$1',
    ),
    '@; *(SK\\-.*) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'SKtelesys',
      'model' => '$1',
    ),
    '@; *(?:SKYTEX|SX)-([^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Skytex',
      'model' => '$1',
    ),
    '@; *(IMAGINE [^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Skytex',
      'model' => '$1',
    ),
    '@; *(SmartQ) ?([^;/]+) Build/@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *(WF7C|WF10C|SBT[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Smartbitt',
      'model' => '$1',
    ),
    '@; *(SBM(?:003SH|005SH|006SH|007SH|102SH)) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sharp',
      'model' => '$1',
    ),
    '@; *(003P|101P|101P11C|102P) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Panasonic',
      'model' => '$1',
    ),
    '@; *(00\\dZ) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'ZTE',
      'model' => '$1',
    ),
    '@; HTC(X06HT) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => '$1',
    ),
    '@; *(001HT|X06HT) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => '$1',
    ),
    '@; *(201M) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Motorola',
      'model' => 'XT902',
    ),
    '@; *(ST\\d{4}.*)Build/ST@' => 
    array (
      'device' => 'Trekstor $1',
      'manufacturer' => 'Trekstor',
      'model' => '$1',
    ),
    '@; *(ST\\d{4}.*) Build/@' => 
    array (
      'device' => 'Trekstor $1',
      'manufacturer' => 'Trekstor',
      'model' => '$1',
    ),
    '@; *(Sony ?Ericsson ?)([^;/]+) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'SonyEricsson',
      'model' => '$2',
    ),
    '@; *((?:SK|ST|E|X|LT|MK|MT|WT)\\d{2}[a-z0-9]*(?:-o)?|R800i|U20i) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'SonyEricsson',
      'model' => '$1',
    ),
    '@; *(Xperia (?:A8|Arc|Acro|Active|Live with Walkman|Mini|Neo|Play|Pro|Ray|X\\d+)[^;/]*) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'SonyEricsson',
      'model' => '$1',
    ),
    '@; Sony (Tablet[^;/]+) Build@' => 
    array (
      'device' => 'Sony $1',
      'manufacturer' => 'Sony',
      'model' => '$1',
    ),
    '@; Sony ([^;/]+) Build@' => 
    array (
      'device' => 'Sony $1',
      'manufacturer' => 'Sony',
      'model' => '$1',
    ),
    '@; *(Sony)([A-Za-z0-9\\-]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *(Xperia [^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sony',
      'model' => '$1',
    ),
    '@; *(C(?:1[0-9]|2[0-9]|53|55|6[0-9])[0-9]{2}|D[25]\\d{3}|D6[56]\\d{2}) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sony',
      'model' => '$1',
    ),
    '@; *(SGP\\d{3}|SGPT\\d{2}) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sony',
      'model' => '$1',
    ),
    '@; *(NW-Z1000Series) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sony',
      'model' => '$1',
    ),
    '@PLAYSTATION 3@' => 
    array (
      'device' => 'PlayStation 3',
      'manufacturer' => 'Sony',
      'model' => 'PlayStation 3',
    ),
    '@(PlayStation (?:Portable|Vita|\\d+))@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sony',
      'model' => '$1',
    ),
    '@; *((?:CSL_Spice|Spice|SPICE|CSL)[ _\\-]?)?([Mm][Ii])([ _\\-])?(\\d{3}[^;/]*) Build/@' => 
    array (
      'device' => '$1$2$3$4',
      'manufacturer' => 'Spice',
      'model' => 'Mi$4',
    ),
    '@; *(Sprint )((?:(?!Build|[;/]).)+) *(?:Build|[;/])@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Sprint',
      'model' => '$2',
    ),
    '@\\b(Sprint)[: ]([^;,/ ]+)@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Sprint',
      'model' => '$2',
    ),
    '@; *(TAGI[ ]?)(MID) ?([^;/]+) Build/@' => 
    array (
      'device' => '$1$2$3',
      'manufacturer' => 'Tagi',
      'model' => '$2$3',
    ),
    '@; *(Oyster500|Opal 800) Build@' => 
    array (
      'device' => 'Tecmobile $1',
      'manufacturer' => 'Tecmobile',
      'model' => '$1',
    ),
    '@; *(TECNO[ _])([^;/]+) Build/@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Tecno',
      'model' => '$2',
    ),
    '@; *Android for (Telechips|Techvision) ([^ ]+) @' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *(T-Hub2) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Telstra',
      'model' => '$1',
    ),
    '@; *(PAD) ?(100[12]) Build/@' => 
    array (
      'device' => 'Terra $1$2',
      'manufacturer' => 'Terra',
      'model' => '$1$2',
    ),
    '@; *(T[BM]-\\d{3}[^;/]+) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Texet',
      'model' => '$1',
    ),
    '@; *(tolino [^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Thalia',
      'model' => '$1',
    ),
    '@; *Build/.* (TOLINO_BROWSER)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Thalia',
      'model' => 'Tolino Shine',
    ),
    '@; *(?:CJ[ -])?(ThL|THL)[ -]([^;/]+) Build/@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Thl',
      'model' => '$2',
    ),
    '@; *(T100|T200|T5|W100|W200|W8s) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Thl',
      'model' => '$1',
    ),
    '@; *(T-Mobile[ _]G2[ _]Touch) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => 'Hero',
    ),
    '@; *(T-Mobile[ _]G2) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => 'Desire Z',
    ),
    '@; *(T-Mobile myTouch Q) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Huawei',
      'model' => 'U8730',
    ),
    '@; *(T-Mobile myTouch) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Huawei',
      'model' => 'U8680',
    ),
    '@; *(T-Mobile_Espresso) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => 'Espresso',
    ),
    '@; *(T-Mobile G1) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'HTC',
      'model' => 'Dream',
    ),
    '@\\b(T-Mobile ?)?(myTouch)[ _]?([34]G)[ _]?([^\\/]*) (?:Mozilla|Build)@' => 
    array (
      'device' => '$1$2 $3 $4',
      'manufacturer' => 'HTC',
      'model' => '$2 $3 $4',
    ),
    '@\\b(T-Mobile)_([^_]+)_(.*) Build@' => 
    array (
      'device' => '$1 $2 $3',
      'manufacturer' => 'Tmobile',
      'model' => '$2 $3',
    ),
    '@\\b(T-Mobile)[_ ]?((?:(?!Build).)*)Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Tmobile',
      'model' => '$2',
    ),
    '@ (ATP[0-9]{4}) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Tomtec',
      'model' => '$1',
    ),
    '@ *(TOOKY)[ _\\-]([^;/]+) ?(?:Build|;)@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1 $2',
      'manufacturer' => 'Tooky',
      'model' => '$2',
    ),
    '@\\b(TOSHIBA_AC_AND_AZ|TOSHIBA_FOLIO_AND_A|FOLIO_AND_A)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Toshiba',
      'model' => 'Folio 100',
    ),
    '@; *([Ff]olio ?100) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Toshiba',
      'model' => 'Folio 100',
    ),
    '@; *(AT[0-9]{2,3}(?:\\-A|LE\\-A|PE\\-A|SE|a)?|AT7-A|AT1S0|Hikari-iFrame/WDPF-[^;/]+|THRiVE|Thrive) Build/@' => 
    array (
      'device' => 'Toshiba $1',
      'manufacturer' => 'Toshiba',
      'model' => '$1',
    ),
    '@; *(TM-MID\\d+[^;/]+|TOUCHMATE|MID-750) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Touchmate',
      'model' => '$1',
    ),
    '@; *(TM-SM\\d+[^;/]+) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Touchmate',
      'model' => '$1',
    ),
    '@; *(A10 [Bb]asic2?) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Treq',
      'model' => '$1',
    ),
    '@; *(TREQ[ _\\-])([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1$2',
      'manufacturer' => 'Treq',
      'model' => '$2',
    ),
    '@; *(X-?5|X-?3) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Umeox',
      'model' => '$1',
    ),
    '@; *(A502\\+?|A936|A603|X1|X2) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Umeox',
      'model' => '$1',
    ),
    '@(TOUCH(?:TAB|PAD)(?:(?! Build).)+) Build/@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Versus $1',
      'manufacturer' => 'Versus',
      'model' => '$1',
    ),
    '@(VERTU) ([^;/]+) Build/@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Vertu',
      'model' => '$2',
    ),
    '@; *(Videocon)[ _\\-]([^;/]+) *(?:Build|;)@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'Videocon',
      'model' => '$2',
    ),
    '@ (VT\\d{2}[A-Za-z]*) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Videocon',
      'model' => '$1',
    ),
    '@; *((?:ViewPad|ViewPhone|VSD)[^;/]+) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Viewsonic',
      'model' => '$1',
    ),
    '@; *(ViewSonic-)([^;/]+) Build/@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'Viewsonic',
      'model' => '$2',
    ),
    '@; *(GTablet.*) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Viewsonic',
      'model' => '$1',
    ),
    '@; *([Vv]ivo)[ _]([^;/]+) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'vivo',
      'model' => '$2',
    ),
    '@(Vodafone) (.*) Build/@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *(?:Walton[ _\\-])?(Primo[ _\\-][^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Walton $1',
      'manufacturer' => 'Walton',
      'model' => '$1',
    ),
    '@; *(?:WIKO[ \\-])?(CINK\\+?|BARRY|BLOOM|DARKFULL|DARKMOON|DARKNIGHT|DARKSIDE|FIZZ|HIGHWAY|IGGY|OZZY|RAINBOW|STAIRWAY|SUBLIM|WAX|CINK [^;/]+) Build/@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Wiko $1',
      'manufacturer' => 'Wiko',
      'model' => '$1',
    ),
    '@; *WellcoM-([^;/]+) Build@' => 
    array (
      'device' => 'Wellcom $1',
      'manufacturer' => 'Wellcom',
      'model' => '$1',
    ),
    '@(?:(WeTab)-Browser|; (wetab) Build)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'WeTab',
      'model' => 'WeTab',
    ),
    '@; *(AT-AS[^;/]+) Build@' => 
    array (
      'device' => 'Wolfgang $1',
      'manufacturer' => 'Wolfgang',
      'model' => '$1',
    ),
    '@; *(?:Woxter|Wxt) ([^;/]+) Build@' => 
    array (
      'device' => 'Woxter $1',
      'manufacturer' => 'Woxter',
      'model' => '$1',
    ),
    '@; *(?:Xenta |Luna )?(TAB[234][0-9]{2}|TAB0[78]-\\d{3}|TAB0?9-\\d{3}|TAB1[03]-\\d{3}|SMP\\d{2}-\\d{3}) Build/@' => 
    array (
      'device' => 'Yarvik $1',
      'manufacturer' => 'Yarvik',
      'model' => '$1',
    ),
    '@; *([A-Z]{2,4})(M\\d{3,}[A-Z]{2})([^;\\)\\/]*)(?: Build|[;\\)])@' => 
    array (
      'device' => 'Yifang $1$2$3',
      'manufacturer' => 'Yifang',
      'model' => '$2',
    ),
    '@; *(MI \\d[^;/]*|MI-ONE Plus) Build/@' => 
    array (
      'device' => 'XiaoMi $1',
      'manufacturer' => 'XiaoMi',
      'model' => '$1',
    ),
    '@; *XOLO[ _]([^;/]*tab.*) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Xolo $1',
      'manufacturer' => 'Xolo',
      'model' => '$1',
    ),
    '@; *XOLO[ _]([^;/]+) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Xolo $1',
      'manufacturer' => 'Xolo',
      'model' => '$1',
    ),
    '@; *(q\\d0{2,3}[a-z]?) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Xolo $1',
      'manufacturer' => 'Xolo',
      'model' => '$1',
    ),
    '@; *(PAD ?[79]\\d+[^;/]*|TelePAD\\d+[^;/]) Build@' => 
    array (
      'device' => 'Xoro $1',
      'manufacturer' => 'Xoro',
      'model' => '$1',
    ),
    '@; *(?:(?:ZOPO|Zopo)[ _]([^;/]+)|(ZP ?(?:\\d{2}[^;/]+|C2))|(C[2379])) Build@' => 
    array (
      'device' => '$1$2$3',
      'manufacturer' => 'Zopo',
      'model' => '$1$2$3',
    ),
    '@; *(ZiiLABS) (Zii[^;/]*) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'ZiiLabs',
      'model' => '$2',
    ),
    '@; *(Zii)_([^;/]*) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'ZiiLabs',
      'model' => '$2',
    ),
    '@; *(ARIZONA|(?:ATLAS|Atlas) W|D930|Grand (?:[SX][^;]*|Era|Memo[^;]*)|JOE|(?:Kis|KIS)\\b[^;]*|Libra|Light [^;]*|N8[056][01]|N850L|N8000|N9[15]\\d{2}|N9810|NX501|Optik|(?:Vip )Racer[^;]*|RacerII|RACERII|San Francisco[^;]*|V9[AC]|V55|V881|Z[679][0-9]{2}[A-z]?) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'ZTE',
      'model' => '$1',
    ),
    '@; *([A-Z]\\d+)_USA_[^;]* Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'ZTE',
      'model' => '$1',
    ),
    '@; *(SmartTab\\d+)[^;]* Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'ZTE',
      'model' => '$1',
    ),
    '@; *(?:Blade|BLADE|ZTE-BLADE)([^;/]*) Build@' => 
    array (
      'device' => 'ZTE Blade$1',
      'manufacturer' => 'ZTE',
      'model' => 'Blade$1',
    ),
    '@; *(?:Skate|SKATE|ZTE-SKATE)([^;/]*) Build@' => 
    array (
      'device' => 'ZTE Skate$1',
      'manufacturer' => 'ZTE',
      'model' => 'Skate$1',
    ),
    '@; *(Orange |Optimus )(Monte Carlo|San Francisco) Build@' => 
    array (
      'device' => '$1$2',
      'manufacturer' => 'ZTE',
      'model' => '$1$2',
    ),
    '@; *(?:ZXY-ZTE_|ZTE\\-U |ZTE[\\- _]|ZTE-C[_ ])([^;/]+) Build@' => 
    array (
      'device' => 'ZTE $1',
      'manufacturer' => 'ZTE',
      'model' => '$1',
    ),
    '@; (BASE) (lutea|Lutea 2|Tab[^;]*) Build@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => 'ZTE',
      'model' => '$1 $2',
    ),
    '@; (Avea inTouch 2|soft stone|tmn smart a7|Movistar[ _]Link) Build@' => 
    array (
      'regex_flag' => 'i',
      'device' => '$1',
      'manufacturer' => 'ZTE',
      'model' => '$1',
    ),
    '@; *(vp9plus)\\)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'ZTE',
      'model' => '$1',
    ),
    '@; ?(Cloud[ _]Z5|z1000|Z99 2G|z99|z930|z999|z990|z909|Z919|z900) Build/@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Zync',
      'model' => '$1',
    ),
    '@; ?(KFOT|Kindle Fire) Build\\b@' => 
    array (
      'device' => 'Kindle Fire',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire',
    ),
    '@; ?(KFOTE|Amazon Kindle Fire2) Build\\b@' => 
    array (
      'device' => 'Kindle Fire 2',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire 2',
    ),
    '@; ?(KFTT) Build\\b@' => 
    array (
      'device' => 'Kindle Fire HD',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire HD 7"',
    ),
    '@; ?(KFJWI) Build\\b@' => 
    array (
      'device' => 'Kindle Fire HD 8.9" WiFi',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire HD 8.9" WiFi',
    ),
    '@; ?(KFJWA) Build\\b@' => 
    array (
      'device' => 'Kindle Fire HD 8.9" 4G',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire HD 8.9" 4G',
    ),
    '@; ?(KFSOWI) Build\\b@' => 
    array (
      'device' => 'Kindle Fire HD 7" WiFi',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire HD 7" WiFi',
    ),
    '@; ?(KFTHWI) Build\\b@' => 
    array (
      'device' => 'Kindle Fire HDX 7" WiFi',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire HDX 7" WiFi',
    ),
    '@; ?(KFTHWA) Build\\b@' => 
    array (
      'device' => 'Kindle Fire HDX 7" 4G',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire HDX 7" 4G',
    ),
    '@; ?(KFAPWI) Build\\b@' => 
    array (
      'device' => 'Kindle Fire HDX 8.9" WiFi',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire HDX 8.9" WiFi',
    ),
    '@; ?(KFAPWA) Build\\b@' => 
    array (
      'device' => 'Kindle Fire HDX 8.9" 4G',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire HDX 8.9" 4G',
    ),
    '@; ?Amazon ([^;/]+) Build\\b@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Amazon',
      'model' => '$1',
    ),
    '@; ?(Kindle) Build\\b@' => 
    array (
      'device' => 'Kindle',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle',
    ),
    '@; ?(Silk)/(\\d+)\\.(\\d+)(?:\\.([0-9\\-]+))? Build\\b@' => 
    array (
      'device' => 'Kindle Fire',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle Fire$2',
    ),
    '@ (Kindle)/(\\d+\\.\\d+)@' => 
    array (
      'device' => 'Kindle',
      'manufacturer' => 'Amazon',
      'model' => '$1 $2',
    ),
    '@ (Silk|Kindle)/(\\d+)\\.@' => 
    array (
      'device' => 'Kindle',
      'manufacturer' => 'Amazon',
      'model' => 'Kindle',
    ),
    '@(sprd)\\-([^/]+)/@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@; *(H\\d{2}00\\+?) Build@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Hero',
      'model' => '$1',
    ),
    '@; *(iphone|iPhone5) Build/@' => 
    array (
      'device' => 'Xianghe $1',
      'manufacturer' => 'Xianghe',
      'model' => '$1',
    ),
    '@; *(e\\d{4}[a-z]?_?v\\d+|v89_[^;/]+)[^;/]+ Build/@' => 
    array (
      'device' => 'Xianghe $1',
      'manufacturer' => 'Xianghe',
      'model' => '$1',
    ),
    '@\\bUSCC[_\\-]?([^ ;/\\)]+)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Cellular',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?)?(?:ALCATEL)[^;]*; *([^;,\\)]+)@' => 
    array (
      'device' => 'Alcatel $1',
      'manufacturer' => 'Alcatel',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?)?(?:ASUS|Asus)[^;]*; *([^;,\\)]+)@' => 
    array (
      'device' => 'Asus $1',
      'manufacturer' => 'Asus',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?)?(?:DELL|Dell)[^;]*; *([^;,\\)]+)@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?)?(?:HTC|Htc|HTC_blocked[^;]*)[^;]*; *(?:HTC)?([^;,\\)]+)@' => 
    array (
      'device' => 'HTC $1',
      'manufacturer' => 'HTC',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?)?(?:HUAWEI)[^;]*; *(?:HUAWEI )?([^;,\\)]+)@' => 
    array (
      'device' => 'Huawei $1',
      'manufacturer' => 'Huawei',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?)?(?:LG|Lg)[^;]*; *(?:LG[ \\-])?([^;,\\)]+)@' => 
    array (
      'device' => 'LG $1',
      'manufacturer' => 'LG',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?)?(?:NOKIA|Nokia)[^;]*; *(?:NOKIA ?|Nokia ?|LUMIA ?|[Ll]umia ?)*(\\d{3,}[^;\\)]*)@' => 
    array (
      'device' => 'Lumia $1',
      'manufacturer' => 'Nokia',
      'model' => 'Lumia $1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?)?(?:NOKIA|Nokia)[^;]*; *(RM-\\d{3,})@' => 
    array (
      'device' => 'Nokia $1',
      'manufacturer' => 'Nokia',
      'model' => '$1',
    ),
    '@(?:Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)]|WPDesktop;) ?(?:ARM; ?Touch; ?|Touch; ?)?(?:NOKIA|Nokia)[^;]*; *(?:NOKIA ?|Nokia ?|LUMIA ?|[Ll]umia ?)*([^;\\)]+)@' => 
    array (
      'device' => 'Nokia $1',
      'manufacturer' => 'Nokia',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?)?(?:Microsoft(?: Corporation)?)[^;]*; *([^;,\\)]+)@' => 
    array (
      'device' => 'Microsoft $1',
      'manufacturer' => 'Microsoft',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?)?(?:SAMSUNG)[^;]*; *(?:SAMSUNG )?([^;,\\.\\)]+)@' => 
    array (
      'device' => 'Samsung $1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?)?(?:TOSHIBA|FujitsuToshibaMobileCommun)[^;]*; *([^;,\\)]+)@' => 
    array (
      'device' => 'Toshiba $1',
      'manufacturer' => 'Toshiba',
      'model' => '$1',
    ),
    '@Windows Phone [^;]+; (?:(?!IEMobile/).)*IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?)?([^;]+); *([^;,\\)]+)@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@(?:^|; )SAMSUNG\\-([A-Za-z0-9\\-]+).* Bada/@' => 
    array (
      'device' => 'Samsung $1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@\\(Mobile; ALCATEL ?(One|ONE) ?(Touch|TOUCH) ?([^;/]+)(?:/[^;]+)?; rv:[^\\)]+\\) Gecko/[^\\/]+ Firefox/@' => 
    array (
      'device' => 'Alcatel $1 $2 $3',
      'manufacturer' => 'Alcatel',
      'model' => 'One Touch $3',
    ),
    '@\\(Mobile; (?:ZTE([^;]+)|(OpenC)); rv:[^\\)]+\\) Gecko/[^\\/]+ Firefox/@' => 
    array (
      'device' => 'ZTE $1$2',
      'manufacturer' => 'ZTE',
      'model' => '$1$2',
    ),
    '@Nokia(N[0-9]+)([A-z_\\-][A-z0-9_\\-]*)@' => 
    array (
      'device' => 'Nokia $1',
      'manufacturer' => 'Nokia',
      'model' => '$1$2',
    ),
    '@(?:NOKIA|Nokia)(?:\\-| *)(?:([A-Za-z0-9]+)\\-[0-9a-f]{32}|((?:(?!UCBrowser)[A-Za-z0-9\\-])+))@' => 
    array (
      'device' => 'Nokia $1$2',
      'manufacturer' => 'Nokia',
      'model' => '$1$2',
    ),
    '@Lumia ([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'Lumia $1',
      'manufacturer' => 'Nokia',
      'model' => 'Lumia $1',
    ),
    '@\\(Symbian; U; S60 V5; [A-z]{2}\\-[A-z]{2}; (SonyEricsson|Samsung|Nokia|LG)([^;/]+)\\)@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@\\(Symbian(?:/3)?; U; ([^;]+);@' => 
    array (
      'device' => 'Nokia $1',
      'manufacturer' => 'Nokia',
      'model' => '$1',
    ),
    '@BB10; ([A-Za-z0-9\\- ]+)\\)@' => 
    array (
      'device' => 'BlackBerry $1',
      'manufacturer' => 'BlackBerry',
      'model' => '$1',
    ),
    '@Play[Bb]ook.+RIM Tablet OS@' => 
    array (
      'device' => 'BlackBerry Playbook',
      'manufacturer' => 'BlackBerry',
      'model' => 'Playbook',
    ),
    '@Black[Bb]erry ([0-9]+);@' => 
    array (
      'device' => 'BlackBerry $1',
      'manufacturer' => 'BlackBerry',
      'model' => '$1',
    ),
    '@Black[Bb]erry([0-9]+)@' => 
    array (
      'device' => 'BlackBerry $1',
      'manufacturer' => 'BlackBerry',
      'model' => '$1',
    ),
    '@Black[Bb]erry;@' => 
    array (
      'device' => 'BlackBerry',
      'manufacturer' => 'BlackBerry',
    ),
    '@(Pre|Pixi)/\\d+\\.\\d+@' => 
    array (
      'device' => 'Palm $1',
      'manufacturer' => 'Palm',
      'model' => '$1',
    ),
    '@Palm([0-9]+)@' => 
    array (
      'device' => 'Palm $1',
      'manufacturer' => 'Palm',
      'model' => '$1',
    ),
    '@Treo([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Palm Treo $1',
      'manufacturer' => 'Palm',
      'model' => 'Treo $1',
    ),
    '@webOS.*(P160U(?:NA)?)/(\\d+).(\\d+)@' => 
    array (
      'device' => 'HP Veer',
      'manufacturer' => 'HP',
      'model' => 'Veer',
    ),
    '@(Touch[Pp]ad)/\\d+\\.\\d+@' => 
    array (
      'device' => 'HP TouchPad',
      'manufacturer' => 'HP',
      'model' => 'TouchPad',
    ),
    '@HPiPAQ([A-Za-z0-9]+)/\\d+.\\d+@' => 
    array (
      'device' => 'HP iPAQ $1',
      'manufacturer' => 'HP',
      'model' => 'iPAQ $1',
    ),
    '@PDA; (PalmOS)/sony/model ([a-z]+)/Revision@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Sony',
      'model' => '$1 $2',
    ),
    '@(AppleTV)@' => 
    array (
      'device' => 'AppleTV',
      'manufacturer' => 'Apple',
      'model' => '$1',
    ),
    '@(QtCarBrowser)@' => 
    array (
      'device' => 'Tesla Model S',
      'manufacturer' => 'Tesla',
      'model' => 'Model S',
    ),
    '@((?:iPhone|iPad|iPod)\\d+,\\d+)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Apple',
      'model' => '$1',
    ),
    '@(iPad)(?:;| Simulator;)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Apple',
      'model' => '$1',
    ),
    '@(iPod)(?:;| touch;| Simulator;)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Apple',
      'model' => '$1',
    ),
    '@(iPhone)(?:;| Simulator;)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Apple',
      'model' => '$1',
    ),
    '@CFNetwork/.* Darwin/\\d.*\\(((?:Mac|iMac|PowerMac|PowerBook)[^\\d]*)(\\d+)(?:,|%2C)(\\d+)@' => 
    array (
      'device' => '$1$2,$3',
      'manufacturer' => 'Apple',
      'model' => '$1$2,$3',
    ),
    '@CFNetwork/.* Darwin/\\d@' => 
    array (
      'device' => 'iOS-Device',
      'manufacturer' => 'Apple',
      'model' => 'iOS-Device',
    ),
    '@acer_([A-Za-z0-9]+)_@' => 
    array (
      'device' => 'Acer $1',
      'manufacturer' => 'Acer',
      'model' => '$1',
    ),
    '@(?:ALCATEL|Alcatel)-([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'Alcatel $1',
      'manufacturer' => 'Alcatel',
      'model' => '$1',
    ),
    '@(?:Amoi|AMOI)\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Amoi $1',
      'manufacturer' => 'Amoi',
      'model' => '$1',
    ),
    '@(?:; |\\/|^)((?:Transformer (?:Pad|Prime) |Transformer |PadFone[ _]?)[A-Za-z0-9]*)@' => 
    array (
      'device' => 'Asus $1',
      'manufacturer' => 'Asus',
      'model' => '$1',
    ),
    '@(?:asus.*?ASUS|Asus|ASUS|asus)[\\- ;]*((?:Transformer (?:Pad|Prime) |Transformer |Padfone |Nexus[ _])?[A-Za-z0-9]+)@' => 
    array (
      'device' => 'Asus $1',
      'manufacturer' => 'Asus',
      'model' => '$1',
    ),
    '@\\bBIRD[ \\-\\.]([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Bird $1',
      'manufacturer' => 'Bird',
      'model' => '$1',
    ),
    '@\\bDell ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Dell $1',
      'manufacturer' => 'Dell',
      'model' => '$1',
    ),
    '@DoCoMo/2\\.0 ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'DoCoMo $1',
      'manufacturer' => 'DoCoMo',
      'model' => '$1',
    ),
    '@([A-Za-z0-9]+)_W;FOMA@' => 
    array (
      'device' => 'DoCoMo $1',
      'manufacturer' => 'DoCoMo',
      'model' => '$1',
    ),
    '@([A-Za-z0-9]+);FOMA@' => 
    array (
      'device' => 'DoCoMo $1',
      'manufacturer' => 'DoCoMo',
      'model' => '$1',
    ),
    '@\\bHTC[ _\\-]?((?:(?!-?Mozilla|fingerPrint|[;/\\(\\)]).)+)@' => 
    array (
      'device' => 'HTC $1',
      'manufacturer' => 'HTC',
      'model' => '$1',
    ),
    '@Huawei([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Huawei $1',
      'manufacturer' => 'Huawei',
      'model' => '$1',
    ),
    '@HUAWEI-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Huawei $1',
      'manufacturer' => 'Huawei',
      'model' => '$1',
    ),
    '@vodafone([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Huawei Vodafone $1',
      'manufacturer' => 'Huawei',
      'model' => 'Vodafone $1',
    ),
    '@i\\-mate ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'i-mate $1',
      'manufacturer' => 'i-mate',
      'model' => '$1',
    ),
    '@Kyocera\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Kyocera $1',
      'manufacturer' => 'Kyocera',
      'model' => '$1',
    ),
    '@KWC\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Kyocera $1',
      'manufacturer' => 'Kyocera',
      'model' => '$1',
    ),
    '@Lenovo[_\\-]([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Lenovo $1',
      'manufacturer' => 'Lenovo',
      'model' => '$1',
    ),
    '@(HbbTV)/[0-9]+\\.[0-9]+\\.[0-9]+ \\([^;]*; *(LG)E *; *([^;]*) *;[^;]*;[^;]*;\\)@' => 
    array (
      'device' => '$1',
      'manufacturer' => '$2',
      'model' => '$3',
    ),
    '@(HbbTV)(?:/1\\.1\\.1)?(?: ?\\(;;;;;\\))?; *CE-HTML(?:/1\\.\\d)?; *([^ ]+) ([^;]+);@' => 
    array (
      'device' => '$1',
      'manufacturer' => '$2',
      'model' => '$3',
    ),
    '@(HbbTV)/1\\.1\\.1 \\(;;;;;\\) Maple_2011@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Samsung',
    ),
    '@(HbbTV)/[0-9]+\\.[0-9]+\\.[0-9]+ \\([^;]*; *(?:CUS:([^;]*)|([^;]+)) *; *([^;]*) *;.*;@' => 
    array (
      'device' => '$1',
      'manufacturer' => '$2$3',
      'model' => '$4',
    ),
    '@(HbbTV)/[0-9]+\\.[0-9]+\\.[0-9]+@' => 
    array (
      'device' => '$1',
    ),
    '@LGE; (?:Media\\/)?([^;]*);[^;]*;[^;]*;?\\); "?LG NetCast(\\.TV|\\.Media|)-\\d+@' => 
    array (
      'device' => 'NetCast$2',
      'manufacturer' => 'LG',
      'model' => '$1',
    ),
    '@InettvBrowser/[0-9]+\\.[0-9A-Z]+ \\([^;]*;(Sony)([^;]*);[^;]*;[^\\)]*\\)@' => 
    array (
      'device' => 'Inettv',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@InettvBrowser/[0-9]+\\.[0-9A-Z]+ \\([^;]*;([^;]*);[^;]*;[^\\)]*\\)@' => 
    array (
      'device' => 'Inettv',
      'manufacturer' => 'Generic_Inettv',
      'model' => '$1',
    ),
    '@(?:InettvBrowser|TSBNetTV|NETTV|HBBTV)@' => 
    array (
      'device' => 'Inettv',
      'manufacturer' => 'Generic_Inettv',
    ),
    '@Series60/\\d\\.\\d (LG)[\\-]?([A-Za-z0-9 \\-]+)@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@\\b(?:LGE[ \\-]LG\\-(?:AX)?|LGE |LGE?-LG|LGE?[ \\-]|LG[ /\\-]|lg[\\-])([A-Za-z0-9]+)\\b@' => 
    array (
      'device' => 'LG $1',
      'manufacturer' => 'LG',
      'model' => '$1',
    ),
    '@(?:^LG[\\-]?|^LGE[\\-/]?)([A-Za-z]+[0-9]+[A-Za-z]*)@' => 
    array (
      'device' => 'LG $1',
      'manufacturer' => 'LG',
      'model' => '$1',
    ),
    '@^LG([0-9]+[A-Za-z]*)@' => 
    array (
      'device' => 'LG $1',
      'manufacturer' => 'LG',
      'model' => '$1',
    ),
    '@(KIN\\.[^ ]+) (\\d+)\\.(\\d+)@' => 
    array (
      'device' => 'Microsoft $1',
      'manufacturer' => 'Microsoft',
      'model' => '$1',
    ),
    '@(?:MSIE|XBMC).*\\b(Xbox)\\b@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Microsoft',
      'model' => '$1',
    ),
    '@; ARM; Trident/6\\.0; Touch[\\);]@' => 
    array (
      'device' => 'Microsoft Surface RT',
      'manufacturer' => 'Microsoft',
      'model' => 'Surface RT',
    ),
    '@Motorola\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Motorola $1',
      'manufacturer' => 'Motorola',
      'model' => '$1',
    ),
    '@MOTO\\-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Motorola $1',
      'manufacturer' => 'Motorola',
      'model' => '$1',
    ),
    '@MOT\\-([A-z0-9][A-z0-9\\-]*)@' => 
    array (
      'device' => 'Motorola $1',
      'manufacturer' => 'Motorola',
      'model' => '$1',
    ),
    '@Nintendo WiiU@' => 
    array (
      'device' => 'Nintendo Wii U',
      'manufacturer' => 'Nintendo',
      'model' => 'Wii U',
    ),
    '@Nintendo (DS|3DS|DSi|Wii);@' => 
    array (
      'device' => 'Nintendo $1',
      'manufacturer' => 'Nintendo',
      'model' => '$1',
    ),
    '@(?:Pantech|PANTECH)[ _-]?([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'Pantech $1',
      'manufacturer' => 'Pantech',
      'model' => '$1',
    ),
    '@Philips([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Philips $1',
      'manufacturer' => 'Philips',
      'model' => '$1',
    ),
    '@Philips ([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Philips $1',
      'manufacturer' => 'Philips',
      'model' => '$1',
    ),
    '@SymbianOS/9\\.\\d.* Samsung[/\\-]([A-Za-z0-9 \\-]+)@' => 
    array (
      'device' => 'Samsung $1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@(Samsung)(SGH)(i[0-9]+)@' => 
    array (
      'device' => '$1 $2$3',
      'manufacturer' => '$1',
      'model' => '$2-$3',
    ),
    '@SAMSUNG-ANDROID-MMS/([^;/]+)@' => 
    array (
      'device' => '$1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@SAMSUNG(?:; |[ -/])([A-Za-z0-9\\-]+)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Samsung $1',
      'manufacturer' => 'Samsung',
      'model' => '$1',
    ),
    '@(Dreamcast)@' => 
    array (
      'device' => 'Sega $1',
      'manufacturer' => 'Sega',
      'model' => '$1',
    ),
    '@^SIE-([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Siemens $1',
      'manufacturer' => 'Siemens',
      'model' => '$1',
    ),
    '@Softbank/[12]\\.0/([A-Za-z0-9]+)@' => 
    array (
      'device' => 'Softbank $1',
      'manufacturer' => 'Softbank',
      'model' => '$1',
    ),
    '@SonyEricsson ?([A-Za-z0-9\\-]+)@' => 
    array (
      'device' => 'Ericsson $1',
      'manufacturer' => 'SonyEricsson',
      'model' => '$1',
    ),
    '@Android [^;]+; ([^ ]+) (Sony)/@' => 
    array (
      'device' => '$2 $1',
      'manufacturer' => '$2',
      'model' => '$1',
    ),
    '@(Sony)(?:BDP\\/|\\/)?([^ /;\\)]+)[ /;\\)]@' => 
    array (
      'device' => '$1 $2',
      'manufacturer' => '$1',
      'model' => '$2',
    ),
    '@Puffin/[\\d\\.]+IT@' => 
    array (
      'device' => 'iPad',
      'manufacturer' => 'Apple',
      'model' => 'iPad',
    ),
    '@Puffin/[\\d\\.]+IP@' => 
    array (
      'device' => 'iPhone',
      'manufacturer' => 'Apple',
      'model' => 'iPhone',
    ),
    '@Puffin/[\\d\\.]+AT@' => 
    array (
      'device' => 'Generic Tablet',
      'manufacturer' => 'Generic',
      'model' => 'Tablet',
    ),
    '@Puffin/[\\d\\.]+AP@' => 
    array (
      'device' => 'Generic Smartphone',
      'manufacturer' => 'Generic',
      'model' => 'Smartphone',
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+; [A-Za-z]{2}\\-[A-Za-z]{0,2}; WOWMobile (.+) Build@' => 
    array (
      'manufacturer' => 'Generic_Android',
      'model' => '$1',
    ),
    '@Android[\\- ][\\d]+\\.[\\d]+\\-update1; [A-Za-z]{2}\\-[A-Za-z]{0,2} *; *((?:(?!Build).)+) Build@' => 
    array (
      'manufacturer' => 'Generic_Android',
      'model' => '$1',
    ),
    '@Android[\\- ][\\d]+(?:\\.[\\d]+){1,2}; *[A-Za-z]{2}[_\\-][A-Za-z]{0,2}\\-? *; *((?:(?!Build).)+) Build@' => 
    array (
      'manufacturer' => 'Generic_Android',
      'model' => '$1',
    ),
    '@Android[\\- ][\\d]+(?:\\.[\\d]+){1,2}; *[A-Za-z]{0,2}\\- *; *((?:(?!Build).)+) Build@' => 
    array (
      'manufacturer' => 'Generic_Android',
      'model' => '$1',
    ),
    '@Android[\\- ][\\d]+(?:\\.[\\d]+){1,2}; *[a-z]{0,2}[_\\-]?[A-Za-z]{0,2};? Build@' => 
    array (
      'manufacturer' => 'Generic',
      'model' => 'Smartphone',
    ),
    '@Android[\\- ][\\d]+(?:\\.[\\d]+){1,2}; *\\-?[A-Za-z]{2}; *((?:(?!Build).)+) Build@' => 
    array (
      'manufacturer' => 'Generic_Android',
      'model' => '$1',
    ),
    '@Android[\\- ][\\d]+(?:\\.[\\d]+){1,2}(?:;.*)?; *((?:(?! Build).)+) Build@' => 
    array (
      'manufacturer' => 'Generic_Android',
      'model' => '$1',
    ),
    '@(GoogleTV)@' => 
    array (
      'manufacturer' => 'Generic_Inettv',
      'model' => '$1',
    ),
    '@(WebTV)/\\d+.\\d+@' => 
    array (
      'manufacturer' => 'Generic_Inettv',
      'model' => '$1',
    ),
    '@(Android 3\\.\\d|Opera Tablet|Tablet; .+Firefox/|Android.*(?:Tab|Pad))@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Generic Tablet',
      'manufacturer' => 'Generic',
      'model' => 'Tablet',
    ),
    '@(Symbian|\\bS60(Version|V\\d)|\\bS60\\b|\\((Series 60|Windows Mobile|Palm OS|Bada); Opera Mini|Windows CE|Opera Mobi|BREW|Brew|Mobile; .+Firefox/|iPhone OS|Android|MobileSafari|Windows *Phone|\\(webOS/|PalmOS)@' => 
    array (
      'device' => 'Generic Smartphone',
      'manufacturer' => 'Generic',
      'model' => 'Smartphone',
    ),
    '@(hiptop|avantgo|plucker|xiino|blazer|elaine)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Generic Smartphone',
      'manufacturer' => 'Generic',
      'model' => 'Smartphone',
    ),
    '@(bot|zao|borg|DBot|oegp|silk|Xenu|zeal|^NING|CCBot|crawl|htdig|lycos|slurp|teoma|voila|yahoo|Sogou|CiBra|Nutch|^Java/|^JNLP/|Daumoa|Genieo|ichiro|larbin|pompos|Scrapy|snappy|speedy|spider|msnbot|msrbot|vortex|^vortex|crawler|favicon|indexer|Riddler|scooter|scraper|scrubby|WhatWeb|WinHTTP|bingbot|openbot|gigabot|furlbot|polybot|seekbot|^voyager|archiver|Icarus6j|mogimogi|Netvibes|blitzbot|altavista|charlotte|findlinks|Retreiver|TLSProber|WordPress|SeznamBot|ProoXiBot|wsr\\-agent|Squrl Java|EtaoSpider|PaperLiBot|SputnikBot|A6\\-Indexer|netresearch|searchsight|baiduspider|YisouSpider|ICC\\-Crawler|http%20client|Python-urllib|dataparksearch|converacrawler|Screaming Frog|AppEngine-Google|YahooCacheSystem|fast\\-webcrawler|Sogou Pic Spider|semanticdiscovery|Innovazion Crawler|facebookexternalhit|Google.*/\\+/web/snippet|Google-HTTP-Java-Client)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Spider',
      'manufacturer' => 'Spider',
      'model' => 'Desktop',
    ),
    '@^(1207|3gso|4thp|501i|502i|503i|504i|505i|506i|6310|6590|770s|802s|a wa|acer|acs\\-|airn|alav|asus|attw|au\\-m|aur |aus |abac|acoo|aiko|alco|alca|amoi|anex|anny|anyw|aptu|arch|argo|bmobile|bell|bird|bw\\-n|bw\\-u|beck|benq|bilb|blac|c55/|cdm\\-|chtm|capi|comp|cond|dall|dbte|dc\\-s|dica|ds\\-d|ds12|dait|devi|dmob|doco|dopo|dorado|el(?:38|39|48|49|50|55|58|68)|el[3456]\\d{2}dual|erk0|esl8|ex300|ez40|ez60|ez70|ezos|ezze|elai|emul|eric|ezwa|fake|fly\\-|fly_|g\\-mo|g1 u|g560|gf\\-5|grun|gene|go.w|good|grad|hcit|hd\\-m|hd\\-p|hd\\-t|hei\\-|hp i|hpip|hs\\-c|htc |htc\\-|htca|htcg)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Generic Feature Phone',
      'manufacturer' => 'Generic',
      'model' => 'Feature Phone',
    ),
    '@^(htcp|htcs|htct|htc_|haie|hita|huaw|hutc|i\\-20|i\\-go|i\\-ma|i\\-mobile|i230|iac|iac\\-|iac/|ig01|im1k|inno|iris|jata|kddi|kgt|kgt/|kpt |kwc\\-|klon|lexi|lg g|lg\\-a|lg\\-b|lg\\-c|lg\\-d|lg\\-f|lg\\-g|lg\\-k|lg\\-l|lg\\-m|lg\\-o|lg\\-p|lg\\-s|lg\\-t|lg\\-u|lg\\-w|lg/k|lg/l|lg/u|lg50|lg54|lge\\-|lge/|leno|m1\\-w|m3ga|m50/|maui|mc01|mc21|mcca|medi|meri|mio8|mioa|mo01|mo02|mode|modo|mot |mot\\-|mt50|mtp1|mtv |mate|maxo|merc|mits|mobi|motv|mozz|n100|n101|n102|n202|n203|n300|n302|n500|n502|n505|n700|n701|n710|nec\\-|nem\\-|newg|neon)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Generic Feature Phone',
      'manufacturer' => 'Generic',
      'model' => 'Feature Phone',
    ),
    '@^(netf|noki|nzph|o2 x|o2\\-x|opwv|owg1|opti|oran|ot\\-s|p800|pand|pg\\-1|pg\\-2|pg\\-3|pg\\-6|pg\\-8|pg\\-c|pg13|phil|pn\\-2|pt\\-g|palm|pana|pire|pock|pose|psio|qa\\-a|qc\\-2|qc\\-3|qc\\-5|qc\\-7|qc07|qc12|qc21|qc32|qc60|qci\\-|qwap|qtek|r380|r600|raks|rim9|rove|s55/|sage|sams|sc01|sch\\-|scp\\-|sdk/|se47|sec\\-|sec0|sec1|semc|sgh\\-|shar|sie\\-|sk\\-0|sl45|slid|smb3|smt5|sp01|sph\\-|spv |spv\\-|sy01|samm|sany|sava|scoo|send|siem|smar|smit|soft|sony|t\\-mo|t218|t250|t600|t610|t618|tcl\\-|tdg\\-|telm|tim\\-|ts70|tsm\\-|tsm3|tsm5|tx\\-9|tagt)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Generic Feature Phone',
      'manufacturer' => 'Generic',
      'model' => 'Feature Phone',
    ),
    '@^(talk|teli|topl|tosh|up.b|upg1|utst|v400|v750|veri|vk\\-v|vk40|vk50|vk52|vk53|vm40|vx98|virg|vertu|vite|voda|vulc|w3c |w3c\\-|wapj|wapp|wapu|wapm|wig |wapi|wapr|wapv|wapy|wapa|waps|wapt|winc|winw|wonu|x700|xda2|xdag|yas\\-|your|zte\\-|zeto|aste|audi|avan|blaz|brew|brvw|bumb|ccwa|cell|cldc|cmd\\-|dang|eml2|fetc|hipt|http|ibro|idea|ikom|ipaq|jbro|jemu|jigs|keji|kyoc|kyok|libw|m\\-cr|midp|mmef|moto|mwbp|mywa|newt|nok6|o2im|pant|pdxg|play|pluc|port|prox|rozo|sama|seri|smal|symb|treo|upsi|vx52|vx53|vx60|vx61|vx70|vx80|vx81|vx83|vx85|wap\\-|webc|whit|wmlb|xda\\-|xda_)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Generic Feature Phone',
      'manufacturer' => 'Generic',
      'model' => 'Feature Phone',
    ),
    '@^(Ice)$@' => 
    array (
      'device' => 'Generic Feature Phone',
      'manufacturer' => 'Generic',
      'model' => 'Feature Phone',
    ),
    '@(wap[\\-\\ ]browser|maui|netfront|obigo|teleca|up\\.browser|midp|Opera Mini)@' => 
    array (
      'regex_flag' => 'i',
      'device' => 'Generic Feature Phone',
      'manufacturer' => 'Generic',
      'model' => 'Feature Phone',
    ),
  ),
);