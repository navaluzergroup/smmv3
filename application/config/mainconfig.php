<?php
/**
 * Navaluzer Group - NavPedia SMM
 *
 * @package SMM - Penajam Mediia
 * @category Configuration Center
 * @author Navaluzer Group <contact@nav-pedia.co.id>
 * @version V1.0
 * @copyright Navaluzer Group Inc.
 *
 *
 *
  */

/*
| ------------------------------------
| Set namespace name file
| ------------------------------------
| Mengatur nama namespace
*/
namespace App\config;

/*
| ------------------------------------
| Call The Data Required 
| ------------------------------------
| Data yang terdapat di folder config
*/
use App\config\dbmainconfig;

class Connection
{
    function __construct()
    {

        
        /* 
        | Set the class required 
        */
        $this->db_default   = new dbmainconfig;

        /*
        | Set Database Account  
        */
        $db_default     = $this->db_default->db;

        /* 
        | Set the connection to database
        */
        $this->conn     = new \MySQLi($db_default['host'], $db_default['username'], $db_default['password'], $db_default['database']);
        
        /* 
        | PHP >5 Validation
        */
        if (version_compare(PHP_VERSION, '5.0.0', '<') ) exit("Sorry, this version of Navaluzer must be run on PHP >5.\n");

        /* 
        | Default Time Zone
        */
        date_default_timezone_set('Asia/Jakarta');

        // Validasi URL
        //if($this->server("http_host") <> "localhost") exit("Please try agian. The URL was not Registered");
    }
    
}