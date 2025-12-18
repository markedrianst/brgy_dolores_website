<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Get images from folder - FIXED PATH
        $galleryPath = FCPATH . 'assets/gallery/'; // Added 'public/' to path
        
        // Alternative if you want to check if folder exists in public directory
        // $galleryPath = ROOTPATH . 'public/assets/gallery/';
        
        $images = [];
        
        // Check if directory exists
        if (is_dir($galleryPath)) {
            $files = scandir($galleryPath);
            
            foreach ($files as $file) {
                // Filter only image files
                if (!in_array($file, ['.', '..'])) {
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                        $images[] = [
                            'filename' => $file,
                            'path' => base_url('assets/gallery/' . $file), // This is correct
                            'caption' => $this->getImageCaption($file) // Added caption
                        ];
                    }
                }
            }
        }
        
        // Only shuffle and limit if we have images
        if (!empty($images)) {
            shuffle($images);
            $images = array_slice($images, 0, 5); // Show only 5 images
        }
        
        $data['gallery_images'] = $images;
        
        // Debugging - uncomment if images aren't showing
        // echo '<pre>';
        // print_r($data['gallery_images']);
        // echo '</pre>';
        // die();
        
        return view('pages/index', $data);
    }

    // Optional: Function to create captions from filenames
    private function getImageCaption($filename)
    {
        // Remove extension and replace underscores/dashes with spaces
        $name = pathinfo($filename, PATHINFO_FILENAME);
        $caption = str_replace(['_', '-'], ' ', $name);
        return ucwords($caption);
    }

    public function about()
    {
        return view('pages/about');
    }

    public function services()
    {
        return view('pages/services');
    }
}