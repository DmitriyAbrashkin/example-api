<?php

namespace App\Modules;

use App\Modules\News;
use App\Modules\DetalNews;
use DiDom\Document;


class NewsParser
{
    public $pageNumber;
    public $news;
    private $host = "https://kuzstu.ru";

    public function getNews($number)
    {
        $this->pageNumber = $number;
        $this->news = array();


        $newsItems = $this->getDocumentPreviewNewsList()->find(".news-item");

        foreach ($newsItems as $key => $value) {
            $newsItem = new News();
            $newsItem->name = $value->find(".news-name a b")[0]->text();
            $newsItem->href = $this->host . $value->find(".news-name a")[0]->getAttribute('href');
            $newsItem->date = trim($value->find(".news-date-time")[0]->text());
            $newsItem->previewText = $value->find(".news-preview-text")[0]->text();
            $newsItem->previewPicture = $this->host . $this->findPicture($value, ".preview_picture");
            $newsItem->size = $this->getImageSizeCustom($newsItem->previewPicture);
            $this->news[] = $newsItem;
        }
    }

    public function getImageSizeCustom($url)
    {
        list($height, $width) = getimagesize($url);
        return array($height, $width);
    }


    public function findPicture(\DiDom\Element  $value, $selector)
    {
        $isHasPreviewPicture = $value->find($selector);
        if ($isHasPreviewPicture) {
            return  $isHasPreviewPicture[0]->getAttribute('src');
        } else {
            return "";
        }
    }



    public function getDetalNews($request)
    {
        $link = (string)trim($request->url);
        $newsItem = $this->getDocumentDetalNewsList($link);
        $detalNews = new DetalNews();
        $detalNews->newsText = preg_replace('|\s+|', ' ', trim($newsItem->find(".news-text")[0]->text()));
        $detalNews->detailPicture = $this->host .  $this->findPicture($newsItem->toElement(), ".detail_picture");
        $this->news = $detalNews;
    }



    public function getDocumentPreviewNewsList()
    {
        $site_name = $this->host . "/news/?PAGEN_1=" . $this->pageNumber;
        $document = new Document($site_name, true);
        return $document;
    }

    public function getDocumentDetalNewsList($href)
    {
        $document = new Document($href, true);
        return $document;
    }
}
