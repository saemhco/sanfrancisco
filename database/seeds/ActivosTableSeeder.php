<?php

use Illuminate\Database\Seeder;

class ActivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('activos')->insert([


	['n' => 'AED1', 'codigo' => '[ivp]', 'capa_id' => '1', 'nombre' => 'Inventario de Ips', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '5','dimension_C' => '7','dimension_A' => '6','dimension_NR' => '4',],
	['n' => 'AED2', 'codigo' => '[odt]', 'capa_id' => '1', 'nombre' => 'Ordenes de trabajo', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '9','dimension_I' => '8','dimension_C' => '7','dimension_A' => '7','dimension_NR' => '6',],
	['n' => 'AED3', 'codigo' => '[dgi]', 'capa_id' => '1', 'nombre' => 'Datos de gestión interna', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '8','dimension_I' => '9','dimension_C' => '9','dimension_A' => '8','dimension_NR' => '7',],
	['n' => 'AED4', 'codigo' => '[mlt]', 'capa_id' => '1', 'nombre' => 'Multimedia', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '4','dimension_I' => '0','dimension_C' => '3','dimension_A' => '5','dimension_NR' => '0',],
		
		
	['n' => 'AED5', 'codigo' => '[rbc]', 'capa_id' => '2', 'nombre' => 'Respaldos BACKUP', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '8','dimension_C' => '7','dimension_A' => '7','dimension_NR' => '6',],
	['n' => 'AED6', 'codigo' => '[dal]', 'capa_id' => '2', 'nombre' => 'Dato almacenados', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '6','dimension_C' => '5','dimension_A' => '6','dimension_NR' => '4',],
	['n' => 'AED7', 'codigo' => '[dfi]', 'capa_id' => '2', 'nombre' => 'Datos físicos', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '7','dimension_C' => '4','dimension_A' => '5','dimension_NR' => '3',],
	
	
	['n' => 'AED8', 'codigo' => '[shd]', 'capa_id' => '3', 'nombre' => 'Servicio de Host-Dominio', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '8','dimension_C' => '7','dimension_A' => '6','dimension_NR' => '6',],
	['n' => 'AED9', 'codigo' => '[sin]', 'capa_id' => '3', 'nombre' => 'Servicio de Internet', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '8','dimension_I' => '7','dimension_C' => '7','dimension_A' => '3','dimension_NR' => '3',],       
	['n' => 'AED10', 'codigo' => '[spt]', 'capa_id' => '3', 'nombre' => 'Servicio de mantenimiento de Pozo Tierra', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '0','dimension_C' => '6','dimension_A' => '0','dimension_NR' => '3',],       
	['n' => 'AED11', 'codigo' => '[sfo]', 'capa_id' => '3', 'nombre' => 'Servicio de Fibra Óptica', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '7','dimension_C' => '8','dimension_A' => '3','dimension_NR' => '0',],       
	
		
	['n' => 'APS1', 'codigo' => '[ocl]', 'capa_id' => '4', 'nombre' => 'ORACLE 11 GR2', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '8','dimension_I' => '9','dimension_C' => '8','dimension_A' => '7','dimension_NR' => '7',],       
	['n' => 'APS2', 'codigo' => '[jbe]', 'capa_id' => '4', 'nombre' => 'JBOOS Enterprise', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '7','dimension_C' => '8','dimension_A' => '0','dimension_NR' => '7',],       
	['n' => 'APS3', 'codigo' => '[sql]', 'capa_id' => '4', 'nombre' => 'Pl/sqls Developer', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '4','dimension_I' => '5','dimension_C' => '3','dimension_A' => '3','dimension_NR' => '3',],       
	['n' => 'APS4', 'codigo' => '[sfi]', 'capa_id' => '4', 'nombre' => 'Sistema Financiero Integrado (SFI) WEB', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '9','dimension_I' => '8','dimension_C' => '8','dimension_A' => '7','dimension_NR' => '7',],       
	['n' => 'APS5', 'codigo' => '[apc]', 'capa_id' => '4', 'nombre' => 'Ap_Cobradiario', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '8','dimension_I' => '7','dimension_C' => '8','dimension_A' => '7','dimension_NR' => '6',],       
	['n' => 'APS6', 'codigo' => '[vnc]', 'capa_id' => '4', 'nombre' => 'VNC Enterprise Edition E4.4.3', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '4','dimension_I' => '2','dimension_C' => '3','dimension_A' => '0','dimension_NR' => '2',],     
	['n' => 'APS7', 'codigo' => '[dwv]', 'capa_id' => '4', 'nombre' => 'Dvr_WebOcx Versión 5.1.7.3', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '3','dimension_I' => '2','dimension_C' => '3','dimension_A' => '1','dimension_NR' => '1',],     
	['n' => 'APS8', 'codigo' => '[sps]', 'capa_id' => '4', 'nombre' => 'SmartPSS 2.00.1', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '3','dimension_I' => '2','dimension_C' => '3','dimension_A' => '1','dimension_NR' => '1',],     
	['n' => 'APS9', 'codigo' => '[lmh]', 'capa_id' => '4', 'nombre' => 'LogMeIn Hamachi', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '3','dimension_I' => '2','dimension_C' => '3','dimension_A' => '1','dimension_NR' => '1',],     
	['n' => 'APS10', 'codigo' => '[wsp]', 'capa_id' => '4', 'nombre' => 'WinSCP 5.9.5', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '4','dimension_I' => '3','dimension_C' => '4','dimension_A' => '0','dimension_NR' => '3',],     
	['n' => 'APS11', 'codigo' => '[vmc]', 'capa_id' => '4', 'nombre' => 'VMware vSphere Cliente 5.5', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '5','dimension_I' => '3','dimension_C' => '5','dimension_A' => '3','dimension_NR' => '3',],     
	['n' => 'APS12', 'codigo' => '[put]', 'capa_id' => '4', 'nombre' => 'Putty', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '5','dimension_I' => '5','dimension_C' => '5','dimension_A' => '3','dimension_NR' => '3',],     
	['n' => 'APS13', 'codigo' => '[sow]', 'capa_id' => '4', 'nombre' => 'Sistema Operativo Windows', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '6','dimension_C' => '5','dimension_A' => '3','dimension_NR' => '4',],     
	['n' => 'APS14', 'codigo' => '[sol]', 'capa_id' => '4', 'nombre' => 'Sistema Operativo Linux', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '8','dimension_I' => '7','dimension_C' => '8','dimension_A' => '6','dimension_NR' => '6',],     
	['n' => 'APS15', 'codigo' => '[nwb]', 'capa_id' => '4', 'nombre' => 'Navegador Web', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '8','dimension_I' => '1','dimension_C' => '3','dimension_A' => '5','dimension_NR' => '4',],     
	['n' => 'APS16', 'codigo' => '[mpp]', 'capa_id' => '4', 'nombre' => 'Microsoft Office Professional Plus 2010', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '5','dimension_I' => '1','dimension_C' => '3','dimension_A' => '2','dimension_NR' => '3',],     
	['n' => 'APS17', 'codigo' => '[sdd]', 'capa_id' => '4', 'nombre' => 'Software de documentación Open Office', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '5','dimension_I' => '1','dimension_C' => '3','dimension_A' => '2','dimension_NR' => '3',],     
	['n' => 'APS18', 'codigo' => '[afp]', 'capa_id' => '4', 'nombre' => 'Adobe flash player', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '2','dimension_I' => '3','dimension_C' => '0','dimension_A' => '4','dimension_NR' => '0',],     
	['n' => 'APS19', 'codigo' => '[vis]', 'capa_id' => '4', 'nombre' => 'Visio', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '2','dimension_I' => '0','dimension_C' => '3','dimension_A' => '0','dimension_NR' => '2',],     
	['n' => 'APS20', 'codigo' => '[sdb]', 'capa_id' => '4', 'nombre' => 'Sistema de Backup', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '3','dimension_I' => '3','dimension_C' => '0','dimension_A' => '4','dimension_NR' => '0',],     
	['n' => 'APS21', 'codigo' => '[adr]', 'capa_id' => '4', 'nombre' => 'Adobe Reader 11', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '2','dimension_I' => '3','dimension_C' => '0','dimension_A' => '4','dimension_NR' => '0',],     
	['n' => 'APS22', 'codigo' => '[cco]', 'capa_id' => '4', 'nombre' => 'Correo corporativo', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '3','dimension_I' => '3','dimension_C' => '5','dimension_A' => '4','dimension_NR' => '6',],     
	['n' => 'APS23', 'codigo' => '[jav]', 'capa_id' => '4', 'nombre' => 'Java 6 Update 45', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '0','dimension_C' => '7','dimension_A' => '0','dimension_NR' => '7',],     
	['n' => 'APS24', 'codigo' => '[aen]', 'capa_id' => '4', 'nombre' => 'Antivirus ESED NOD 32', 'unidad' => '100', 'costo_unitario' => '35', 'dimension_D' => '9','dimension_I' => '7','dimension_C' => '9','dimension_A' => '8','dimension_NR' => '6',],     
	

	['n' => 'EIH1', 'codigo' => '[utm]', 'capa_id' => '5', 'nombre' => 'UTM FIREWALL', 'unidad' => '1', 'costo_unitario' => '20816.40', 'dimension_D' => '10','dimension_I' => '10','dimension_C' => '10','dimension_A' => '10','dimension_NR' => '10',],     
	['n' => 'EIH2', 'codigo' => '[aac]', 'capa_id' => '5', 'nombre' => 'Aire Acondicionado', 'unidad' => '2', 'costo_unitario' => '2064.61', 'dimension_D' => '4','dimension_I' => '0','dimension_C' => '5','dimension_A' => '0','dimension_NR' => '3',],     
	['n' => 'EIH3', 'codigo' => '[asg]', 'capa_id' => '5', 'nombre' => 'Alarma de seguridad', 'unidad' => '5', 'costo_unitario' => '610', 'dimension_D' => '8','dimension_I' => '7','dimension_C' => '8','dimension_A' => '7','dimension_NR' => '6',],     
	['n' => 'EIH4', 'codigo' => '[apu]', 'capa_id' => '5', 'nombre' => 'Access Point Unify Ubiquity', 'unidad' => '5', 'costo_unitario' => '560', 'dimension_D' => '5','dimension_I' => '7','dimension_C' => '8','dimension_A' => '8','dimension_NR' => '7',],     
	['n' => 'EIH5', 'codigo' => '[apt]', 'capa_id' => '5', 'nombre' => 'Access Point TP-LINK', 'unidad' => '4', 'costo_unitario' => '248', 'dimension_D' => '5','dimension_I' => '7','dimension_C' => '8','dimension_A' => '8','dimension_NR' => '7',],     
	['n' => 'EIH6', 'codigo' => '[bdr]', 'capa_id' => '5', 'nombre' => 'BLUE-RAY DISK', 'unidad' => '1', 'costo_unitario' => '320', 'dimension_D' => '1','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '1',],     
	['n' => 'EIH7', 'codigo' => '[cdb]', 'capa_id' => '5', 'nombre' => 'Cajero DIEBOLD', 'unidad' => '1', 'costo_unitario' => '69720', 'dimension_D' => '9','dimension_I' => '10','dimension_C' => '10','dimension_A' => '10','dimension_NR' => '9',],     
	['n' => 'EIH8', 'codigo' => '[cmt]', 'capa_id' => '5', 'nombre' => 'Cajero Multifuncional NCR', 'unidad' => '2', 'costo_unitario' => '283793.60', 'dimension_D' => '9','dimension_I' => '10','dimension_C' => '10','dimension_A' => '10','dimension_NR' => '9',],     
	['n' => 'EIH9', 'codigo' => '[csf]', 'capa_id' => '5', 'nombre' => 'Cámara de Seguridad Fija', 'unidad' => '21', 'costo_unitario' => '288.84', 'dimension_D' => '7','dimension_I' => '7','dimension_C' => '5','dimension_A' => '3','dimension_NR' => '3',],     
	['n' => 'EIH10', 'codigo' => '[csm]', 'capa_id' => '5', 'nombre' => 'Cámara de Seguridad Móvil PTZ', 'unidad' => '15', 'costo_unitario' => '1250', 'dimension_D' => '8','dimension_I' => '8','dimension_C' => '6','dimension_A' => '3','dimension_NR' => '4',],     
	['n' => 'EIH11', 'codigo' => '[csi]', 'capa_id' => '5', 'nombre' => 'Cámara de Seguridad IP', 'unidad' => '8', 'costo_unitario' => '270', 'dimension_D' => '7','dimension_I' => '7','dimension_C' => '5','dimension_A' => '3','dimension_NR' => '3',],     
	['n' => 'EIH12', 'codigo' => '[cas]', 'capa_id' => '5', 'nombre' => 'Case', 'unidad' => '20', 'costo_unitario' => '75', 'dimension_D' => '2','dimension_I' => '2','dimension_C' => '2','dimension_A' => '0','dimension_NR' => '0',],     
	['n' => 'EIH13', 'codigo' => '[cpu]', 'capa_id' => '5', 'nombre' => 'Computadoras CPU', 'unidad' => '97', 'costo_unitario' => '1720', 'dimension_D' => '7','dimension_I' => '6','dimension_C' => '6','dimension_A' => '5','dimension_NR' => '4',],     
	['n' => 'EIH14', 'codigo' => '[cdb]', 'capa_id' => '5', 'nombre' => 'Contador de Billete', 'unidad' => '9', 'costo_unitario' => '2850', 'dimension_D' => '5','dimension_I' => '0','dimension_C' => '5','dimension_A' => '0','dimension_NR' => '4',],     
	['n' => 'EIH15', 'codigo' => '[cdm]', 'capa_id' => '5', 'nombre' => 'Contador de Moneda', 'unidad' => '2', 'costo_unitario' => '2100', 'dimension_D' => '5','dimension_I' => '0','dimension_C' => '4','dimension_A' => '0','dimension_NR' => '3',],     
	['n' => 'EIH16', 'codigo' => '[cpt]', 'capa_id' => '5', 'nombre' => 'Controller PTZ', 'unidad' => '1', 'costo_unitario' => '328.68', 'dimension_D' => '4','dimension_I' => '4','dimension_C' => '4','dimension_A' => '4','dimension_NR' => '3',],     
	['n' => 'EIH17', 'codigo' => '[cpt]', 'capa_id' => '5', 'nombre' => 'DVR - Grabadora de Video Digital', 'unidad' => '6', 'costo_unitario' => '890', 'dimension_D' => '7','dimension_I' => '8','dimension_C' => '7','dimension_A' => '8','dimension_NR' => '8',],     
	['n' => 'EIH18', 'codigo' => '[ede]', 'capa_id' => '5', 'nombre' => 'Estabilizador de energía', 'unidad' => '108', 'costo_unitario' => '55', 'dimension_D' => '4','dimension_I' => '0','dimension_C' => '4','dimension_A' => '0','dimension_NR' => '0',],     
	['n' => 'EIH19', 'codigo' => '[etd]', 'capa_id' => '5', 'nombre' => 'Etiquetadora', 'unidad' => '1', 'costo_unitario' => '2822', 'dimension_D' => '2','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '1',],     
	['n' => 'EIH20', 'codigo' => '[ext]', 'capa_id' => '5', 'nombre' => 'Extintores', 'unidad' => '5', 'costo_unitario' => '95', 'dimension_D' => '4','dimension_I' => '0','dimension_C' => '4','dimension_A' => '3','dimension_NR' => '2',],     
	['n' => 'EIH21', 'codigo' => '[fdp]', 'capa_id' => '5', 'nombre' => 'Fuente de poder', 'unidad' => '12', 'costo_unitario' => '50', 'dimension_D' => '4','dimension_I' => '0','dimension_C' => '4','dimension_A' => '0','dimension_NR' => '3',],     
	['n' => 'EIH22', 'codigo' => '[fff]', 'capa_id' => '5', 'nombre' => 'Firewall Fortinet FAP 220B-N', 'unidad' => '1', 'costo_unitario' => '1643.40', 'dimension_D' => '6','dimension_I' => '6','dimension_C' => '6','dimension_A' => '6','dimension_NR' => '5',],     
	['n' => 'EIH23', 'codigo' => '[ffa]', 'capa_id' => '5', 'nombre' => 'Firewall Fortinet Analyzer', 'unidad' => '1', 'costo_unitario' => '8300', 'dimension_D' => '9','dimension_I' => '10','dimension_C' => '10','dimension_A' => '9','dimension_NR' => '9',],     
	['n' => 'EIH24', 'codigo' => '[gsa]', 'capa_id' => '5', 'nombre' => 'Gabinete Satra', 'unidad' => '7', 'costo_unitario' => '780', 'dimension_D' => '8','dimension_I' => '0','dimension_C' => '8','dimension_A' => '0','dimension_NR' => '6',],
	['n' => 'EIH25', 'codigo' => '[imr]', 'capa_id' => '5', 'nombre' => 'Impresoras en RED', 'unidad' => '15', 'costo_unitario' => '2373.80', 'dimension_D' => '6','dimension_I' => '3','dimension_C' => '3','dimension_A' => '4','dimension_NR' => '3',],
	['n' => 'EIH26', 'codigo' => '[iml]', 'capa_id' => '5', 'nombre' => 'Impresoras Locales', 'unidad' => '15', 'costo_unitario' => '720', 'dimension_D' => '6','dimension_I' => '3','dimension_C' => '3','dimension_A' => '3','dimension_NR' => '3',],
	['n' => 'EIH27', 'codigo' => '[imt]', 'capa_id' => '5', 'nombre' => 'Impresoras Térmicas', 'unidad' => '12', 'costo_unitario' => '1050', 'dimension_D' => '6','dimension_I' => '4','dimension_C' => '4','dimension_A' => '4','dimension_NR' => '4',],
	['n' => 'EIH28', 'codigo' => '[scn]', 'capa_id' => '5', 'nombre' => 'Scanner', 'unidad' => '3', 'costo_unitario' => '292', 'dimension_D' => '3','dimension_I' => '2','dimension_C' => '2','dimension_A' => '0','dimension_NR' => '0',],
	['n' => 'EIH29', 'codigo' => '[jac]', 'capa_id' => '5', 'nombre' => 'Jack Modular', 'unidad' => '58', 'costo_unitario' => '24.90', 'dimension_D' => '2','dimension_I' => '0','dimension_C' => '3','dimension_A' => '0','dimension_NR' => '0',],
	['n' => 'EIH30', 'codigo' => '[ros]', 'capa_id' => '5', 'nombre' => 'Rosetas', 'unidad' => '50', 'costo_unitario' => '16.60', 'dimension_D' => '2','dimension_I' => '0','dimension_C' => '3','dimension_A' => '0','dimension_NR' => '0',],
	['n' => 'EIH31', 'codigo' => '[cri]', 'capa_id' => '5', 'nombre' => 'Kit Satra Crimping', 'unidad' => '2', 'costo_unitario' => '420', 'dimension_D' => '3','dimension_I' => '0','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '2',],
	['n' => 'EIH32', 'codigo' => '[lap]', 'capa_id' => '5', 'nombre' => 'Laptops', 'unidad' => '9', 'costo_unitario' => '2250', 'dimension_D' => '7','dimension_I' => '7','dimension_C' => '0','dimension_A' => '7','dimension_NR' => '6',],
	['n' => 'EIH33', 'codigo' => '[lin]', 'capa_id' => '5', 'nombre' => 'Lectoras internas', 'unidad' => '9', 'costo_unitario' => '150', 'dimension_D' => '2','dimension_I' => '0','dimension_C' => '1','dimension_A' => '0','dimension_NR' => '2',],
	['n' => 'EIH34', 'codigo' => '[lex]', 'capa_id' => '5', 'nombre' => 'Lectora Externas', 'unidad' => '2', 'costo_unitario' => '268', 'dimension_D' => '2','dimension_I' => '0','dimension_C' => '1','dimension_A' => '0','dimension_NR' => '2',],
	['n' => 'EIH35', 'codigo' => '[lem]', 'capa_id' => '5', 'nombre' => 'Luz de Emergencia', 'unidad' => '22', 'costo_unitario' => '65', 'dimension_D' => '4','dimension_I' => '2','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '0',],
	['n' => 'EIH36', 'codigo' => '[mcg]', 'capa_id' => '5', 'nombre' => 'Media converter trendnet Gigabit', 'unidad' => '4', 'costo_unitario' => '557.76', 'dimension_D' => '10','dimension_I' => '7','dimension_C' => '9','dimension_A' => '8','dimension_NR' => '7',],
	['n' => 'EIH37', 'codigo' => '[mcf]', 'capa_id' => '5', 'nombre' => 'Media converter TP-LINK Ethernet', 'unidad' => '4', 'costo_unitario' => '341.96', 'dimension_D' => '10','dimension_I' => '7','dimension_C' => '9','dimension_A' => '8','dimension_NR' => '7',],
	['n' => 'EIH38', 'codigo' => '[mer]', 'capa_id' => '5', 'nombre' => 'Memoria RAM', 'unidad' => '8', 'costo_unitario' => '120', 'dimension_D' => '3','dimension_I' => '3','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '2',],
	['n' => 'EIH39', 'codigo' => '[mod]', 'capa_id' => '5', 'nombre' => 'Modem', 'unidad' => '6', 'costo_unitario' => '2500', 'dimension_D' => '9','dimension_I' => '9','dimension_C' => '8','dimension_A' => '7','dimension_NR' => '8',],
	['n' => 'EIH40', 'codigo' => '[mon]', 'capa_id' => '5', 'nombre' => 'Monitores', 'unidad' => '114', 'costo_unitario' => '485', 'dimension_D' => '5','dimension_I' => '4','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '3',],
	['n' => 'EIH41', 'codigo' => '[kvm]', 'capa_id' => '5', 'nombre' => 'Monitor Satra 16 PORT KVM SWITCH LCD-05D', 'unidad' => '1', 'costo_unitario' => '4946.80', 'dimension_D' => '5','dimension_I' => '5','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '4',],
	['n' => 'EIH42', 'codigo' => '[mou]', 'capa_id' => '5', 'nombre' => 'Mouse', 'unidad' => '145', 'costo_unitario' => '35', 'dimension_D' => '3','dimension_I' => '2','dimension_C' => '3','dimension_A' => '2','dimension_NR' => '2',],
	['n' => 'EIH43', 'codigo' => '[hdm]', 'capa_id' => '5', 'nombre' => 'Multi HDMI', 'unidad' => '1', 'costo_unitario' => '260', 'dimension_D' => '2','dimension_I' => '1','dimension_C' => '3','dimension_A' => '1','dimension_NR' => '0',],
	['n' => 'EIH44', 'codigo' => '[pdc]', 'capa_id' => '5', 'nombre' => 'Panel de Conexiones', 'unidad' => '9', 'costo_unitario' => '320', 'dimension_D' => '6','dimension_I' => '6','dimension_C' => '7','dimension_A' => '0','dimension_NR' => '6',],
	['n' => 'EIH45', 'codigo' => '[prt]', 'capa_id' => '5', 'nombre' => 'Parlantes', 'unidad' => '9', 'costo_unitario' => '25', 'dimension_D' => '3','dimension_I' => '1','dimension_C' => '3','dimension_A' => '3','dimension_NR' => '1',],
	['n' => 'EIH46', 'codigo' => '[pty]', 'capa_id' => '5', 'nombre' => 'Parlantes Yamaha', 'unidad' => '2', 'costo_unitario' => '4906.96', 'dimension_D' => '3','dimension_I' => '1','dimension_C' => '3','dimension_A' => '3','dimension_NR' => '1',],
	['n' => 'EIH47', 'codigo' => '[prc]', 'capa_id' => '5', 'nombre' => 'Procesadores', 'unidad' => '7', 'costo_unitario' => '820', 'dimension_D' => '3','dimension_I' => '3','dimension_C' => '4','dimension_A' => '3','dimension_NR' => '2',],
	['n' => 'EIH48', 'codigo' => '[pzt]', 'capa_id' => '5', 'nombre' => 'Pozo a tierra', 'unidad' => '3', 'costo_unitario' => '0', 'dimension_D' => '9','dimension_I' => '5','dimension_C' => '8','dimension_A' => '3','dimension_NR' => '3',],
	['n' => 'EIH49', 'codigo' => '[pwr]', 'capa_id' => '5', 'nombre' => 'Power Rack x 8 tomas', 'unidad' => '8', 'costo_unitario' => '90', 'dimension_D' => '5','dimension_I' => '3','dimension_C' => '5','dimension_A' => '3','dimension_NR' => '3',],
	['n' => 'EIH50', 'codigo' => '[seh]', 'capa_id' => '5', 'nombre' => 'Sensor de humo', 'unidad' => '2', 'costo_unitario' => '120', 'dimension_D' => '5','dimension_I' => '2','dimension_C' => '3','dimension_A' => '1','dimension_NR' => '3',],
	['n' => 'EIH51', 'codigo' => '[sem]', 'capa_id' => '5', 'nombre' => 'Sensor de movimiento', 'unidad' => '11', 'costo_unitario' => '90', 'dimension_D' => '5','dimension_I' => '2','dimension_C' => '3','dimension_A' => '1','dimension_NR' => '3',],
	['n' => 'EIH52', 'codigo' => '[sbd]', 'capa_id' => '5', 'nombre' => 'Servidor Base de Datos', 'unidad' => '1', 'costo_unitario' => '58697.60', 'dimension_D' => '9','dimension_I' => '10','dimension_C' => '9','dimension_A' => '9','dimension_NR' => '10',],
	['n' => 'EIH53', 'codigo' => '[sda]', 'capa_id' => '5', 'nombre' => 'Servidor de Dominio/Archivos', 'unidad' => '1', 'costo_unitario' => '14110', 'dimension_D' => '8','dimension_I' => '8','dimension_C' => '7','dimension_A' => '8','dimension_NR' => '8',],
	['n' => 'EIH54', 'codigo' => '[sst]', 'capa_id' => '5', 'nombre' => 'Servidor Switch Transaccional ATM', 'unidad' => '1', 'costo_unitario' => '18027.60', 'dimension_D' => '8','dimension_I' => '8','dimension_C' => '8','dimension_A' => '8','dimension_NR' => '8',],
	['n' => 'EIH55', 'codigo' => '[sbl]', 'capa_id' => '5', 'nombre' => 'Servidor Balanceador', 'unidad' => '1', 'costo_unitario' => '13877.60', 'dimension_D' => '9','dimension_I' => '8','dimension_C' => '9','dimension_A' => '8','dimension_NR' => '8',],
	['n' => 'EIH56', 'codigo' => '[sa1]', 'capa_id' => '5', 'nombre' => 'Servidor de Aplicaciones 1', 'unidad' => '1', 'costo_unitario' => '42695.20', 'dimension_D' => '10','dimension_I' => '10','dimension_C' => '10','dimension_A' => '10','dimension_NR' => '10',],
	['n' => 'EIH57', 'codigo' => '[sa2]', 'capa_id' => '5', 'nombre' => 'Servidor de Aplicaciones 2', 'unidad' => '1', 'costo_unitario' => '15537.60', 'dimension_D' => '10','dimension_I' => '10','dimension_C' => '10','dimension_A' => '10','dimension_NR' => '10',],
	['n' => 'EIH58', 'codigo' => '[eqb]', 'capa_id' => '5', 'nombre' => 'Equipo Biométrico', 'unidad' => '5', 'costo_unitario' => '420', 'dimension_D' => '5','dimension_I' => '4','dimension_C' => '2','dimension_A' => '3','dimension_NR' => '2',],
	['n' => 'EIH59', 'codigo' => '[sdp]', 'capa_id' => '5', 'nombre' => 'Supresor de picos', 'unidad' => '1', 'costo_unitario' => '18', 'dimension_D' => '4','dimension_I' => '2','dimension_C' => '2','dimension_A' => '2','dimension_NR' => '2',],
	['n' => 'EIH60', 'codigo' => '[sws]', 'capa_id' => '5', 'nombre' => 'Switch SATRA', 'unidad' => '3', 'costo_unitario' => '3220.40', 'dimension_D' => '8','dimension_I' => '7','dimension_C' => '8','dimension_A' => '8','dimension_NR' => '8',],
	['n' => 'EIH61', 'codigo' => '[swd]', 'capa_id' => '5', 'nombre' => 'Switch D-LINK', 'unidad' => '9', 'costo_unitario' => '2124.80', 'dimension_D' => '8','dimension_I' => '7','dimension_C' => '8','dimension_A' => '8','dimension_NR' => '8',],
	['n' => 'EIH62', 'codigo' => '[swt]', 'capa_id' => '5', 'nombre' => 'Switch TP-LINK', 'unidad' => '4', 'costo_unitario' => '1958.80', 'dimension_D' => '8','dimension_I' => '7','dimension_C' => '8','dimension_A' => '8','dimension_NR' => '8',],
	['n' => 'EIH63', 'codigo' => '[tah]', 'capa_id' => '5', 'nombre' => 'Tablets Huawey', 'unidad' => '12', 'costo_unitario' => '580', 'dimension_D' => '6','dimension_I' => '5','dimension_C' => '4','dimension_A' => '4','dimension_NR' => '4',],
	['n' => 'EIH64', 'codigo' => '[tal]', 'capa_id' => '5', 'nombre' => 'Tablets Lenovo', 'unidad' => '7', 'costo_unitario' => '400', 'dimension_D' => '6','dimension_I' => '5','dimension_C' => '4','dimension_A' => '4','dimension_NR' => '4',],
	['n' => 'EIH65', 'codigo' => '[tbo]', 'capa_id' => '5', 'nombre' => 'Taladro Kit BOSCH', 'unidad' => '1', 'costo_unitario' => '320', 'dimension_D' => '3','dimension_I' => '3','dimension_C' => '2','dimension_A' => '2','dimension_NR' => '2',],
	['n' => 'EIH66', 'codigo' => '[tec]', 'capa_id' => '5', 'nombre' => 'Teclados USB/PS2', 'unidad' => '142', 'costo_unitario' => '30', 'dimension_D' => '4','dimension_I' => '3','dimension_C' => '4','dimension_A' => '3','dimension_NR' => '3',],
	['n' => 'EIH67', 'codigo' => '[tv5]', 'capa_id' => '5', 'nombre' => 'Televisor Samsung de 55', 'unidad' => '3', 'costo_unitario' => '2850', 'dimension_D' => '6','dimension_I' => '4','dimension_C' => '5','dimension_A' => '2','dimension_NR' => '3',],
	['n' => 'EIH68', 'codigo' => '[tv9]', 'capa_id' => '5', 'nombre' => 'Televisor Samsung de 49', 'unidad' => '6', 'costo_unitario' => '2180', 'dimension_D' => '6','dimension_I' => '4','dimension_C' => '5','dimension_A' => '2','dimension_NR' => '3',],
	['n' => 'EIH69', 'codigo' => '[tv3]', 'capa_id' => '5', 'nombre' => 'Televisor Samsung de 43', 'unidad' => '1', 'costo_unitario' => '1850', 'dimension_D' => '6','dimension_I' => '4','dimension_C' => '5','dimension_A' => '2','dimension_NR' => '3',],
	['n' => 'EIH70', 'codigo' => '[tra]', 'capa_id' => '5', 'nombre' => 'Transformador  XFMR ATM', 'unidad' => '2', 'costo_unitario' => '5146', 'dimension_D' => '10','dimension_I' => '9','dimension_C' => '9','dimension_A' => '9','dimension_NR' => '9',],
	['n' => 'EIH71', 'codigo' => '[ups]', 'capa_id' => '5', 'nombre' => 'UPS SMART 3000 ATM', 'unidad' => '2', 'costo_unitario' => '3984', 'dimension_D' => '10','dimension_I' => '9','dimension_C' => '9','dimension_A' => '9','dimension_NR' => '9',],
	['n' => 'EIH72', 'codigo' => '[tdr]', 'capa_id' => '5', 'nombre' => 'Tarjeta de red', 'unidad' => '21', 'costo_unitario' => '50', 'dimension_D' => '7','dimension_I' => '6','dimension_C' => '7','dimension_A' => '6','dimension_NR' => '6',],
	['n' => 'EIH73', 'codigo' => '[rot]', 'capa_id' => '5', 'nombre' => 'Router', 'unidad' => '10', 'costo_unitario' => '3253.60', 'dimension_D' => '10','dimension_I' => '9','dimension_C' => '10','dimension_A' => '8','dimension_NR' => '7',],
	
		
	['n' => 'CRC1', 'codigo' => '[lan]', 'capa_id' => '6', 'nombre' => 'Red LAN', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '4','dimension_C' => '4','dimension_A' => '3','dimension_NR' => '3',],
	['n' => 'CRC2', 'codigo' => '[wan]', 'capa_id' => '6', 'nombre' => 'Red WAN', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '4','dimension_C' => '4','dimension_A' => '3','dimension_NR' => '3',],
	['n' => 'CRC3', 'codigo' => '[int]', 'capa_id' => '6', 'nombre' => 'Internet', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '8','dimension_I' => '3','dimension_C' => '4','dimension_A' => '3','dimension_NR' => '4',],
	['n' => 'CRC4', 'codigo' => '[pgw]', 'capa_id' => '6', 'nombre' => 'Pagina web', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '8','dimension_I' => '0','dimension_C' => '3','dimension_A' => '4','dimension_NR' => '3',],
	['n' => 'CRC5', 'codigo' => '[pap]', 'capa_id' => '6', 'nombre' => 'Punto a punto', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '5','dimension_I' => '2','dimension_C' => '0','dimension_A' => '2','dimension_NR' => '0',],
	['n' => 'CRC6', 'codigo' => '[vpn]', 'capa_id' => '6', 'nombre' => 'Red privada Virtual', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '8','dimension_I' => '3','dimension_C' => '6','dimension_A' => '1','dimension_NR' => '4',],
	['n' => 'CRC7', 'codigo' => '[ads]', 'capa_id' => '6', 'nombre' => 'ADSL', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '0','dimension_C' => '5','dimension_A' => '2','dimension_NR' => '3',],
	['n' => 'CRC8', 'codigo' => '[rin]', 'capa_id' => '6', 'nombre' => 'Red inalámbrica', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '5','dimension_I' => '3','dimension_C' => '0','dimension_A' => '3','dimension_NR' => '2',],
	['n' => 'CRC9', 'codigo' => '[tmo]', 'capa_id' => '6', 'nombre' => 'Telefonía móvil', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '4','dimension_I' => '4','dimension_C' => '3','dimension_A' => '2','dimension_NR' => '4',],
	
	
	['n' => 'SIS1', 'codigo' => '[pdv]', 'capa_id' => '7', 'nombre' => 'Pendrive', 'unidad' => '5', 'costo_unitario' => '0', 'dimension_D' => '2','dimension_I' => '2','dimension_C' => '2','dimension_A' => '3','dimension_NR' => '0',],
	['n' => 'SIS2', 'codigo' => '[cdb]', 'capa_id' => '7', 'nombre' => 'CD/DVD /BLUE-RAY', 'unidad' => '100', 'costo_unitario' => '0', 'dimension_D' => '2','dimension_I' => '3','dimension_C' => '3','dimension_A' => '4','dimension_NR' => '0',],
	['n' => 'SIS3', 'codigo' => '[prm]', 'capa_id' => '7', 'nombre' => 'Proyector multimedia', 'unidad' => '2', 'costo_unitario' => '2200', 'dimension_D' => '3','dimension_I' => '4','dimension_C' => '0','dimension_A' => '0','dimension_NR' => '4',],
	['n' => 'SIS4', 'codigo' => '[dex]', 'capa_id' => '7', 'nombre' => 'Discos externos', 'unidad' => '2', 'costo_unitario' => '250', 'dimension_D' => '3','dimension_I' => '4','dimension_C' => '3','dimension_A' => '3','dimension_NR' => '4',],
	['n' => 'SIS5', 'codigo' => '[tdm]', 'capa_id' => '7', 'nombre' => 'Lector de memorias', 'unidad' => '1', 'costo_unitario' => '230', 'dimension_D' => '3','dimension_I' => '4','dimension_C' => '3','dimension_A' => '3','dimension_NR' => '3',],
	['n' => 'SIS6', 'codigo' => '[hdv]', 'capa_id' => '7', 'nombre' => 'Hard Drive', 'unidad' => '10', 'costo_unitario' => '235', 'dimension_D' => '3','dimension_I' => '4','dimension_C' => '3','dimension_A' => '3','dimension_NR' => '4',],
	
	
	['n' => 'EAE1', 'codigo' => '[sai]', 'capa_id' => '8', 'nombre' => 'Sistema de Alimentación Interrumpida', 'unidad' => '5', 'costo_unitario' => '2700', 'dimension_D' => '8','dimension_I' => '6','dimension_C' => '0','dimension_A' => '2','dimension_NR' => '3',],
	['n' => 'EAE2', 'codigo' => '[gpe]', 'capa_id' => '8', 'nombre' => 'Grupo Electrógeno', 'unidad' => '1', 'costo_unitario' => '59096', 'dimension_D' => '9','dimension_I' => '7','dimension_C' => '0','dimension_A' => '4','dimension_NR' => '4',],
	['n' => 'EAE3', 'codigo' => '[cab]', 'capa_id' => '8', 'nombre' => 'Cableado Contingencia', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '6','dimension_C' => '5','dimension_A' => '4','dimension_NR' => '4',],
	['n' => 'EAE4', 'codigo' => '[mvl]', 'capa_id' => '8', 'nombre' => 'Mobiliario', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '5','dimension_I' => '0','dimension_C' => '4','dimension_A' => '0','dimension_NR' => '3',],
	['n' => 'EAE5', 'codigo' => '[edc]', 'capa_id' => '8', 'nombre' => 'Equipo de Climatización ', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '7','dimension_C' => '0','dimension_A' => '1','dimension_NR' => '3',],
	['n' => 'EAE6', 'codigo' => '[cel]', 'capa_id' => '8', 'nombre' => 'Cable Eléctrico', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '5','dimension_C' => '2','dimension_A' => '1','dimension_NR' => '3',],
	['n' => 'EAE7', 'codigo' => '[fop]', 'capa_id' => '8', 'nombre' => 'Fibra Óptica', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '4','dimension_C' => '0','dimension_A' => '3','dimension_NR' => '4',],
	
	
	['n' => 'INI1', 'codigo' => '[ofi]', 'capa_id' => '9', 'nombre' => 'Oficina', 'unidad' => '4', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '5','dimension_C' => '3','dimension_A' => '3','dimension_NR' => '0',],
	['n' => 'INI2', 'codigo' => '[sco]', 'capa_id' => '9', 'nombre' => 'Sala de Comunicaciones', 'unidad' => '1', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '5','dimension_C' => '5','dimension_A' => '4','dimension_NR' => '3',],
	['n' => 'INI3', 'codigo' => '[adm]', 'capa_id' => '9', 'nombre' => 'Área de mantenimiento', 'unidad' => '2', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '5','dimension_C' => '5','dimension_A' => '0','dimension_NR' => '3',],
	
	
	['n' => 'PSP1', 'codigo' => '[ger]', 'capa_id' => '10', 'nombre' => 'Gerencia de Sistemas', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '5','dimension_C' => '5','dimension_A' => '3','dimension_NR' => '3',],
	['n' => 'PSP2', 'codigo' => '[aux]', 'capa_id' => '10', 'nombre' => 'Auxiliarles de área', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '4','dimension_C' => '5','dimension_A' => '3','dimension_NR' => '3',],
	['n' => 'PSP3', 'codigo' => '[use]', 'capa_id' => '10', 'nombre' => 'Usuarios Externos', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '6','dimension_I' => '3','dimension_C' => '3','dimension_A' => '2','dimension_NR' => '3',],
	['n' => 'PSP4', 'codigo' => '[pea]', 'capa_id' => '10', 'nombre' => 'Personal Administrativo', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '5','dimension_I' => '0','dimension_C' => '4','dimension_A' => '3','dimension_NR' => '2',],
	['n' => 'PSP5', 'codigo' => '[tin]', 'capa_id' => '10', 'nombre' => 'TI', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '6','dimension_C' => '8','dimension_A' => '5','dimension_NR' => '5',],
	['n' => 'PSP6', 'codigo' => '[sfi]', 'capa_id' => '10', 'nombre' => 'Seguridad Física', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '7','dimension_I' => '8','dimension_C' => '4','dimension_A' => '3','dimension_NR' => '0',],
	['n' => 'PSP7', 'codigo' => '[pat]', 'capa_id' => '10', 'nombre' => 'Recorredor de pozos', 'unidad' => '0', 'costo_unitario' => '0', 'dimension_D' => '5','dimension_I' => '5','dimension_C' => '4','dimension_A' => '0','dimension_NR' => '0',]
	

]);


    }
}
