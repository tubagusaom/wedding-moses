<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Konfigurasi_Model extends MY_Model
{
	protected $_table = 'r_konfigurasi_aplikasi';

	protected $table_label = 'Application Configuration';

	protected $_columns = array(
		'nama_unit'		=>	array(
			'label'	=>	'Unit Name',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'singkatan_unit'		=>	array(
			'label'	=>	'Unit Name',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'alamat'		=>	array(
			'label'	=>	'Address',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'no_telpon'	=> array(
			'label'	=>	'Telephone',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'no_fax'	=> array(
			'label'	=>	'No. Fax',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'alamat_email'	=> array(
			'label'	=>	'Email Address',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'sms_center'	=> array(
			'label'	=>	'No. SMS Center',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'url_aplikasi'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'pesan_sukses_pendaftaran'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'pesan_gagal_double'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'kode_tbl'	=> array(
			'label'	=>	'Kode',
			'rule'	=>	'trim|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'kode_sektor'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'ketua'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'manajer_sertifikasi'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'unit_name'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'text_body'	=> array(
			'label'	=>	'Text Body',
			'rule'	=>	'trim|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'string',
			'width' => 150
		),
		'th2019'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'opsi',
			'width' => 150
		),
		'th2020'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'opsi',
			'width' => 150
		),
		'th2021'	=> array(
			'label'	=>	'URL Aplikasi',
			'rule'	=>	'trim|xss_clean',
			'formatter'	=>	'string',
			'save_formatter' => 'opsi',
			'width' => 150
		)
	);

	protected $_order = "id";

	function __construct()
	{
		parent::__construct();
	}

}
