<?php

namespace WhichBrowser\Analyser\Header\Useragent;

use WhichBrowser\Constants;
use WhichBrowser\Data;
use WhichBrowser\Model\Version;
use WhichBrowser\SearchEngines\Seznam;

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

        return $this;
    }
}
