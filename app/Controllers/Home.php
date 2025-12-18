<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        $galleryPath = ROOTPATH . 'public/assets/gallery/'; 
        
        $images = [];
        
        if (is_dir($galleryPath)) {
            $files = scandir($galleryPath);
            
            foreach ($files as $file) {
                if (!in_array($file, ['.', '..'])) {
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                        $images[] = [
                            'filename' => $file,
                            'path' => base_url('assets/gallery/' . $file), 
                            'caption' => $this->getImageCaption($file) 
                        ];
                    }
                }
            }
        }
        
        if (!empty($images)) {
            shuffle($images);
            $images = array_slice($images, 0, 5);
        }
        
        $data['gallery_images'] = $images;
        
        return view('pages/index', $data);
    }
    private function getImageCaption($filename)
    {
        $name = pathinfo($filename, PATHINFO_FILENAME);
        $caption = str_replace(['_', '-'], ' ', $name);
        return ucwords($caption);
    }

    public function about()
    {
        $jsonPath = WRITEPATH . 'data/community.json';
        $communityData = [];

        if (file_exists($jsonPath)) {
            $communityData = json_decode(file_get_contents($jsonPath), true);
        }

        return view('pages/about', [
            'communityData' => $communityData
        ]);
    }


    public function services()
    {
        return view('pages/services');
    }

    public function news_updates()
    {
        return view('pages/news_updates');
    }
        
    public function community()
        {
            // Load JSON file
            $jsonPath = WRITEPATH . 'data/community.json';
            $communityData = json_decode(file_get_contents($jsonPath), true);

            // Pass data to view
            return view('pages/about', ['communityData' => $communityData]);
        }

}