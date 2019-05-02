<?php
class Formulario extends CI_Model{
    function __construct(){
        parent:: __construct();
        $this -> load -> database();

    }
    function recorridoEstacion(){
         $data= $this->db->query('SELECT id_estacion, sitio, region, departamento, municipio FROM estacion');
         return $data->result_array();
    }
    function recorridoTecnologia(){
        $data= $this->db->query('SELECT id_tecnologia, nombre_tecnologia FROM tecnologia');
         return $data->result_array();
    }
    function recorridoBanda(){
        $data= $this->db->query('SELECT id_banda, nombre_banda FROM banda');
        return $data->result_array();
    }
    function recorridoGrupoVM(){
        $data= $this->db->query('
            SELECT id_vm_zte,
                ID_Site_Access,
                F_H_Solicitud,
                Estacion,
                Tecnologia,
                Banda,
                Ente_ejecutor,
                Nombre_grupo_skype,
                Regional_skype,
                Persona_solicita,
                Hora_apertura,
                Ingeniero_CreadorG,
                Incidente,
                hora_solicitud
            FROM sitio');
        return $data->result_array();
    }
    function guardarDatos($data){
        var_dump($data);
        $base = $this->db->query('INSERT INTO grupovm (ID_Site_Access, F_H_Solicitud, Estacion, Tecnologia, Banda, Ente_ejecutor, Nombre_grupo_skype, Regional_skype, Persona_solicita, Hora_apertura, Ingeniero_CreadorG, Incidente) VALUES ("'.$data[0].'","'.$data[1].'","'.$data[2].'","'.$data[3].'","'.$data[4].'","'.$data[5].'","'.$data[6].'","'.$data[7].'","'.$data[8].'","'.$data[9].'","'.$data[10].'","'.$data[11].'")');
        var_dump($base);
    }
}