<?php

namespace App\Controllers;

class ServiceController extends BaseController
{
    public function form($service = null)
    {
        $services = [
            'id-online' => 'pages/services/id_request_form', // make sure folder is correct
            'id-personal' => 'pages/services/id_personal',
            'business-clearance-online' => 'pages/services/business_clearance_form',
            'business-clearance-personal' => 'pages/services/business_clearance_personal',
            'indigency-online' => 'pages/services/indigency_form',
            'indigency-personal' => 'pages/services/indigency_personal',
            'residency-online' => 'pages/services/residency_form',
            'residency-personal' => 'pages/services/residency_personal',
            'certification-online' => 'pages/services/certification_form',
            'certification-personal' => 'pages/services/certification_personal',
        ];

        if (!isset($services[$service])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view($services[$service]);
    }
}

