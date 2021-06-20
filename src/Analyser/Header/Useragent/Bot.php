<?php

namespace WhichBrowser\Analyser\Header\Useragent;

use WhichBrowser\Constants;
use WhichBrowser\Data;
use WhichBrowser\Model\Version;
use WhichBrowser\SearchEngines\Facebook;
use WhichBrowser\SearchEngines\Mailru;
use WhichBrowser\SearchEngines\Ahrefs;
use WhichBrowser\SearchEngines\Google;
use WhichBrowser\SearchEngines\Bing;
use WhichBrowser\SearchEngines\Yahoo;
use WhichBrowser\SearchEngines\Baidu;

trait Bot
{
    private function &detectBot($ua)
    {
        // Detect Async Http Client bot
        if (preg_match('/^AHC\/([0-9.]+)/ui', $ua, $match)) {
            $this->data->browser->reset();
            $this->data->device->reset();

            $this->data->browser->name = 'Async Http Client';
            $this->data->browser->version = new Version([ 'value' => $match[1] ]);

            $this->data->device->type = Constants\DeviceType::BOT;

        // Detect 80legs bots based on url in the UA string
        } elseif (preg_match('/80?legs/iu', $ua)) {
            $this->data->browser->name = '80legs';
            $this->data->os->reset();
            $this->data->engine->reset();
            $this->data->device->reset();

            $this->data->device->type = Constants\DeviceType::BOT;

        // Detect fake naver bot
        } elseif (preg_match('/NaverBot/iu', $ua, $match)) {
            $this->data->browser->reset();
            $this->data->device->reset();

            $this->data->browser->name = 'Fake Naver Bot';

            $this->data->device->type = Constants\DeviceType::BOT;

        // Detect ahrefs bots
        } elseif (preg_match('/Ahrefs/iu', $ua, $match)) {
            $Ahrefs = new Ahrefs($ua);

            // Only run if the class found a regex match
            if ($Ahrefs->found == true) {
                $this->data->browser->name = $Ahrefs->name ?? '';
                $this->data->browser->version = $Ahrefs->version ?? '';
                $this->data->device->type = $Ahrefs->bot ?? '';
            }

        // Detect google search engine bots
        } elseif (preg_match('/google/iu', $ua, $match)) {
            $Google = new Google($ua);

            // Only run if the class found a regex match
            if ($Google->found == true) {
                $this->data->browser->name = $Google->name ?? '';
                $this->data->browser->version = $Google->version ?? '';
                $this->data->device->type = $Google->bot ?? '';
            }

        // Detect bing search engine bots
        } elseif (preg_match('/(bing|msnbot)/iu', $ua, $match)) {
            $Bing = new Bing($ua);

            // Only run if the class found a regex match
            if ($Bing->found == true) {
                $this->data->browser->name = $Bing->name ?? '';
                $this->data->browser->version = $Bing->version ?? '';
                $this->data->device->type = $Bing->bot ?? '';
            }

        // Detect yahoo search engine bots
        } elseif (preg_match('/(yahoo|Y\!J)/iu', $ua, $match)) {
            $Yahoo = new Yahoo($ua);

            // Only run if the class found a regex match
            if ($Yahoo->found == true) {
                $this->data->browser->name = $Yahoo->name ?? '';
                $this->data->browser->version = $Yahoo->version ?? '';
                $this->data->device->type = $Yahoo->bot ?? '';
            }

        // Detect baidu search engine bots
        } elseif (preg_match('/Baiduspider/iu', $ua, $match)) {
            $Baidu = new Baidu($ua);

            // Only run if the class found a regex match
            if ($Baidu->found == true) {
                $this->data->browser->name = $Baidu->name ?? '';
                $this->data->browser->version = $Baidu->version ?? '';
                $this->data->device->type = $Baidu->bot ?? '';
            }

        // Detect facebook bots
        } elseif (preg_match('/(facebook|cortex|adreview)/iu', $ua, $match)) {
            $Facebook = new Facebook($ua);

            // Only run if the class found a regex match
            if ($Facebook->found == true) {
                $this->data->browser->name = $Facebook->name ?? '';
                $this->data->browser->version = $Facebook->version ?? '';
                $this->data->device->type = $Facebook->bot ?? '';
            }

        // Detect mail.ru search engine bots
        } elseif (preg_match('/mail\.ru/u', $ua, $match)) {
            $Mailru = new Mailru($ua);

            // Only run if the class found a regex match
            if ($Mailru->found == true) {
                $this->data->browser->name = $Mailru->name ?? '';
                $this->data->browser->version = $Mailru->version ?? '';
                $this->data->device->type = $Mailru->bot ?? '';
            }

        // Detect based on a predefined list or markers
        } elseif ($bot = Data\Applications::identifyBot($ua)) {
            $this->data->browser = $bot;
            $this->data->os->reset();
            $this->data->engine->reset();
            $this->data->device->reset();

            $this->data->device->type = Constants\DeviceType::BOT;
        }

        return $this;
    }
}
