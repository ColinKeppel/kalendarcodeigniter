<?php

class home_model extends CI_Model
{

    public function insert($data)
    {
        $this->db->insert('birthdays', $data);
    }

    public function read()
    {
        /*Geeft alle data weer van de database en orderd het op maand en dan op de dag.*/
        $dbdata = array();
        $this->db->from('birthdays');
        $this->db->order_by('month', 'day');
        $this->db->select('*');
        $query = $this->db->get();
        if ($query->num_rows()) {
            foreach ($query->result_array() as $row) {
                $dbdata[] = [
                    'id' => $row['id'],
                    'person' => $row['person'],
                    'month' => $row['month'],
                    'day' => $row['day'],
                    'year' => $row['year'],
                ];
            }
        }
        return $dbdata;
    }

    public function id_laten_zien($data)
    {
        /*Selecteert alles uit de database birthdays door * en pak daarna alle ID's.*/
        $this->db->select('*');
        $this->db->from('birthdays');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function update($id,$data){
        /*Update alle aangepaste ID's en geeft het door aan de database die hij doorgekregen kreeg van de database.*/
        $this->db->where('id',$id);
        $this->db->update('birthdays', $data);
    }

    public function delete($id)
    {
        /*verwijderd alle id's uit de database die hij doorgekregen kreeg van de controller*/
        $this->db->where('id', $id);
        $this->db->delete('birthdays');

    }

}
