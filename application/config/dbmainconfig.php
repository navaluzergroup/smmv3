<?php

/**
 * -------------------------------------
 * Database Connectivity Settings
 * -------------------------------------
 * File ini digunakan untuk mengakses basis data anda
 *
 * Untuk intruksi yang lengkap silahkan membuka dokumentasi 'Database Connection'
 * di halaman Panduan Pengguna
 *
 * -------------------------------------
 * Explanation Of Variables
 * -------------------------------------
 *      ['specified']   Database specified
 *      ['host']        Database Host , in default you can use localhost or 17.0.0.1
 *      ['username']    Database Username , in default you can use root
 *      ['Password']    Database Password , in default you can empty this
 *
 * -------------------------------------
 * Multi Database
 * -------------------------------------
 * Jika anda ingin menambahkan database lebih dari satu, anda dapat menambahkan
 * variabel baru $db['nama_database_baru_anda']
 *
 * Lalu konfigurasikan __construct pada mainconfig.php
 *
 * Untuk panduan yang lebih lengkap anda dapat membuka 'Multi Database'
 * pada panduan pengguna
  */

namespace App\config;

class dbmainconfig 
{

    public $db = [
        'dsn'	=> '',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'navpedia',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
    
    ];
    
}