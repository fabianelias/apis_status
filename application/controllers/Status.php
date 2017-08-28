<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	public function index(){

    $data['title'] = 'Status | monitor de aplicaciones';

    $data['usados_prod'] = $this->getStatus('https://usados.autobook.cl/');
    $data['usados_dev']  = $this->getStatus('http://usados-dev.autobook.cl/');

    $data['nuevos_prod'] = $this->getStatus('https://nuevos.autobook.cl/');
    $data['nuevos_dev']  = $this->getStatus('http://nuevos-dev.autobook.cl/');

    $data['subasta_prod'] = $this->getStatus('http://ec2-52-67-245-178.sa-east-1.compute.amazonaws.com/api-subastas-prod/index.php/');
    $data['subasta_dev']  = $this->getStatus('http://subasta-dev.autobook.cl/');

    $this->load->view('includes/head_view',$data);
    $this->load->view('includes/nav_view');
    $this->load->view('status/status_view',$data);
	}

  function getStatus($url='', $env=''){
    //Url
    $endpoint = $url ."api/status";

    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    $res = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($res,true);

    return $response;

  }
}
