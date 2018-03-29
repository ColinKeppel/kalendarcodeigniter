<?php

class home_model extends CI_Model
{

    public function insert($data)
    {
        $this->db->insert('birthdays', $data);
    }

    public function read()
    {
        $dbdata = array();
        $this->db->from('birthdays');
        $this->db->order_by('month', 'day');
        $this->db->select('*');
        $query = $this->db->get();
        if ($query->num_rows()){
            foreach($query->result_array() as $row) {
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

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('birthdays');

    }

}