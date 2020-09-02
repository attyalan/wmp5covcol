<?php

class Cover_Table
{
    private $db;
    public function __construct ( $db ) {
    $this->db = $db;}

    public function saveCover ($naam, $artiest, $foto, $genre, $land, $jaar, $kleur) {
        $sql = "INSERT INTO covers (naam, artiest, foto, genre, land, jaar, kleur) VALUES (?,?,?,?,?,?,?)";
        $statement = $this->db->prepare($sql);
				$data = array($naam, $artiest, $foto, $genre, $land, $jaar, $kleur);
        try{
            $statement->execute($data);
        } catch (Exception $e){
            $bds = "<p>Je probeerde deze sql: $postSQL<p>
                    <p>Exception: $e</p>";
            trigger_error($bds);
        }
    }

    public function geefCover($id) {
        $sql = "SELECT * FROM covers WHERE id = ?";
        $statement = $this->db->prepare($sql);
        $data = array($id);
        try {
            $statement->execute($data);
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                <p>Exception: $e</p>";
            trigger_error($bds );
        }
        $model = $statement->fetchObject();
        return $model;
    }

    public function verwijderCover($id) {
        $sql = "DELETE FROM covers WHERE id = ?";
        $statement = $this->db->prepare($sql);
        $data = array($id);
        try {
            $statement->execute($data);
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                <p>Exception: $e</p>";
            trigger_error($bds );
        }
    }

    public function geefRood () {
        $sql = "SELECT *  FROM covers WHERE kleur = 'red'";
        $statement = $this->db->prepare( $sql );
        try{
            $statement->execute();
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($bds);
        }
        return $statement;
    }

    public function geefBlauw () {
        $sql = "SELECT *  FROM covers WHERE kleur = '#5886e8'";
        $statement = $this->db->prepare( $sql );
        try{
            $statement->execute();
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($bds);
        }
        return $statement;
    }

    public function geefRoze () {
        $sql = "SELECT *  FROM covers WHERE kleur = 'pink'";
        $statement = $this->db->prepare( $sql );
        try{
            $statement->execute();
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($bds);
        }
        return $statement;
    }

    public function geefWit () {
        $sql = "SELECT *  FROM covers WHERE kleur = 'white'";
        $statement = $this->db->prepare( $sql );
        try{
            $statement->execute();
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($bds);
        }
        return $statement;
    }

    public function geefGroen () {
        $sql = "SELECT *  FROM covers WHERE kleur = 'green'";
        $statement = $this->db->prepare( $sql );
        try{
            $statement->execute();
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($bds);
        }
        return $statement;
    }

    public function geefOranje () {
        $sql = "SELECT *  FROM covers WHERE kleur = 'orange'";
        $statement = $this->db->prepare( $sql );
        try{
            $statement->execute();
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($bds);
        }
        return $statement;
    }

    public function geefBruin () {
        $sql = "SELECT *  FROM covers WHERE kleur = 'brown'";
        $statement = $this->db->prepare( $sql );
        try{
            $statement->execute();
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($bds);
        }
        return $statement;
    }

    public function geefPaars () {
        $sql = "SELECT *  FROM covers WHERE kleur = 'purple'";
        $statement = $this->db->prepare( $sql );
        try{
            $statement->execute();
        } catch (Exception $e) {
            $bds = "<p>Je probeerde deze sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($bds);
        }
        return $statement;
    }

        public function geefGeel () {
            $sql = "SELECT *  FROM covers WHERE kleur = 'yellow'";
            $statement = $this->db->prepare( $sql );
            try{
                $statement->execute();
            } catch (Exception $e) {
                $bds = "<p>Je probeerde deze sql: $sql <p>
                        <p>Exception: $e</p>";
                trigger_error($bds);
            }
            return $statement;
        }

        public function geefGrijs () {
            $sql = "SELECT *  FROM covers WHERE kleur = 'grey'";
            $statement = $this->db->prepare( $sql );
            try{
                $statement->execute();
            } catch (Exception $e) {
                $bds = "<p>Je probeerde deze sql: $sql <p>
                        <p>Exception: $e</p>";
                trigger_error($bds);
            }
            return $statement;
        }

        public function geefZwart () {
            $sql = "SELECT *  FROM covers WHERE kleur = 'black'";
            $statement = $this->db->prepare( $sql );
            try{
                $statement->execute();
            } catch (Exception $e) {
                $bds = "<p>Je probeerde deze sql: $sql <p>
                        <p>Exception: $e</p>";
                trigger_error($bds);
            }
            return $statement;
        }

}
