<?php

namespace WhichBrowser\Data;

Applications::$BOTS = [
    /* Fake bots (detect fake ones first) */
    [ 'name' => 'Fake Archive.org Bot',             'id' => 'fake',          'regexp' => '/^archive.org_bot/u' ],
    [ 'name' => 'Fake Ahrefs Bot',                  'id' => 'fake',          'regexp' => '/^AhrefsBot$/u' ],
    [ 'name' => 'Fake LinkedIn Bot',                'id' => 'fake',          'regexp' => '/LinkedInBot$/u' ],    
    [ 'name' => 'Fake CloudFlare Bot',              'id' => 'fake',          'regexp' => '/\;\+http\:\/\/www\.cloudflare/u' ],  

    /* Real bots */
    [ 'name' => '80legs',                           'id' => '008',           'regexp' => '/(?:^|\s)008\/([0-9.]*)/u' ],
    [ 'name' => '360spider',                        'id' => '360',           'regexp' => '/360Spider/u' ],
    [ 'name' => '360spider',                        'id' => '360',           'regexp' => '/360spider-image/u' ],
    [ 'name' => 'A6 Indexer',                       'id' => 'a6',            'regexp' => '/A6-Indexer(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Aboundex',                         'id' => 'abound',        'regexp' => '/Aboundex\/([0-9.]*)/u' ],
    [ 'name' => 'Ad Muncher',                       'id' => 'muncher',       'regexp' => '/Ad Muncher v([0-9.]*)/u' ],
    [ 'name' => 'Adaxas',                           'id' => 'adaxas',        'regexp' => '/Adaxas Spider/u' ],
    [ 'name' => 'AddThis.com',                      'id' => 'addthis',       'regexp' => '/AddThis.com/u' ],
    [ 'name' => 'ADmantX',                          'id' => 'admantx',       'regexp' => '/ADmantX Platform Semantic Analyzer/u' ],
    [ 'name' => 'Adsbot',                           'id' => 'adsbot',        'regexp' => '/Adsbot\/([0-9.]*)/u' ], // Not to be mixed up with Google Adsbot
    [ 'name' => 'Ahrefs Feeds Bot',                 'id' => 'ahrefsbot',     'regexp' => '/AhrefsBot\.Feeds v([0-9.]*)/u' ],
    [ 'name' => 'Ahrefs Site Audit Bot',            'id' => 'ahrefsbot',     'regexp' => '/AhrefsSiteAudit\/([0-9.]*)/u' ],
    [ 'name' => 'Ahrefs News Bot',                  'id' => 'ahrefsbot',     'regexp' => '/AhrefsBot\/([0-9.]*)\; News/u' ],
    [ 'name' => 'Ahrefs SA Bot',                    'id' => 'ahrefsbot',     'regexp' => '/AhrefsBot\/([0-9.]*)\; SA/u' ],
    [ 'name' => 'Ahrefs Bot',                       'id' => 'ahrefsbot',     'regexp' => '/AhrefsBot\/([0-9.]*)/u' ],
    [ 'name' => 'Alexa',                            'id' => 'archiver',      'regexp' => '/ia_archiver/u' ],
    [ 'name' => 'AltaVista',                        'id' => 'altavista',     'regexp' => '/AltaVista Intranet V([0-9.]*)/u' ],
    [ 'name' => 'Analytics SEO',                    'id' => 'curious',       'regexp' => '/Curious George - www.analyticsseo.com\/crawler/u' ],
    [ 'name' => 'Amazon CloudFront',                'id' => 'cloudfront',    'regexp' => '/Amazon CloudFront/u' ],
    [ 'name' => 'AMP HTML Validator Tool Bot',      'id' => 'amphtml',       'regexp' => '/validator\.amp\.dev/u' ],
    [ 'name' => 'Amorank Spider',                   'id' => 'amorank',       'regexp' => '/AmorankSpider\/([0-9.]*)/u' ],
    [ 'name' => 'Apple Bot',                        'id' => 'apple',         'regexp' => '/Applebot\/([0-9.]*)/u' ],
    [ 'name' => 'Apple News Bot',                   'id' => 'apple',         'regexp' => '/AppleNewsBot/u' ],
    [ 'name' => 'ArchiveBot',                       'id' => 'archive',       'regexp' => '/ArchiveTeam ArchiveBot/u' ],
    [ 'name' => 'Archive.org',                      'id' => 'archive',       'regexp' => '/archive.org_bot(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Archive.org',                      'id' => 'archive',       'regexp' => '/special_archiver(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Ask Jeeves',                       'id' => 'jeeves',        'regexp' => '/Ask Jeeves\/Teoma/u' ],
    [ 'name' => 'AstraSpider',                      'id' => 'astra',         'regexp' => '/AstraSpider V([0-9.]*)/u' ],
    [ 'name' => 'Backlink-Check',                   'id' => 'backlink',      'regexp' => '/Backlink-Ceck.de/u' ],
    [ 'name' => 'BacklinkCrawler',                  'id' => 'backlink',      'regexp' => '/BacklinkCrawler/u' ],
    [ 'name' => 'Barkrowler',                       'id' => 'barkrowler',    'regexp' => '/Barkrowler\/([0-9.]*)/u' ],
    [ 'name' => 'BazQux',                           'id' => 'bazqux',        'regexp' => '/BazQux\/([0-9.]*)/u' ],
    [ 'name' => 'Blex Bot',                         'id' => 'blex',          'regexp' => '/BLEXBot\/([0-9.]*)/u' ],
    [ 'name' => 'Blex Test Bot',                    'id' => 'blex',          'regexp' => '/BLEXBotTest\/([0-9.]*)/u' ],
    [ 'name' => 'Bing Preview',                     'id' => 'bing',          'regexp' => '/BingPreview\/([0-9.]*)/u' ],
    [ 'name' => 'BlogBridge',                       'id' => 'blogbridge',    'regexp' => '/BlogBridge ([0-9.]*)/u' ],
    [ 'name' => 'Blogger Bot',                      'id' => 'blogger',       'regexp' => '/blogger\.com\)/u' ],
    [ 'name' => 'Bloglines',                        'id' => 'bloglines',     'regexp' => '/Bloglines\/([0-9.]*)/u' ],
    [ 'name' => 'Bloglovin',                        'id' => 'bloglovin',     'regexp' => '/Bloglovin\/([0-9.]*)/u' ],
    [ 'name' => 'BlogPulse',                        'id' => 'blogpulse',     'regexp' => '/BlogPulse \(ISSpider-([0-9.]*)/u' ],
    [ 'name' => 'Blogram',                          'id' => 'blogram',       'regexp' => '/BlogramCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Blogtrottr',                       'id' => 'blogtrot',      'regexp' => '/Blogtrottr\/([0-9.]*)/u' ],
    [ 'name' => 'Blogshares',                       'id' => 'blogshares',    'regexp' => '/Blogshares/u' ],
    [ 'name' => 'BoardReader',                      'id' => 'boardreader',   'regexp' => '/BoardReader\/([0-9.]*)/u' ],
    [ 'name' => 'British Library',                  'id' => 'britishlib',    'regexp' => '/uk_lddc_bot\/([0-9.]*)/u' ],
    [ 'name' => 'Browsershots',                     'id' => 'browsershots',  'regexp' => '/Browsershots/u' ],
    [ 'name' => 'BUbiNG',                           'id' => 'bubing',        'regexp' => '/BUbiNG/u' ],
    [ 'name' => 'BuiltWith',                        'id' => 'builtwith',     'regexp' => '/BuiltWith\/([0-9.]*)/u' ],
    [ 'name' => 'Buck',                             'id' => 'buck',          'regexp' => '/Buck\/([0-9.]*)/u' ],
    [ 'name' => 'Butterfly',                        'id' => 'butterfly',     'regexp' => '/Butterfly\/([0-9.]*)/u' ],
    [ 'name' => 'BuzzSumo',                         'id' => 'buzzsumo',      'regexp' => '/buzzsumo\.com/u' ],
    [ 'name' => 'Bytespider',                       'id' => 'bytespider',    'regexp' => '/Bytespider/u' ],
    [ 'name' => 'CiteSeerX',                        'id' => 'heritrix',      'regexp' => '/heritrix\/([0-9.]*)/u' ],
    [ 'name' => 'Clarabot',                         'id' => 'clarabot',      'regexp' => '/Clarabot\/([0-9.]*)/u' ],
    [ 'name' => 'Cliqzbot',                         'id' => 'cliqz',         'regexp' => '/Cliqzbot\/([0-9.]*)/u' ],
    [ 'name' => 'Cloudflare Always Online',         'id' => 'cloudflare',    'regexp' => '/CloudFlare-AlwaysOnline\/([0-9.]*)/u' ],
    [ 'name' => 'Cloudflare AMP',                   'id' => 'cloudflare',    'regexp' => '/Cloudflare-AMP\/([0-9.]*)/u' ],
    [ 'name' => 'Cloudflare Diagnostics',           'id' => 'cloudflare',    'regexp' => '/Cloudflare[ |-]Diagnostics/u' ],
    [ 'name' => 'Cloudflare SpeedTest',             'id' => 'cloudflare',    'regexp' => '/Cloudflare SpeedTest\/([0-9.]*)/u' ],
    [ 'name' => 'Comodo',                           'id' => 'comodo',        'regexp' => '/Comodo Spider ([0-9.]*)/u' ],
    [ 'name' => 'CommaFeed',                        'id' => 'commafeed',     'regexp' => '/CommaFeed\/([0-9.]*)/u' ],
    [ 'name' => 'Common Crawl Bot',                 'id' => 'cbot',          'regexp' => '/CCBot\/([0-9.]*)/u' ],
    [ 'name' => 'Common Crawl Research Bot',        'id' => 'cbot',          'regexp' => '/CCResearchBot\/([0-9.]*)/u' ],
    [ 'name' => 'Coccocbot Web',                    'id' => 'coccoc',        'regexp' => '/coccocbot-web\/([0-9.]*)/u' ],
    [ 'name' => 'Coccocbot Image',                  'id' => 'coccoc',        'regexp' => '/coccocbot-image\/([0-9.]*)/u' ],
    [ 'name' => 'Data Hotel Watchdog',              'id' => 'watchdog',      'regexp' => '/Data-Hotel-Watchdog\/([0-9.]*)/u' ],
    [ 'name' => 'Datanyze',                         'id' => 'datanyze',      'regexp' => '/Datanyze/u' ],
    [ 'name' => 'DataparkSearch',                   'id' => 'datasearch',    'regexp' => '/DataparkSearch\/([0-9.]*)/u' ],
    [ 'name' => 'Dataprovider Bot',                 'id' => 'dataprovider',  'regexp' => '/Dataprovider/u' ],
    [ 'name' => 'Daum',                             'id' => 'daum',          'regexp' => '/Daum\/([0-9.]*)/u' ],
    [ 'name' => 'Daumoa',                           'id' => 'daumoa',        'regexp' => '/Daumoa ([0-9.]*)/u' ],
    [ 'name' => 'Digg',                             'id' => 'digg',          'regexp' => '/Digg Deeper\/v([0-9.]*)/u' ],
    [ 'name' => 'Digg',                             'id' => 'digg',          'regexp' => '/Digg\/([0-9.]*)/u' ],
    [ 'name' => 'DMCA',                             'id' => 'dmca',          'regexp' => '/DMCA\.com Page Protection Crawling Service/u' ],
    [ 'name' => 'DomainCrawler',                    'id' => 'domaincrawl',   'regexp' => '/DomainCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Domain Stats Bot',                 'id' => 'domainstats',   'regexp' => '/DomainStatsBot\/([0-9.]*)/u' ],
    [ 'name' => 'Discord',                          'id' => 'discord',       'regexp' => '/Discordbot\/([0-9.]*)/u' ],
    [ 'name' => 'Domain Re-Animator',               'id' => 'domain',        'regexp' => '/Domain Re-Animator Bot/u' ],
    [ 'name' => 'DuckDuckGo Bot',                   'id' => 'duckduckgo',    'regexp' => '/DuckDuckBot\/([0-9.]*)/u' ],
    [ 'name' => 'DuckDuckGo Https Bot',             'id' => 'duckduckgo',    'regexp' => '/DuckDuckBot-Https\/([0-9.]*)/u' ],
    [ 'name' => 'DuckDuckGo Favicons Bot',          'id' => 'duckduckgo',    'regexp' => '/DuckDuckGo-Favicons-Bot\/([0-9.]*)/u' ],
    [ 'name' => 'Embed PHP Library',                'id' => 'embedphp',      'regexp' => '/Embed PHP library/iu' ],
    [ 'name' => 'Evc-batch',                        'id' => 'evcbatch',      'regexp' => '/evc-batch\/([0-9.]*)/u' ],
    [ 'name' => 'Exabot Thumbnails',                'id' => 'exabot',        'regexp' => '/Exabot-Thumbnails/u' ],
    [ 'name' => 'ExactSeek',                        'id' => 'exactseek',     'regexp' => '/ExactSeek Crawler/u' ],
    [ 'name' => 'Ezooms Crawler',                   'id' => 'ezooms',        'regexp' => '/Ezooms\/([0-9.]*)/u' ],
    [ 'name' => 'FAST Crawler',                     'id' => 'fast',          'regexp' => '/FAST Crawler ([0-9.]*)/u' ],
    [ 'name' => 'FAST Crawler',                     'id' => 'fast',          'regexp' => '/FastCrawler3/u' ],
    [ 'name' => 'FAST Enterprise Crawler',          'id' => 'fast',          'regexp' => '/FAST Enterprise Crawler\/([0-9.]*)/u' ],
    [ 'name' => 'FAST Enterprise Crawler',          'id' => 'fast',          'regexp' => '/FAST Enterprise Crawler ([0-9.]*)/u' ],
    [ 'name' => 'FAST Enterprise Crawler',          'id' => 'fast',          'regexp' => '/FAST EnterpriseCrawler ([0-9.]*)/u' ],
    [ 'name' => 'FAST MetaWeb Crawler',             'id' => 'fast',          'regexp' => '/FAST MetaWeb Crawler/u' ],
    [ 'name' => 'FAST mSEARCH Crawler',             'id' => 'fast',          'regexp' => '/FAST-mSEARCH Crawler ([0-9.]*)/u' ],
    [ 'name' => 'FAST Web Crawler',                 'id' => 'fast',          'regexp' => '/FAST-WebCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Flamingo Search',                  'id' => 'flamingo',      'regexp' => '/Flamingo_SearchEngine/u' ],
    [ 'name' => 'Fastladder',                       'id' => 'fastladder',    'regexp' => '/Fastladder FeedFetcher\/([0-9.]*)/u' ],
    [ 'name' => 'Feedbin',                          'id' => 'feed',          'regexp' => '/Feedbin/u' ],
    [ 'name' => 'FeedWrangler',                     'id' => 'wrangler',      'regexp' => '/Feed Wrangler\/([0-9.]*)/u' ],
    [ 'name' => 'Feedly',                           'id' => 'feed',          'regexp' => '/FeedlyApp\/([0-9.]*)/u' ],
    [ 'name' => 'Feedly',                           'id' => 'feed',          'regexp' => '/FeedlyBot\/([0-9.]*)/u' ],
    [ 'name' => 'Feedly',                           'id' => 'feed',          'regexp' => '/MetaFeedly\/([0-9.]*)/u' ],
    [ 'name' => 'Feedspot',                         'id' => 'feed',          'regexp' => '/Feedspot/u' ],
    [ 'name' => 'FeedValidator',                    'id' => 'validator',     'regexp' => '/FeedValidator\/([0-9.]*)/u' ],
    [ 'name' => 'FeedZirra',                        'id' => 'feed',          'regexp' => '/feedzirra/u' ],
    [ 'name' => 'Fever',                            'id' => 'fever',         'regexp' => '/Fever\/([0-9.]*)/u' ],
    [ 'name' => 'Florienzh',                        'id' => 'florienzh',     'regexp' => '/Florienzh\/([0-9.]*)/u' ],
    [ 'name' => 'Friendica',                        'id' => 'friendica',     'regexp' => '/Friendica/u' ],
    [ 'name' => 'FTRF: Friendly Robot',             'id' => 'robot',         'regexp' => '/FTRF: Friendly robot\/([0-9.]*)/u' ],
    [ 'name' => 'Genieo Web Filter',                'id' => 'genieo',        'regexp' => '/Genieo\/([0-9.]*)/u' ],
    [ 'name' => 'GNIP',                             'id' => 'fetchor',       'regexp' => '/UnwindFetchor\/([0-9.]*)/u' ],
    [ 'name' => 'Gocrawl',                          'id' => 'gocrawl',       'regexp' => '/Googlebot \(gocrawl v([0-9.]*)\)/u' ],
    [ 'name' => 'Gofeed',                           'id' => 'gofeed',        'regexp' => '/Gofeed\/([0-9.]+)/u' ],
    [ 'name' => 'GomezAgent',                       'id' => 'gomez',         'regexp' => '/GomezAgent ([0-9.]+)/u' ],
    [ 'name' => 'Goo',                              'id' => 'ichiro',        'regexp' => '/ichiro\/mobile goo/u' ],
    [ 'name' => 'Goo Blog Search',                  'id' => 'gooblog',       'regexp' => '/gooblog\/([0-9.]*)/u' ],
    [ 'name' => 'Goo Blog Search',                  'id' => 'gooblog',       'regexp' => '/gooblogsearch\/([0-9.]*)/u' ],
    [ 'name' => 'Goo RSS Reader',                   'id' => 'goorss',        'regexp' => '/gooRSSreader([0-9.]*)/u' ],
    [ 'name' => 'Google Search App Bot',            'id' => 'gsa',           'regexp' => '/ GSA\/([0-9.]*)/u' ],
    [ 'name' => 'Google Lighthouse Bot',            'id' => 'lighthouse',    'regexp' => '/Chrome-Lighthouse/u' ],
    [ 'name' => 'Google FeedBurner Bot',            'id' => 'feedburner',    'regexp' => '/FeedBurner\/([0-9.]*)/u' ],
    [ 'name' => 'Gowikibot',                        'id' => 'gowiki',        'regexp' => '/Gowikibot\/([0-9.]*)/u' ],
    [ 'name' => 'Grammarly',                        'id' => 'grammarly',     'regexp' => '/Grammarly\/([0-9.]*)/u' ],
    [ 'name' => 'Grub',                             'id' => 'grub',          'regexp' => '/grub-client-([0-9.]*)/u' ],
    [ 'name' => 'Hatena Antenna',                   'id' => 'hatena',        'regexp' => '/Hatena Antenna\/([0-9.]*)/u' ],
    [ 'name' => 'Hatena Diary',                     'id' => 'hatena',        'regexp' => '/Hatena Diary RSS Module/u' ],
    [ 'name' => 'Hatena Pagetitle',                 'id' => 'hatena',        'regexp' => '/Hatena Pagetitle Agent\/([0-9.]*)/u' ],
    [ 'name' => 'HeartRails Capture',               'id' => 'capture',       'regexp' => '/HeartRails_Capture\/([0-9.]*)/u' ],
    [ 'name' => 'Heureka Feed',                     'id' => 'heureka',       'regexp' => '/Heurekabot-Feed/u' ],
    [ 'name' => 'HootSuite',                        'id' => 'hootsuite',     'regexp' => '/Hootsuite-WebFeed\/([0-9\.]*)/u' ],
    [ 'name' => 'HootSuite',                        'id' => 'hootsuite',     'regexp' => '/HootSuite Image proxy/u' ],
    [ 'name' => 'htdig',                            'id' => 'htdig',         'regexp' => '/htdig\/([0-9.]*)/u' ],
    [ 'name' => 'HTTPMon',                          'id' => 'httpmon',       'regexp' => '/HTTPMon\/([0-9.]*)/u' ],
    [ 'name' => 'HubPages',                         'id' => 'hubpages',      'regexp' => '/HubPages V([0-9.]*)/u' ],
    [ 'name' => 'HubSpot Crawler',                  'id' => 'hubspot',       'regexp' => '/hubspot\.com/u' ],
    [ 'name' => 'iAsk Spider',                      'id' => 'spider',        'regexp' => '/iaskspider\/([0-9.]*)/u' ],
    [ 'name' => 'iAsk Spider',                      'id' => 'spider',        'regexp' => '/iaskspider2/u' ],
    [ 'name' => 'Ichiro',                           'id' => 'ichiro',        'regexp' => '/ichiro\/([0-9.]*)/u' ],
    [ 'name' => 'IndeedBot',                        'id' => 'indeed',        'regexp' => '/IndeedBot ([0-9.]*)/u' ],
    [ 'name' => 'Internet Archive',                 'id' => 'archive',       'regexp' => '/InternetArchive\/([0-9.]*)/u' ],
    [ 'name' => 'Iodc',                             'id' => 'iodc',          'regexp' => '/iodc\.co\.uk/u' ],
    [ 'name' => 'Istellabot',                       'id' => 'istellabot',    'regexp' => '/istellabot\/t\.([0-9.]*)/u' ],
    [ 'name' => 'JamesBOT',                         'id' => 'crawler',       'regexp' => '/James BOT - WebCrawler/u' ],
    [ 'name' => 'Jayde',                            'id' => 'crawler',       'regexp' => '/Jayde Crawler./u' ],
    [ 'name' => 'KakaoTalk Bot',                    'id' => 'kakao',         'regexp' => '/kakaotalk-scrap\/([0-9.]*)/u' ],
    [ 'name' => 'Kouio',                            'id' => 'kouio',         'regexp' => '/kouio.com/u' ],
    [ 'name' => 'Larbin',                           'id' => 'larbin',        'regexp' => '/[Ll]arbin[\/_]([0-9.]*)/u' ],
    [ 'name' => 'Line Bot',                         'id' => 'line',          'regexp' => '/Linespider\/([0-9.]*)/u' ],
    [ 'name' => 'Linkedin Bot',                     'id' => 'linkedin',      'regexp' => '/LinkedInBot\/([0-9.]*)/u' ],
    [ 'name' => 'Linkpad Bot',                      'id' => 'linkpad',       'regexp' => '/LinkpadBot\/([0-9.]*)/u' ],
    [ 'name' => 'LetsearchBot',                     'id' => 'letsearch',     'regexp' => '/LetsearchBot\/([0-9.]*)/u' ],
    [ 'name' => 'Linkdex Bot',                      'id' => 'linkdex',       'regexp' => '/linkdexbot-mobile\/([0-9.]*)/u' ],
    [ 'name' => 'Linkdex Bot',                      'id' => 'linkdex',       'regexp' => '/linkdex.com\/v([0-9.]*)/u' ],
    [ 'name' => 'Livedoor',                         'id' => 'livedoor',      'regexp' => '/livedoor/u' ],
    [ 'name' => 'LookSeek',                         'id' => 'seeker',        'regexp' => '/Seeker v\.([0-9.]*)/u' ],  
    [ 'name' => 'LTX71',                            'id' => 'ltx71',         'regexp' => '/ltx71/u' ],
    [ 'name' => 'Magpie RSS',                       'id' => 'magpie',        'regexp' => '/MagpieRSS\/([0-9.]*)/u' ],
    [ 'name' => 'Mapian News Bot',                  'id' => 'mapion',        'regexp' => '/mapion-news-bot\/([0-9.]*)/u' ],
    [ 'name' => 'Medium Bot',                       'id' => 'medium',        'regexp' => '/Mediumbot-MetaTagFetcher\/([0-9.]*)/u' ],
    [ 'name' => 'Medium Bot',                       'id' => 'medium',        'regexp' => '/Mediumbot-ProxyFetcher\/([0-9.]*)/u' ],
    [ 'name' => 'Mega Index Bot',                   'id' => 'megaindex',     'regexp' => '/MegaIndex\.ru\/([0-9.]*)/u' ],
    [ 'name' => 'Microsoft Social Streams',         'id' => 'socialstreams', 'regexp' => '/Microsoft MSN SocialStreams Bot/u' ],
    [ 'name' => 'Minds',                            'id' => 'minds',         'regexp' => '/MindsMediaProxy\/([0-9\.]*)/u' ],
    [ 'name' => 'Mixi',                             'id' => 'mixi',          'regexp' => '/mixi-check\/([0-9.]*)/u' ],
    [ 'name' => 'MnoGoSearch',                      'id' => 'mnogo',         'regexp' => '/MnoGoSearch\/([0-9.]*)/u' ],
    [ 'name' => 'MojeekBot',                        'id' => 'mojeek',        'regexp' => '/MojeekBot\/([0-9.]*)/u' ],
    [ 'name' => 'Monitor.us',                       'id' => 'monitor',       'regexp' => '/monitor.us/u' ],
    [ 'name' => 'Moz',                              'id' => 'dotbot',        'regexp' => '/DotBot\/([0-9.]*)/i' ],
    [ 'name' => 'Moz',                              'id' => 'rogerbot',      'regexp' => '/rogerbot\/([0-9.]*)/i' ],
    [ 'name' => 'MxToolbox',                        'id' => 'mxtoolbox',     'regexp' => '/MxToolbox\/([a-zA-Z0-9.]*)/u' ],
    [ 'name' => 'Naver Yeti',                       'id' => 'yeti',          'regexp' => '/Yeti\/([0-9.]*)/u' ],
    [ 'name' => 'Netcraft Survey Agent Bot',        'id' => 'netcraft',      'regexp' => '/NetcraftSurveyAgent\/([0-9.]*)/u' ],
    [ 'name' => 'Netcraft Web Server Survey Bot',   'id' => 'netcraft',      'regexp' => '/Netcraft Web Server Survey/u' ],
    [ 'name' => 'Netcraft SSL Server Survey Bot',   'id' => 'netcraft',      'regexp' => '/Netcraft SSL Server Survey/u' ],
    [ 'name' => 'Netcraft Bot',                     'id' => 'netcraft',      'regexp' => '/Netcraft/iu' ],
    [ 'name' => 'Netvibes',                         'id' => 'netvibes',      'regexp' => '/Netvibes/u' ],
    [ 'name' => 'NewsBlur',                         'id' => 'newsblur',      'regexp' => '/NewsBlur Favicon Fetcher/u' ],
    [ 'name' => 'NewsBlur',                         'id' => 'newsblur',      'regexp' => '/NewsBlur Feed Fetcher/u' ],
    [ 'name' => 'NewsBlur',                         'id' => 'newsblur',      'regexp' => '/NewsBlur Feed Finder/u' ],
    [ 'name' => 'NewsBlur',                         'id' => 'newsblur',      'regexp' => '/NewsBlur Page Fetcher/u' ],
    [ 'name' => 'netEstate NE Crawler',             'id' => 'netestate',     'regexp' => '/netEstate NE Crawler/u' ],
    [ 'name' => 'NewsGator',                        'id' => 'newsgator',     'regexp' => '/NewsGator\/([0-9.]*)/u' ],
    [ 'name' => 'NewsGator',                        'id' => 'newsgator',     'regexp' => '/NewsGatorOnline\/([0-9.]*)/u' ],
    [ 'name' => 'NewsGator FetchLinks',             'id' => 'newsgator',     'regexp' => '/NewsGator FetchLinks extension\/([0-9.]*)/u' ],
    [ 'name' => 'Nimbostratus',                     'id' => 'nimbostratus',  'regexp' => '/Nimbostratus-Bot\/v([0-9.]*)/u' ],
    [ 'name' => 'OdklBot',                          'id' => 'odklbot',       'regexp' => '/OdklBot\/([0-9.]*)/u' ],
    [ 'name' => 'OpenWebSpider',                    'id' => 'spider',        'regexp' => '/OpenWebSpider v([0-9.]*)/u' ],
    [ 'name' => 'OrangeBot',                        'id' => 'orange',        'regexp' => '/OrangeBot-Collector\/([0-9.]*)/u' ],
    [ 'name' => 'OrangeBot',                        'id' => 'orange',        'regexp' => '/OrangeBot-Mobile/u' ],
    [ 'name' => 'PagesInventory',                   'id' => 'pages',         'regexp' => '/PagesInventory/u' ],
    [ 'name' => 'Plurk Bot',                        'id' => 'plurk',         'regexp' => '/PlurkBot\/([0-9\.]*)/u' ],
    [ 'name' => 'Picsearch Bot',                    'id' => 'psbot',         'regexp' => '/psbot\/([0-9.]*)/u' ],
    [ 'name' => 'Picsearch Bot',                    'id' => 'psbot',         'regexp' => '/psbot-page/u' ],
    [ 'name' => 'Picsearch Bot',                    'id' => 'psbot',         'regexp' => '/psbot-image/u' ],
    [ 'name' => 'Pingdom',                          'id' => 'pingdom',       'regexp' => '/Pingdom.com_bot_version_([0-9.]*)/u' ],
    [ 'name' => 'Pinterest Bot',                    'id' => 'pinterest',     'regexp' => '/Pinterestbot\/([0-9.]*)/u' ],
    [ 'name' => 'Pinterest Bot',                    'id' => 'pinterest',     'regexp' => '/Pinterest\/([0-9.]+)/u' ],
    [ 'name' => 'Pocket',                           'id' => 'pocket',        'regexp' => '/PocketImageCache\/([0-9.]+)/u' ],
    [ 'name' => 'Pocket',                           'id' => 'pocket',        'regexp' => '/PocketParser\/([0-9.]+)/u' ],
    [ 'name' => 'PostRank',                         'id' => 'postrank',      'regexp' => '/PostRank\/([0-9.]*)/u' ],
    [ 'name' => 'PowerMapper',                      'id' => 'crawler',       'regexp' => '/CrawlerProcess \(http:\/\/www\.PowerMapper\.com\) \/([0-9.]*)/u' ],
    [ 'name' => 'Radian 6',                         'id' => 'feed',          'regexp' => '/R6_FeedFetcher/u' ],
    [ 'name' => 'Radian 6',                         'id' => 'comment',       'regexp' => '/R6_CommentReader/u' ],
    [ 'name' => 'RssBar',                           'id' => 'rssbar',        'regexp' => '/RssBar\/([0-9.]*)/u' ],
    [ 'name' => 'Reddit Bot',                       'id' => 'reddit',        'regexp' => '/redditbot\/([0-9.]*)/u' ],
    [ 'name' => 'ROI Hunter',                       'id' => 'hunter',        'regexp' => '/ROI Hunter/u' ],
    [ 'name' => 'QuerySeekerSpider',                'id' => 'spider',        'regexp' => '/QuerySeekerSpider(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Quora Link Preview',               'id' => 'quora',         'regexp' => '/Quora Link Preview\/([0-9.]*)/u' ],
    [ 'name' => 'SafeSearch Microdata',             'id' => 'safesearch',    'regexp' => '/SafeSearch microdata crawler/u' ],
    [ 'name' => 'Scrapy',                           'id' => 'scrapy',        'regexp' => '/Scrapy\/([0-9.]*)/u' ],
    [ 'name' => 'ScreenerBot',                      'id' => 'crawler',       'regexp' => '/ScreenerBot Crawler Beta ([0-9.]*)/u' ],
    [ 'name' => 'Search Atlas Bot',                 'id' => 'searchatlas',   'regexp' => '/SearchAtlas/iu' ],
    [ 'name' => 'Semrush',                          'id' => 'semrush',       'regexp' => '/SemrushBot\/([0-9.]*)/u' ],
    [ 'name' => 'Seekport Crawler',                 'id' => 'seekport',      'regexp' => '/Seekport Crawler/u' ],
    [ 'name' => 'SEOkicks Bot',                     'id' => 'seokicks',      'regexp' => '/SEOkicks/u' ],
    [ 'name' => 'Serp Stat',                        'id' => 'serpstat',      'regexp' => '/serpstatbot\/([0-9.]*)/u' ],
    [ 'name' => 'Server Density',                   'id' => 'monitor',       'regexp' => '/Server Density Service Monitoring/u' ],
    [ 'name' => 'ShopWiki',                         'id' => 'shopwiki',      'regexp' => '/ShopWiki\/([0-9.]*)/u' ],
    [ 'name' => 'SkypeUriPreview',                  'id' => 'skype',         'regexp' => '/SkypeUriPreview Preview\/([0-9.]*)/u' ],
    [ 'name' => 'SilverReader',                     'id' => 'reader',        'regexp' => '/SilverReader\/([0-9.]*)/u' ],
    [ 'name' => 'SimplePie',                        'id' => 'simplepie',     'regexp' => '/SimplePie\/([0-9.]*)/u' ],
    [ 'name' => 'Site24x7',                         'id' => 'site24',        'regexp' => '/Site24x7/u' ],
    [ 'name' => 'Slackbot Link Checker',            'id' => 'slack',         'regexp' => '/Slackbot-LinkExpanding ([0-9.]*)/u' ],
    [ 'name' => 'Sophora Linkchecker',              'id' => 'sophora',       'regexp' => '/Sophora Linkchecker/u' ],
    [ 'name' => 'Soso Web Spider',                  'id' => 'soso',          'regexp' => '/Sosospider\/([0-9.]*)/u' ],
    [ 'name' => 'Soso Web Spider',                  'id' => 'soso',          'regexp' => '/Sosospider/u' ],
    [ 'name' => 'Soso Image Spider',                'id' => 'soso',          'regexp' => '/Sosoimagespider/u' ],
    [ 'name' => 'SpazioDati',                       'id' => 'spaziodati',    'regexp' => '/spaziodati/u' ],
    [ 'name' => 'SPDYCheck',                        'id' => 'spdycheck',     'regexp' => '/SPDYCheck SPDY Protocol Tester/iu' ],
    [ 'name' => 'Spinn3r',                          'id' => 'spinn',         'regexp' => '/Spinn3r ([0-9.]*)/iu' ],
    [ 'name' => 'Spiderlytics',                     'id' => 'spider',        'regexp' => '/Spiderlytics\/([0-9.]*)/iu' ],
    [ 'name' => 'Sputnik Favicon Bot',              'id' => 'sputnik',       'regexp' => '/SputnikFaviconBot\/([0-9.]*)/iu' ],
    [ 'name' => 'Sputnik Image Bot',                'id' => 'sputnik',       'regexp' => '/SputnikImageBot\/([0-9.]*)/iu' ],
    [ 'name' => 'Sputnik Bot',                      'id' => 'sputnik',       'regexp' => '/SputnikBot\/([0-9.]*)/iu' ],
    [ 'name' => 'StatusCake Error Detector',        'id' => 'detector',      'regexp' => '/StatusCake Error Detector/iu' ],
    [ 'name' => 'Summify',                          'id' => 'summify',       'regexp' => '/Summify\/([0-9.]*)/u' ],
    [ 'name' => 'Tumblr',                           'id' => 'tumblr',        'regexp' => '/Tumblr\/([0-9.]*)/u' ],
    [ 'name' => 'TelegramBot',                      'id' => 'telegram',      'regexp' => '/TelegramBot/u' ],
    [ 'name' => 'Twisted PageGetter',               'id' => 'twisted',       'regexp' => '/Twisted PageGetter/u' ],
    [ 'name' => 'Twitterbot',                       'id' => 'twitter',       'regexp' => '/Twitterbot\/([0-9.]*)/u' ],
    [ 'name' => 'TinEye Bot',                       'id' => 'tineye',        'regexp' => '/TinEye\/([0-9.]*)/u' ],
    [ 'name' => 'TinEye Bot',                       'id' => 'tineye',        'regexp' => '/TinEye-bot\/([0-9.]*)/u' ],
    [ 'name' => 'Tiny Tiny RSS',                    'id' => 'tiny',          'regexp' => '/Tiny Tiny RSS\/([0-9.]*)/u' ],
    [ 'name' => 'TLSProber',                        'id' => 'tlsprober',     'regexp' => '/TLSProber\/([0-9.]*)/u' ],
    [ 'name' => 'TrustedSite',                      'id' => 'trustedsite',   'regexp' => '/TrustedSite/u' ],
    [ 'name' => 'Typhoeus',                         'id' => 'typhoeus',      'regexp' => '/Typhoeus/u' ],
    [ 'name' => 'Vagabondo',                        'id' => 'vagabondo',     'regexp' => '/Vagabondo\/([0-9.]*)/u' ],
    [ 'name' => 'vkShare',                          'id' => 'vkshare',       'regexp' => '/vkShare/u' ],
    [ 'name' => 'VelenPublicWebCrawler',            'id' => 'velen',         'regexp' => '/VelenPublicWebCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Voat',                             'id' => 'voat',          'regexp' => '/Voat\.co OpenGraph Parser/u' ],
    [ 'name' => 'Voilabot',                         'id' => 'voila',         'regexp' => '/Voila[Bb]ot/u' ],
    [ 'name' => 'VocusBot',                         'id' => 'vocus',         'regexp' => '/VocusBot ([0-9.]*)/u' ],
    [ 'name' => 'Vodafone mCrawler',                'id' => 'mcrawler',      'regexp' => '/Vodafone mCrawler/u' ],
    [ 'name' => 'W3Bot',                            'id' => 'w3bot',         'regexp' => '/W3Bot ([0-9.]*)/u' ],
    [ 'name' => 'VuhuvBot',                         'id' => 'vuhuv',         'regexp' => '/vuhuvBot\/([0-9.]*)/u' ],
    [ 'name' => 'W3C CSS Validator',                'id' => 'jigsaw',        'regexp' => '/Jigsaw\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Internationalization Checker', 'id' => 'w3c',           'regexp' => '/W3C_I18n-Checker\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Line Mode',                    'id' => 'w3c',           'regexp' => '/W3CLineMode\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Link Checker',                 'id' => 'w3c',           'regexp' => '/W3C-checklink\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Markup Validator',             'id' => 'w3c',           'regexp' => '/W3C_Validator\/([0-9.]*)/u' ],
    [ 'name' => 'W3C MobileOK Checker',             'id' => 'w3c',           'regexp' => '/W3C-mobileOK\/DDC-([0-9.]*)/u' ],
    [ 'name' => 'W3C Multipage Validator',          'id' => 'w3c',           'regexp' => '/W3C_Multipage_Validator\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Robot',                        'id' => 'w3c',           'regexp' => '/W3CRobot\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Unified Validator',            'id' => 'w3c',           'regexp' => '/W3C_Unicorn\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Validator.nu',                 'id' => 'validator',     'regexp' => '/Validator.nu\//u' ],
    [ 'name' => 'Wappalyzer',                       'id' => 'wappalyzer',    'regexp' => '/Wappalyzer/u' ], 
    [ 'name' => 'Wayback Archive',                  'id' => 'wayback',       'regexp' => '/waybackarchive.org\/([0-9.]*)/u' ],
    [ 'name' => 'WebbCrawler',                      'id' => 'crawler',       'regexp' => '/WebbCrawler ([0-9.]*)/u' ],
    [ 'name' => 'WebIndexer',                       'id' => 'webindexer',    'regexp' => '/WebIndexer\//u' ],
    [ 'name' => 'WordPress',                        'id' => 'wordpress',     'regexp' => '/WordPress\/([0-9.]*)/u' ],
    [ 'name' => 'WordPress.com',                    'id' => 'wordpress',     'regexp' => '/WordPress\.com; http/u' ],
    [ 'name' => 'WordPress Jetpack',                'id' => 'wordpress',     'regexp' => '/Jetpack by WordPress\.com/u' ],
    [ 'name' => 'WWW Mechanize',                    'id' => 'mechanize',     'regexp' => '/WWW-Mechanize\/([0-9.]*)/u' ],
    [ 'name' => 'Xenu Link Sleuth',                 'id' => 'xenu',          'regexp' => '/Xenu Link Sleuth\/([0-9.]*)/u' ],
    [ 'name' => 'Xerka WebBot',                     'id' => 'xerka',         'regexp' => '/Xerka WebBot v([0-9.]*)/u' ],
    [ 'name' => 'XML Sitemaps Generator',           'id' => 'sitemap',       'regexp' => '/XML-Sitemaps\/([0-9.]*)/u' ],
    [ 'name' => 'XMLSitemapGenerator',              'id' => 'sitemap',       'regexp' => '/XmlSitemapGenerator/u' ],
    [ 'name' => 'YaCy Bot',                         'id' => 'yacy',          'regexp' => '/yacy(?:\/|\s|bot)/u' ],

    [ 'name' => 'Inktomi Slurp',                    'id' => 'slurp',         'regexp' => '/slurp\@inktomi/u' ],
    [ 'name' => 'Inktomi Slurp',                    'id' => 'slurp',         'regexp' => '/Slurp\.so\/([0-9.]*)/iu' ], // ua tests show upper and lower case
    
    [ 'name' => 'Yelp Spider',                      'id' => 'yelp',          'regexp' => '/yelpspider\-([0-9.]*)/u' ],
    [ 'name' => 'Yioop Bot',                        'id' => 'yioop',         'regexp' => '/YioopBot/u' ],
    [ 'name' => 'Yisou Spider',                     'id' => 'shenma',        'regexp' => '/YisouSpider\/?([0-9.]*)/u' ],
    [ 'name' => 'ZmEu',                             'id' => 'zmeu',          'regexp' => '/ZmEu/u' ],

    /* Generic bots */
    [ 'name' => 'Apache Httpd',                     'id' => 'httpclient',    'regexp' => '/Apache-HttpClient(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Apache Jakarta',                   'id' => 'httpclient',    'regexp' => '/Jakarta Commons-HttpClient(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Apache Nutch',                     'id' => 'nutch',         'regexp' => '/\/Nutch-([0-9.]*)/u' ],
    [ 'name' => 'Apache Nutch',                     'id' => 'nutch',         'regexp' => '/Nutch(?:CVS|Org)\/([0-9.]*)/u' ],
    [ 'name' => 'Apache Synapse',                   'id' => 'synapse',       'regexp' => '/compatible; Synapse/u' ],
    [ 'name' => 'Borland Delphi',                   'id' => 'indy',          'regexp' => '/Indy Library/u' ],
    [ 'name' => 'Wget',                             'id' => 'wget',          'regexp' => '/Wget\/([0-9.]*)/u' ],
    [ 'name' => 'Curl',                             'id' => 'curl',          'regexp' => '/^curl\/([0-9.]*)/u' ],

    [ 'name' => 'Go',                               'id' => 'package',       'regexp' => '/Go [0-9\.]+ package http/u' ],
    [ 'name' => 'Go Http Client',                   'id' => 'gohttpclient',  'regexp' => '/Go-http-client\/([0-9.]*)/u' ],
    [ 'name' => 'Go Http Client',                   'id' => 'gohttpclient',  'regexp' => '/go-httpclient v([0-9.]*)/u' ],
    [ 'name' => 'HttpUnit',                         'id' => 'httpunit',      'regexp' => '/httpunit\/([0-9.]*)/u' ],
    [ 'name' => 'Java',                             'id' => 'java',          'regexp' => '/^Java\/([0-9.]*)/u' ],
    [ 'name' => 'Node Fetch',                       'id' => 'nodefetch',     'regexp' => '/node-fetch\/([0-9.]*)/u' ],
    [ 'name' => 'OkHttp',                           'id' => 'okhttp',        'regexp' => '/okhttp\/([0-9.]*)/u' ],
    [ 'name' => 'Perl',                             'id' => 'simple',        'regexp' => '/LWP::Simple\//u' ],
    [ 'name' => 'Perl',                             'id' => 'libwww',        'regexp' => '/libwww-perl\//u' ],
    [ 'name' => 'Perl',                             'id' => 'lwp',           'regexp' => '/lwp-trivial\//u' ],
    [ 'name' => 'Python',                           'id' => 'urllib',        'regexp' => '/Python-urllib\/([0-9.]*)/u' ],
    [ 'name' => 'Python',                           'id' => 'requests',      'regexp' => '/python-requests\/([0-9.]*)/u' ],
    [ 'name' => 'PHP',                              'id' => 'php',           'regexp' => '/ PHP\/([0-9.]*)/u' ],
    [ 'name' => 'PHP',                              'id' => 'php',           'regexp' => '/^PHP/u' ],
    [ 'name' => 'PHP',                              'id' => 'pear',          'regexp' => '/PEAR HTTP_Request class/u' ],
    [ 'name' => 'PHP',                              'id' => 'php',           'regexp' => '/CakePHP/u' ],
    [ 'name' => 'PHP',                              'id' => 'zend',          'regexp' => '/Zend_Http_Client/u' ],
    [ 'name' => 'Ruby',                             'id' => 'ruby',          'regexp' => '/^Ruby/u' ],
];
