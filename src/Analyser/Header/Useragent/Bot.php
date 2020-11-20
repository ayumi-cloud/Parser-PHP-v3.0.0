<?php

namespace WhichBrowser\Analyser\Header\Useragent;

use WhichBrowser\Constants;
use WhichBrowser\Data;
use WhichBrowser\Model\Version;
use WhichBrowser\SearchEngines\Seznam;
use WhichBrowser\SearchEngines\Facebook;
use WhichBrowser\SearchEngines\Mailru;
use WhichBrowser\SearchEngines\Google;
use WhichBrowser\SearchEngines\Bing;
use WhichBrowser\SearchEngines\Yahoo;

trait Bot
{
    private function &detectBot($ua)
    {
        /* Detect bots based on url in the UA string */

        if (preg_match('/\+https?:\/\//iu', $ua)) {
            $this->data->browser->reset();
            $this->data->os->reset();
            $this->data->engine->reset();
            $this->data->device->reset();

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect bots based on common markers */

        if (preg_match('/(?:Bot|Robot|Spider|Crawler)([\/\);]|$)/iu', $ua) && !preg_match('/CUBOT/iu', $ua)) {
            $this->data->browser->reset();
            $this->data->os->reset();
            $this->data->engine->reset();
            $this->data->device->reset();

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect fake naver bot */

        if (preg_match('/NaverBot/iu', $ua, $match)) {
            $this->data->browser->reset();
            $this->data->device->reset();

            $this->data->browser->name = 'Fake Naver Bot';

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect bots based on HttpUnit */
        
        if (preg_match('/httpunit\/([0-9.]*)/iu', $ua, $result)) {
            $this->data->browser->reset();
            $this->data->os->reset();
            $this->data->engine->reset();
            $this->data->device->reset();
            
            $this->data->browser->name = 'HttpUnit';
            $this->data->browser->version = $result[1] ?? '';
            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect Go Http Client */

        if (preg_match('/Go-http-client\/([0-9.]*)/iu', $ua, $match)) {
            $this->data->browser->reset();
            $this->data->device->reset();

            $this->data->browser->name = 'Go Http Client';
            $this->data->browser->version = new Version([ 'value' => $match[1] ]);

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect Evc-batch */

        if (preg_match('/evc-batch\/([0-9.]*)/u', $ua, $match)) {
            $this->data->browser->reset();
            $this->data->device->reset();

            $this->data->browser->name = 'Evc-batch';
            $this->data->browser->version = new Version([ 'value' => $match[1] ]);

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect British Library */

        if (preg_match('/uk_lddc_bot\/([0-9.]*)/u', $ua, $match)) {
            $this->data->browser->reset();
            $this->data->device->reset();

            $this->data->browser->name = 'British Library';
            $this->data->browser->version = new Version([ 'value' => $match[1] ]);

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect based on a predefined list or markers */

        if ($bot = Data\Applications::identifyBot($ua)) {
            $this->data->browser = $bot;
            $this->data->os->reset();
            $this->data->engine->reset();
            $this->data->device->reset();

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect petal and aspiegel bots */

        if (preg_match('/(PetalBot|Aspiegel)/iu', $ua, $match)) {
            $this->data->browser->reset();
            $this->data->device->reset();

            $this->data->browser->name = 'Petal Bot';

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect Seznam search engine bots */

        if (preg_match('/Seznam|HomePage/iu', $ua, $match)) {
            $Seznam = new Seznam($ua);
            
            // Only run if the class found a regex match
            if ($Seznam->found == true) {
                $this->data->browser->name = $Seznam->name ?? '';
                $this->data->browser->version = $Seznam->version ?? '';
                $this->data->device->type = $Seznam->bot ?? '';
            }
        }

        /* Detect majestic mj12 bot detection */

        if (preg_match('/mj12bot/iu', $ua, $match)) {
            $this->data->browser->reset();
            $this->data->device->reset();

            $this->data->browser->name = 'Majestic MJ12 Bot';

            if (preg_match('/MJ12bot\/v([0-9.]*)/u', $ua, $match)) {
                $this->data->browser->version = new Version([ 'value' => $match[1] ]);
            }

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        /* Detect facebook bots */

        if (preg_match('/(facebook|cortex|adreview)/iu', $ua, $match)) {
            $Facebook = new Facebook($ua);

            // Only run if the class found a regex match
            if ($Facebook->found == true) {
                $this->data->browser->name = $Facebook->name ?? '';
                $this->data->browser->version = $Facebook->version ?? '';
                $this->data->device->type = $Facebook->bot ?? '';
            }
        }

        /* Detect mail.ru search engine bots */

        if (preg_match('/mail\.ru/u', $ua, $match)) {
            $Mailru = new Mailru($ua);

            // Only run if the class found a regex match
            if ($Mailru->found == true) {
                $this->data->browser->name = $Mailru->name ?? '';
                $this->data->browser->version = $Mailru->version ?? '';
                $this->data->device->type = $Mailru->bot ?? '';
            }
        }

        /* Detect google search engine bots */

        if (preg_match('/google/iu', $ua, $match)) {
            $Google = new Google($ua);

            // Only run if the class found a regex match
            if ($Google->found == true) {
                $this->data->browser->name = $Google->name ?? '';
                $this->data->browser->version = $Google->version ?? '';
                $this->data->device->type = $Google->bot ?? '';
            }
        }

        /* Detect bing search engine bots */

        if (preg_match('/(bing|msnbot)/iu', $ua, $match)) {
            $Bing = new Bing($ua);

            // Only run if the class found a regex match
            if ($Bing->found == true) {
                $this->data->browser->name = $Bing->name ?? '';
                $this->data->browser->version = $Bing->version ?? '';
                $this->data->device->type = $Bing->bot ?? '';
            }
        }

        /* Detect yahoo search engine bots */

        if (preg_match('/(yahoo|Y\!J)/iu', $ua, $match)) {
            $Yahoo = new Yahoo($ua);

            // Only run if the class found a regex match
            if ($Yahoo->found == true) {
                $this->data->browser->name = $Yahoo->name ?? '';
                $this->data->browser->version = $Yahoo->version ?? '';
                $this->data->device->type = $Yahoo->bot ?? '';
            }
        }

        return $this;
    }
}
